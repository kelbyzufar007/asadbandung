(async function () {
  const track  = document.getElementById('services-track');
  const prev   = document.getElementById('svc-prev');
  const next   = document.getElementById('svc-next');
  if (!track) return;

  // 1) Fetch data
  let items = [];
  try {
    const res = await fetch('assets/data/services.json', { cache: 'no-store' });
    items = await res.json();
  } catch (e) {
    console.error('Failed to load services.json', e);
  }

  // 2) Render slides
  const makeSlide = (it) => {
    const wrap = document.createElement('div');
    // responsive width + scroll-snap
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

  items.forEach(it => track.appendChild(makeSlide(it)));

  // --- Helpers ---
  const slides = () => Array.from(track.children);

  const wrapIndex = (i) => {
    const n = slides().length;
    if (n === 0) return 0;
    return ( (i % n) + n ) % n; // proper modulo for negatives
  };

  const scrollToIndex = (i, behavior = 'smooth') => {
    const s = slides();
    if (!s.length) return;
    const idx = wrapIndex(i);
    const targetLeft = s[idx].offsetLeft;
    track.scrollTo({ left: targetLeft, behavior });
    currentIndex = idx;
  };

  const nearestIndex = () => {
    const s = slides();
    if (!s.length) return 0;
    const left = track.scrollLeft;
    let idx = 0, best = Infinity;
    for (let i = 0; i < s.length; i++) {
      const d = Math.abs(s[i].offsetLeft - left);
      if (d < best) { best = d; idx = i; }
    }
    return idx;
  };

  // Keep a stable logical index for reliable wrapping
  let currentIndex = 0;

  // --- Controls (LOOPING) ---
  prev?.addEventListener('click', () => {
    scrollToIndex(currentIndex - 1, 'smooth'); // wraps to last if at 0
  });

  next?.addEventListener('click', () => {
    scrollToIndex(currentIndex + 1, 'smooth'); // wraps to first if at last
  });

  // Update currentIndex as user scrolls/drag (snap or inertia)
  // Debounced via rAF for performance
  let raf;
  track.addEventListener('scroll', () => {
    if (raf) cancelAnimationFrame(raf);
    raf = requestAnimationFrame(() => {
      currentIndex = nearestIndex();
    });
  }, { passive: true });

  // Keep the same card focused after resize/layout changes
  let resizeRaf;
  window.addEventListener('resize', () => {
    if (resizeRaf) cancelAnimationFrame(resizeRaf);
    resizeRaf = requestAnimationFrame(() => {
      scrollToIndex(currentIndex, 'auto'); // no jump to first
    });
  });

  // Initial align
  scrollToIndex(0, 'auto');
})();
