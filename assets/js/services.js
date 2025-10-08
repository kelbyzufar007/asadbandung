// /assets/js/services-carousel.js
(async function () {
  const track  = document.getElementById('services-track');   // container scroll-x (flex)
  const prev   = document.getElementById('svc-prev');
  const next   = document.getElementById('svc-next');
  if (!track) return;

  // ====== CONFIG ======
  const AUTOPLAY_ENABLED = true;
  const AUTOPLAY_MS      = 3800;
  const SCROLL_SPEED_MS  = 650;
  // =====================

  // Smooth scroll terkontrol (supaya konsisten vs scroll-behavior native)
  function smoothScrollTo(el, left, duration = 500) {
    const start = el.scrollLeft;
    const change = left - start;
    if (duration <= 0) { el.scrollLeft = left; return; }
    const t0 = performance.now();
    const easeOutCubic = t => 1 - Math.pow(1 - t, 3);
    function step(now) {
      const p = Math.min(1, (now - t0) / duration);
      el.scrollLeft = start + change * easeOutCubic(p);
      if (p < 1) requestAnimationFrame(step);
    }
    requestAnimationFrame(step);
  }

  // 1) Fetch data
  let items = [];
  try {
    const res = await fetch('assets/data/services.json', { cache: 'no-store' });
    items = await res.json();
  } catch (e) {
    console.error('Failed to load services.json', e);
  }
  if (!Array.isArray(items) || !items.length) return;

  // 2) Render (asli saja dulu)
  const makeSlide = (it) => {
    const wrap = document.createElement('div');
    wrap.className = 'shrink-0 snap-start w-[85%] sm:w-[60%] md:w-[48%] lg:w-[32%]';
    wrap.innerHTML = `
      <article class="bg-white rounded-[24px] shadow-md ring-1 ring-black/5 px-6 py-6 md:py-7 min-h-[260px] flex flex-col justify-between">
        <div>
          <h3 class="text-rose-900 font-bold text-xl mb-2">${it.title}</h3>
          <p class="text-slate-600 text-sm leading-relaxed">${it.desc}</p>
        </div>
        <div class="mt-5 flex items-end justify-between">
          <img src="${it.icon}" alt="" class="h-16 md:h-20 object-contain">
          <a href="${it.url}" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-amber-500 text-rose-900 font-semibold hover:bg-amber-400">
            ${it.cta || 'Selengkapnya'}
            <svg viewBox="0 0 24 24" class="w-4 h-4" fill="none" aria-hidden="true">
              <path d="M9 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </a>
        </div>
      </article>
    `;
    return wrap;
  };

  // Render asli (REAL)
  const realNodes = items.map(makeSlide);
  realNodes.forEach(n => track.appendChild(n));

  // 3) CLONE kiri & kanan untuk loop mulus
  const realCount = realNodes.length;
  // clone kiri = salin semua real dan prepend
  const leftClones = realNodes.map(n => n.cloneNode(true));
  // clone kanan = salin semua real dan append
  const rightClones = realNodes.map(n => n.cloneNode(true));

  // prepend kiri (dari belakang supaya urutan benar)
  for (let i = leftClones.length - 1; i >= 0; i--) {
    track.insertBefore(leftClones[i], track.firstChild);
  }
  // append kanan
  rightClones.forEach(n => track.appendChild(n));

  // ===== Helpers dasar =====
  const allSlides = () => Array.from(track.children);        // termasuk clone
  const LEFT_OFFSET = realCount;                              // banyak slide di kiri (clone)
  const TOTAL = realCount * 3;                                // kiri + real + kanan

  function getChildLeftRelative(index) {
    const child = allSlides()[index];
    if (!child) return 0;
    const cRect = track.getBoundingClientRect();
    const rRect = child.getBoundingClientRect();
    return track.scrollLeft + (rRect.left - cRect.left);
  }

  // Konversi index logis (0..realCount-1) ke index fisik (di “band tengah”)
  function logicalToPhysical(logIdx) {
    return LEFT_OFFSET + ((logIdx % realCount) + realCount) % realCount;
  }

  // Hitung index fisik terdekat lalu kembalikan index logisnya
  function nearestLogicalIndex() {
    const slides = allSlides();
    if (!slides.length) return 0;
    const base = track.scrollLeft;
    let best = Infinity, physIdx = logicalToPhysical(0);
    for (let i = 0; i < TOTAL; i++) {
      const left = getChildLeftRelative(i);
      const d = Math.abs(left - base);
      if (d < best) { best = d; physIdx = i; }
    }
    // mapping fisik ke logis
    const raw = physIdx - LEFT_OFFSET;
    return ((raw % realCount) + realCount) % realCount;
  }

  let currentLogical = 0;

  function scrollToLogical(idx, smooth = true) {
    const phys = logicalToPhysical(idx);
    const target = getChildLeftRelative(phys);
    smooth ? smoothScrollTo(track, target, SCROLL_SPEED_MS) : track.scrollTo({ left: target });
    currentLogical = ((idx % realCount) + realCount) % realCount;
  }

  // Koreksi saat berada di area clone (teleport ke band tengah)
  function normalizeIfOnClone() {
    const slides = allSlides();
    if (!slides.length) return;
    const near = nearestLogicalIndex();
    const phys = logicalToPhysical(near);
    // jika posisi saat ini bukan posisi fisik “band tengah” untuk near, teleport tanpa animasi
    const desired = getChildLeftRelative(phys);
    if (Math.abs(track.scrollLeft - desired) > 2) {
      track.scrollTo({ left: desired, behavior: 'instant' }); // instant = tanpa animasi
    }
    currentLogical = near;
  }

  // ===== Kontrol tombol =====
  prev?.addEventListener('click', () => {
    stopAutoplay();
    scrollToLogical(currentLogical - 1, true);
    resumeAutoplaySoon();
  });

  next?.addEventListener('click', () => {
    stopAutoplay();
    scrollToLogical(currentLogical + 1, true);
    resumeAutoplaySoon();
  });

  // Update index saat scroll + normalisasi setelah inersia
  let raf, tailTimer;
  track.addEventListener('scroll', () => {
    if (raf) cancelAnimationFrame(raf);
    raf = requestAnimationFrame(() => {
      currentLogical = nearestLogicalIndex();
      if (tailTimer) clearTimeout(tailTimer);
      // setelah scroll “tenang” 120ms, normalisasi (teleport jika di clone)
      tailTimer = setTimeout(normalizeIfOnClone, 120);
    });
  }, { passive: true });

  // Re-align saat resize agar tetap di “band tengah”
  let resizeRaf;
  window.addEventListener('resize', () => {
    if (resizeRaf) cancelAnimationFrame(resizeRaf);
    resizeRaf = requestAnimationFrame(() => {
      scrollToLogical(currentLogical, false);
    });
  });

  // ===== Autoplay ramah user =====
  let autoTimer = null;
  let resumeTimer = null;

  function startAutoplay() {
    if (!AUTOPLAY_ENABLED || autoTimer) return;
    autoTimer = setInterval(() => {
      scrollToLogical(currentLogical + 1, true);
    }, AUTOPLAY_MS);
  }
  function stopAutoplay() {
    if (autoTimer) clearInterval(autoTimer);
    autoTimer = null;
    if (resumeTimer) { clearTimeout(resumeTimer); resumeTimer = null; }
  }
  function resumeAutoplaySoon() {
    if (!AUTOPLAY_ENABLED) return;
    if (resumeTimer) clearTimeout(resumeTimer);
    resumeTimer = setTimeout(startAutoplay, 1800);
  }

  // Pause saat interaksi
  track.addEventListener('mouseenter', stopAutoplay);
  track.addEventListener('mouseleave', resumeAutoplaySoon);
  track.addEventListener('focusin',    stopAutoplay);
  track.addEventListener('focusout',   resumeAutoplaySoon);
  track.addEventListener('pointerdown', stopAutoplay, { passive: true });
  track.addEventListener('pointerup',   resumeAutoplaySoon, { passive: true });

  // Keyboard (←/→) saat fokus
  track.setAttribute('tabindex', '0');
  track.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowLeft')  { e.preventDefault(); prev?.click(); }
    if (e.key === 'ArrowRight') { e.preventDefault(); next?.click(); }
  });

  // ===== Init: posisikan ke band tengah & mulai autoplay =====
  // penting: mulai di slide logis 0 tapi fisik = LEFT_OFFSET
  requestAnimationFrame(() => {
    scrollToLogical(0, false);
    startAutoplay();
  });
})();
