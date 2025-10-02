(async function () {
  const track   = document.getElementById('testi-track');
  const prev    = document.getElementById('testi-prev');
  const next    = document.getElementById('testi-next');
  const dotsWrap= document.getElementById('testi-dots');
  if (!track) return;

  // ---- Resolve JSON source per page ----
  function getPageKey() {
    if (document.body.dataset.page) return document.body.dataset.page.toLowerCase();
    const segs = location.pathname.split('/').filter(Boolean);
    let last = segs.pop() || 'index.php';
    if (last.toLowerCase() === 'index.php' && segs.length) last = segs.pop(); // /ojs/index.php -> "ojs"
    return last.toLowerCase();
  }

  const pageToJson = {
    '':            '/assets/data/testimonials.json',
    'index':       '/assets/data/testimonials.json',
    'index.php':   '/assets/data/testimonials.json',
    'lkp.php':     '/assets/data/testimonials-lkp.json',
    'lkp':         '/assets/data/testimonials-lkp.json',
    'kursus':      '/assets/data/testimonials-lkp.json',
    'ojs.php':     '/assets/data/testimonials-ojs.json',
    'ojs':         '/assets/data/testimonials-ojs.json'
  };

  const pageKey  = getPageKey();
  const testiSrc = pageToJson[pageKey] || '/assets/data/testimonials.json';

  // ---- Fetch data ----
  let data = [];
  try {
    const res = await fetch(testiSrc, { cache: 'no-store' });
    data = await res.json();
  } catch (e) {
    console.error('Gagal memuat', testiSrc, e);
  }
  if (!Array.isArray(data) || data.length === 0) return;

  // ---- Star icon ----
  const starSVG = `<svg viewBox="0 0 20 20" class="w-4 h-4 inline-block -mt-[2px]">
    <path fill="currentColor" d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.967 0 1.371 1.24.588 1.81l-2.802 2.036a1 1 0 00-.364 1.118l1.07 3.293c.3.921-.755 1.688-1.54 1.118L10 13.347l-2.885 2.067c-.785.57-1.84-.197-1.54-1.118l1.07-3.293a1 1 0 00-.364-1.118L3.48 8.72c-.783-.57-.379-1.81.588-1.81h3.461a1 1 0 00.95-.69l1.07-3.292z"/>
  </svg>`;

  // ---- Render one slide (keeps your HTML/icon structure) ----
  const makeSlide = (t) => {
    const name  = t.name  || 'User';
    const role  = t.role  || t.package || '';
    const quote = t.quote || t.text || t.comment || '';
    const avatar= t.avatar|| 'https://via.placeholder.com/80x80.png?text=%20';

    const wrap = document.createElement('div');
    wrap.className = 'shrink-0 snap-center basis-full sm:basis-[62%] md:basis-[48%] lg:basis-[32%] px-2';

    const stars = Array.from({ length: Math.max(0, Math.min(5, t.rating || 5)) })
      .map(() => starSVG).join('');

    wrap.innerHTML = `
      <article class="bg-white rounded-2xl shadow-md ring-1 ring-black/5 px-6 py-6 min-h-[220px]">
        <div class="flex items-start gap-3">
          <img src="${avatar}" alt="${name}" class="w-10 h-10 rounded-full object-cover ring-2 ring-white shadow"/>
          <div class="flex-1">
            <div class="text-amber-500">${stars}</div>
            <h3 class="text-slate-900 font-extrabold text-lg leading-tight mt-1">${name}</h3>
            ${role ? `<p class="text-slate-500 text-sm -mt-0.5">${role}</p>` : ''}
          </div>
          <div class="text-rose-900/60">
            <svg viewBox="0 0 24 24" class="w-6 h-6"><path fill="currentColor" d="M7.17 17H4a6 6 0 0 1 6-6v9H4.83a1 1 0 0 1-.83-1Zm10 0H14a6 6 0 0 1 6-6v9h-5.17a1 1 0 0 1-.83-1Z"/></svg>
          </div>
        </div>
        <p class="text-slate-700 text-sm leading-relaxed mt-3">"${quote}"</p>
      </article>
    `;
    return wrap;
  };

  // ---- Render real slides ----
  data.forEach(item => track.appendChild(makeSlide(item)));

  // ==========================================================
  //          SMOOTH • ADAPTIVE • INFINITE LOOP FIX
  // ==========================================================

  // 1) Build ghosts (clone first & last) for seamless loop
  const realCount = track.children.length;
  const firstGhost = track.children[0].cloneNode(true);
  const lastGhost  = track.children[realCount - 1].cloneNode(true);
  firstGhost.setAttribute('aria-hidden', 'true');
  lastGhost.setAttribute('aria-hidden', 'true');
  track.insertBefore(lastGhost, track.firstChild);     // [G] [1] [2] ... [N] [G]
  track.appendChild(firstGhost);

  // Start at first real slide (index 1 in the new list)
  let items   = Array.from(track.children);
  let idx     = 1;                   // points to REAL slide initially
  let offsets = [];                  // absolute left offsets per item
  const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  function computeOffsets() {
    items = Array.from(track.children);
    // measure relative to the very first node's offsetLeft to neutralize padding
    const baseLeft = items[0].offsetLeft;
    offsets = items.map(el => el.offsetLeft - baseLeft);
  }

  function scrollToIndex(i, smooth = true) {
    idx = i;
    const left = offsets[idx] || 0;
    track.scrollTo({ left, behavior: smooth && !reduceMotion ? 'smooth' : 'auto' });
    syncDots();
  }

  function realLastIndex() { return items.length - 2; } // last real is before tail ghost
  function realFirstIndex(){ return 1; }                 // first real is after head ghost

  // 2) Dots (only for real slides)
  let dots = [];
  function renderDots() {
    if (!dotsWrap) return;
    dotsWrap.innerHTML = '';
    dots = Array.from({ length: realCount }).map((_, i) => {
      const b = document.createElement('button');
      b.type = 'button';
      b.className = 'w-2.5 h-2.5 rounded-full bg-rose-300 transition-all aria-[current=true]:w-6 aria-[current=true]:bg-rose-900';
      b.setAttribute('aria-label', `Slide ${i + 1}`);
      b.addEventListener('click', () => {
        stopAuto();
        scrollToIndex(i + 1, true); // +1 because of head ghost
        startAuto();
      });
      dotsWrap.appendChild(b);
      return b;
    });
  }
  function syncDots() {
    if (!dots.length) return;
    const realIdx = Math.max(0, Math.min(realCount - 1, idx - 1)); // map [1..N] -> [0..N-1]
    dots.forEach((d, i) => d.setAttribute('aria-current', i === realIdx ? 'true' : 'false'));
  }

  // 3) Prev/Next with adaptive step and seamless wrap via ghosts
  function nextSlide() {
    stopAuto();
    if (idx >= realLastIndex()) {
      // Smooth to tail ghost, then jump to real first (no flash)
      scrollToIndex(idx + 1, true);
      // after smooth ends, normalize; use a small timer to allow scroll to settle
      scheduleNormalize(() => scrollToIndex(realFirstIndex(), false));
    } else {
      scrollToIndex(idx + 1, true);
    }
    startAuto();
  }

  function prevSlide() {
    stopAuto();
    if (idx <= realFirstIndex()) {
      // Smooth to head ghost, then jump to real last
      scrollToIndex(idx - 1, true);
      scheduleNormalize(() => scrollToIndex(realLastIndex(), false));
    } else {
      scrollToIndex(idx - 1, true);
    }
    startAuto();
  }

  prev?.addEventListener('click', prevSlide);
  next?.addEventListener('click', nextSlide);

  // 4) Normalization helper: detect end of smooth scroll
  let normalizeTimer;
  function scheduleNormalize(fn) {
    if (normalizeTimer) clearTimeout(normalizeTimer);
    // 300ms is a safe debounce for native smooth-scroll; adjust if needed
    normalizeTimer = setTimeout(fn, 300);
  }

  // 5) Keep index in sync when user drags scroll (adaptive, variable widths OK)
  function updateIdxByViewport() {
    // find the item whose center is nearest to the viewport center
    const center = track.scrollLeft + track.clientWidth / 2;
    let best = 0, dist = Infinity;
    for (let i = 0; i < items.length; i++) {
      const itemCenter = offsets[i] + items[i].offsetWidth / 2;
      const d = Math.abs(itemCenter - center);
      if (d < dist) { dist = d; best = i; }
    }
    idx = best;
    // If user swiped into ghosts, silently normalize to the real counterpart
    if (idx === 0) {
      scrollToIndex(realLastIndex(), false);
    } else if (idx === items.length - 1) {
      scrollToIndex(realFirstIndex(), false);
    }
    syncDots();
  }

  track.addEventListener('scroll', () => {
    // throttle a bit so we don't spam on every pixel move
    if (scrollRAF != null) return;
    scrollRAF = requestAnimationFrame(() => {
      scrollRAF = null;
      updateIdxByViewport();
    });
  });
  let scrollRAF = null;

  // 6) Recompute on resize/content changes
  const ro = new ResizeObserver(() => {
    computeOffsets();
    scrollToIndex(idx, false);
  });
  ro.observe(track);

  // 7) Autoplay (optional, keep your interval)
  let timer;
  const INTERVAL = 10000;
  function startAuto() { if (items.length < 3) return; stopAuto(); timer = setInterval(nextSlide, INTERVAL); }
  function stopAuto()  { if (timer) clearInterval(timer); }
  ['mouseenter','touchstart','focusin'].forEach(e => track.addEventListener(e, stopAuto));
  ['mouseleave','touchend','focusout'].forEach(e => track.addEventListener(e, startAuto));

  // ---- Init order matters ----
  computeOffsets();
  renderDots();
  // start at first REAL slide (index 1) so ghosts stay invisible
  scrollToIndex(realFirstIndex(), false);
  syncDots();
  startAuto();
})();
