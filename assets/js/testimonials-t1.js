// /assets/js/testi-splide.js
(function () {
  // ---- map JSON per halaman (ikut gaya kamu)
  function getPageKey() {
    if (document.body.dataset.page) return document.body.dataset.page.toLowerCase();
    const segs = location.pathname.split('/').filter(Boolean);
    let last = segs.pop() || 'index.php';
    if (last.toLowerCase() === 'index.php' && segs.length) last = segs.pop();
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

  const starSVG = `<svg viewBox="0 0 20 20" class="w-4 h-4 inline-block -mt-[2px]">
    <path fill="currentColor" d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.967 0 1.371 1.24.588 1.81l-2.802 2.036a1 1 0 00-.364 1.118l1.07 3.293c.3.921-.755 1.688-1.54 1.118L10 13.347l-2.885 2.067c-.785.57-1.84-.197-1.54-1.118l1.07-3.293a1 1 0 00-.364-1.118L3.48 8.72c-.783-.57-.379-1.81.588-1.81h3.461a1 1 0 00.95-.69l1.07-3.292z"/>
  </svg>`;

  function makeSlide(t) {
    const name   = t.name  || 'User';
    const role   = t.role  || t.package || '';
    const quote  = t.quote || t.text || t.comment || '';
    const avatar = t.avatar|| 'https://via.placeholder.com/80x80.png?text=%20';
    const stars  = Array.from({ length: Math.max(0, Math.min(5, t.rating || 5)) }).map(() => starSVG).join('');

    const li = document.createElement('li');
    // width responsif pakai Tailwind + autoWidth Splide
    li.className = 'splide__slide w-full sm:w-[62%] md:w-[48%] lg:w-[32%] px-2';
    li.innerHTML = `
      <article class="bg-white rounded-2xl shadow-md ring-1 ring-black/5 px-6 py-6 min-h-[220px]">
        <div class="flex items-start gap-3">
          <img src="${avatar}" alt="${name}" class="w-10 h-10 rounded-full object-cover ring-2 ring-white shadow"/>
          <div class="flex-1">
            <div class="text-amber-500">${stars}</div>
            <h3 class="text-slate-900 font-extrabold text-lg leading-tight mt-1">${name}</h3>
            ${role ? `<p class="text-slate-500 text-sm -mt-0.5">${role}</p>` : ''}
          </div>
          <div class="text-rose-900/60">
            <svg viewBox="0 0 24 24" class="w-6 h-6"><path fill="currentColor" d="M7.17 17H4a6 6 0 0 1 6-6v9H4.83a1 1 0 0 1-.83-1Zm10 0H14a6 6 0 0 1 6-6v9h-5.17a 1 1 0 0 1-.83-1Z"/></svg>
          </div>
        </div>
        <p class="text-slate-700 text-sm leading-relaxed mt-3">"${quote}"</p>
      </article>
    `;
    return li;
  }

  async function init() {
    const ul      = document.getElementById('testi-track');
    const prevBtn = document.getElementById('testi-prev');
    const nextBtn = document.getElementById('testi-next');
    const dotsWrap= document.getElementById('testi-dots');
    const root    = document.getElementById('testimonials');
    if (!ul || !root) return;

    const pageKey = getPageKey();
    const src     = pageToJson[pageKey] || '/assets/data/testimonials.json';

    let data = [];
    try {
      const res = await fetch(src, { cache: 'no-store' });
      data = await res.json();
    } catch (e) {
      console.error('Gagal memuat', src, e);
      return;
    }
    if (!Array.isArray(data) || !data.length) return;

    // render slides
    ul.innerHTML = '';
    data.forEach(item => ul.appendChild(makeSlide(item)));

    // inisialisasi Splide
    const splide = new Splide('#testimonials', {
      type: 'loop',
      autoWidth: true,         // kita atur lebar via Tailwind di <li>
      gap: '1.5rem',           // 24px (match gap-6)
      pagination: false,       // dots kustom
      arrows: false,           // pakai tombol kamu
      drag: 'free',
      flickPower: 600,
      speed: 600,
      easing: 'cubic-bezier(.22,.61,.36,1)',
      autoplay: true,
      interval: 10000,
      pauseOnHover: true,
      pauseOnFocus: true,
    });

    // tombol custom
    prevBtn?.addEventListener('click', () => splide.go('<'));
    nextBtn?.addEventListener('click', () => splide.go('>'));

    // dots kustom
    const total = data.length;
    let dots = [];
    function renderDots() {
      if (!dotsWrap) return;
      dotsWrap.innerHTML = '';
      dots = Array.from({ length: total }).map((_, i) => {
        const b = document.createElement('button');
        b.type = 'button';
        b.className = 'w-2.5 h-2.5 rounded-full bg-rose-300 transition-all aria-[current=true]:w-6 aria-[current=true]:bg-rose-900';
        b.setAttribute('aria-label', `Slide ${i + 1}`);
        b.addEventListener('click', () => splide.go(i));
        dotsWrap.appendChild(b);
        return b;
      });
    }
    function syncDots() {
      if (!dots.length) return;
      // index logis tanpa clone
      const i = ((splide.index % total) + total) % total;
      dots.forEach((d, k) => d.setAttribute('aria-current', k === i ? 'true' : 'false'));
    }

    splide.on('mounted move', syncDots);
    splide.mount();
    renderDots();
    syncDots();

    // accessibility: start di slide 0 (real) sudah otomatis karena kita panggil splide.go(0) implicitly saat mount loop
  }

  document.readyState !== 'loading' ? init() : document.addEventListener('DOMContentLoaded', init);
})();
