// /assets/js/testimonials-swiper.js
(function () {
  function getPageKey() {
    if (document.body.dataset.page) return document.body.dataset.page.toLowerCase();
    const segs = location.pathname.split('/').filter(Boolean);
    let last = segs.pop() || 'index.php';
    if (last.toLowerCase() === 'index.php' && segs.length) last = segs.pop();
    return last.toLowerCase();
  }

  const pageToJson = {
    '': '/assets/data/testimonials.json',
    'index': '/assets/data/testimonials.json',
    'index.php': '/assets/data/testimonials.json',
    'lkp.php': '/assets/data/testimonials-lkp.json',
    'lkp': '/assets/data/testimonials-lkp.json',
    'kursus': '/assets/data/testimonials-lkp.json',
    'ojs.php': '/assets/data/testimonials-ojs.json',
    'ojs': '/assets/data/testimonials-ojs.json'
  };

  const starSVG = `<svg viewBox="0 0 20 20" class="w-4 h-4 inline-block -mt-[2px]">
    <path fill="currentColor" d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.967 0 1.371 1.24.588 1.81l-2.802 2.036a1 1 0 00-.364 1.118l1.07 3.293c.3.921-.755 1.688-1.54 1.118L10 13.347l-2.885 2.067c-.785.57-1.84-.197-1.54-1.118l1.07-3.293a1 1 0 00-.364-1.118L3.48 8.72c-.783-.57-.379-1.81.588-1.81h3.461a1 1 0 00.95-.69l1.07-3.292z"/>
  </svg>`;

  function makeSlide(t) {
    const name = t.name || 'User';
    const role = t.role || t.package || '';
    const quote = t.quote || t.text || t.comment || '';
    const avatar = t.avatar || 'https://via.placeholder.com/80x80.png?text=%20';
    const stars = Array.from({ length: Math.max(0, Math.min(5, t.rating || 5)) }).map(() => starSVG).join('');

    const li = document.createElement('li');
    li.className = 'swiper-slide w-full sm:w-[62%] md:w-[48%] lg:w-[32%] px-2';
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
    const wrapper = document.getElementById('testi-track'); // .swiper-wrapper
    const dotsEl = document.getElementById('testi-dots');
    const root = document.getElementById('testimonials'); // .swiper
    if (!wrapper || !root) return;

    // Pastikan tombol dapat diklik (di atas layer lain)
    const prevBtn = document.getElementById('testi-prev');
    const nextBtn = document.getElementById('testi-next');
    [prevBtn, nextBtn].forEach(b => b && b.classList.add('z-30')); // tambah z-index

    const pageKey = getPageKey();
    const src = pageToJson[pageKey] || '/assets/data/testimonials.json';

    let data = [];
    try {
      const res = await fetch(src, { cache: 'no-store' });
      data = await res.json();
    } catch (e) {
      console.error('Gagal memuat', src, e);
      return;
    }
    if (!Array.isArray(data) || !data.length) return;

    wrapper.innerHTML = '';
    data.forEach(item => wrapper.appendChild(makeSlide(item)));

    const swiper = new Swiper('#testimonials', {
      slidesPerView: 'auto',
      spaceBetween: 24,
      speed: 700,                 // halus, tidak terlalu cepat
      loop: true,
      loopAdditionalSlides: 2,    // bantu smooth saat loop dengan width custom
      centeredSlides: false,
      // Matikan freeMode agar snap & panah bekerja
      freeMode: false,

      autoplay: {
        delay: 3800,              // jeda nyaman
        disableOnInteraction: false,
        pauseOnMouseEnter: true
      },

      navigation: {
        nextEl: '#testi-next',
        prevEl: '#testi-prev'
      },

      pagination: dotsEl ? {
        el: '#testi-dots',
        clickable: true,
        renderBullet: (index, className) =>
          `<button type="button" aria-label="Slide ${index + 1}" class="${className} w-2.5 h-2.5 rounded-full bg-rose-900 transition-all"></button>`
      } : undefined,

      keyboard: { enabled: true },
      mousewheel: { forceToAxis: true, releaseOnEdges: true },

      watchSlidesProgress: true,
      observer: true,
      observeParents: true
    });

    if (dotsEl) {
      const updateBullets = () => {
        const bullets = dotsEl.querySelectorAll('.swiper-pagination-bullet');
        bullets.forEach(b => b.classList.remove('w-6', 'bg-rose-900'));
        const active = dotsEl.querySelector('.swiper-pagination-bullet-active');
        if (active) active.classList.add('w-6', 'bg-rose-900');
      };
      swiper.on('paginationUpdate', updateBullets);
      swiper.on('afterInit', updateBullets);
    }
  }

  document.readyState !== 'loading'
    ? init()
    : document.addEventListener('DOMContentLoaded', init);
})();
