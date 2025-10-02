(async function () {
  const track = document.getElementById('prod-track');
  const prev  = document.getElementById('prod-prev');
  const next  = document.getElementById('prod-next');
  const dotsWrap = document.getElementById('prod-dots');
  if (!track) return;

  // Ambil data
  let items = [];
  try {
    const res = await fetch('assets/data/products.json', { cache: 'no-store' });
    items = await res.json();
  } catch (e) {
    console.error('Gagal memuat products.json', e);
  }

  // Render 1 slide (mobile: 1 kartu, md: 2, lg: 3)
  const makeSlide = (p) => {
    const wrap = document.createElement('div');
    wrap.className = 'shrink-0 snap-start w-[88%] sm:w-[62%] md:w-[48%] lg:w-[32%]';
    const card = `
      <article class="rounded-2xl ring-1 ring-black/5 shadow-md overflow-hidden bg-white">
        <figure class="w-full">
          <img src="${p.src}" alt="${p.alt || ''}" class="w-full h-auto object-cover" loading="lazy" />
        </figure>
      </article>`;
    wrap.innerHTML = p.href ? `<a href="${p.href}" target="_blank" rel="noopener">${card}</a>` : card;
    return wrap;
  };

  items.forEach(p => track.appendChild(makeSlide(p)));

  // Dots
  let dots = [];
  function renderDots() {
    dotsWrap.innerHTML = '';
    dots = items.map((_, i) => {
      const b = document.createElement('button');
      b.type = 'button';
      b.className =
        'w-2.5 h-2.5 rounded-full bg-rose-300 transition-all aria-[current=true]:w-6 aria-[current=true]:bg-rose-900';
      b.setAttribute('aria-label', `Slide ${i + 1}`);
      b.addEventListener('click', () => {
        stopAuto();
        goTo(i);
        startAuto();
      });
      dotsWrap.appendChild(b);
      return b;
    });
  }
  renderDots();

  // Hitung lebar satu langkah (kartu + gap)
  function stepWidth() {
    const first = track.querySelector(':scope > *');
    if (!first) return 0;
    const gap = parseInt(getComputedStyle(track).gap || '24', 10);
    return Math.ceil(first.getBoundingClientRect().width + gap);
  }

  // Index & navigasi
  let idx = 0;
  const last = () => Math.max(0, items.length - 1);

  function updateDots() {
    dots.forEach((d, i) => d.setAttribute('aria-current', i === idx ? 'true' : 'false'));
  }

  function goTo(i, smooth = true) {
    const sw = stepWidth(); if (!sw) return;
    idx = Math.max(0, Math.min(i, last()));
    track.scrollTo({ left: idx * sw, behavior: smooth ? 'smooth' : 'auto' });
    updateDots();
  }

  function go(dir = 1) {
    const sw = stepWidth(); if (!sw) return;

    // wrap-around
    if (dir > 0 && idx >= last()) {
      goTo(0, false);
      requestAnimationFrame(() => { idx = 0; track.scrollBy({ left: sw, behavior: 'smooth' }); idx = 1; updateDots(); });
      return;
    }
    if (dir < 0 && idx <= 0) {
      goTo(last(), false);
      requestAnimationFrame(() => { idx = last(); track.scrollBy({ left: -sw, behavior: 'smooth' }); idx = Math.max(0, last()-1); updateDots(); });
      return;
    }
    goTo(idx + dir, true);
  }

  prev?.addEventListener('click', () => { stopAuto(); go(-1); startAuto(); });
  next?.addEventListener('click', () => { stopAuto(); go(1);  startAuto(); });

  function syncIdx() {
    const sw = stepWidth(); if (!sw) return;
    idx = Math.round(track.scrollLeft / sw);
    updateDots();
  }
  track.addEventListener('scroll', syncIdx);
  window.addEventListener('resize', syncIdx);

  // Autoplay
  let timer;
  const INTERVAL = 5500;
  function startAuto(){ stopAuto(); timer = setInterval(() => go(1), INTERVAL); }
  function stopAuto(){ if (timer) { clearInterval(timer); timer = null; } }

  ['mouseenter','touchstart','focusin'].forEach(e => track.addEventListener(e, stopAuto));
  ['mouseleave','touchend','focusout'].forEach(e => track.addEventListener(e, startAuto));

  // Init
  syncIdx();
  startAuto();

  // Refresh AOS setelah inject elemen
  if (window.AOS && typeof window.AOS.refreshHard === 'function') {
    setTimeout(() => AOS.refreshHard(), 50);
  }
})();
