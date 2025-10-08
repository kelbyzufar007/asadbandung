// assets/js/products-swiper.js
(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', init);

  async function init() {
    const root = document.getElementById('prod-swiper'); // .swiper
    const listEl = document.getElementById('prod-track');  // .swiper-wrapper
    const prev = document.getElementById('prod-prev');
    const next = document.getElementById('prod-next');
    const dotsEl = document.getElementById('prod-dots');
    if (!root || !listEl) return;

    // --- Ambil data ---
    let items = [];
    try {
      const res = await fetch('assets/data/products.json', { cache: 'no-store' });
      items = await res.json();
    } catch (e) {
      console.error('Gagal memuat products.json', e);
      items = [
        { src: '/assets/img/produk/a.jpg', alt: 'Produk A', href: '#' },
        { src: '/assets/img/produk/b.jpg', alt: 'Produk B', href: '#' },
        { src: '/assets/img/produk/c.jpg', alt: 'Produk C', href: '#' },
      ];
    }
    if (!Array.isArray(items) || !items.length) return;

    // --- Render slide ---
    listEl.innerHTML = '';
    items.forEach(p => listEl.appendChild(makeSlide(p)));

    if (typeof Swiper !== 'function') {
      console.error('Swiper belum termuat.');
      return;
    }

    // --- Inisialisasi Swiper (UX ramah) ---
    const swiper = new Swiper('#prod-swiper', {
      loop: true,              // loop tak berujung
      speed: 700,              // transisi halus
      spaceBetween: 24,        // ~gap-6
      // 3 card di desktop
      slidesPerView: 1.1,      // mobile: 1+ sneak peek
      centeredSlides: false,
      breakpoints: {
        640: { slidesPerView: 2, spaceBetween: 20 }, // sm
        768: { slidesPerView: 2, spaceBetween: 24 }, // md
        1024: { slidesPerView: 3, spaceBetween: 24 }, // lg: 3 card
        1280: { slidesPerView: 3, spaceBetween: 28 }  // xl optional
      },

      autoplay: {
        delay: 3800,
        disableOnInteraction: false,
        pauseOnMouseEnter: true
      },

      navigation: {
        nextEl: '#prod-next',
        prevEl: '#prod-prev'
      },

      // Dots kustom
      pagination: dotsEl ? {
        el: '#prod-dots',
        clickable: true,
        renderBullet: (index, className) =>
          `<button type="button" aria-label="Slide ${index + 1}"
     class="${className} w-2.5 h-2.5 rounded-full bg-rose-900 transition-all"></button>`
      } : undefined,

      keyboard: { enabled: true },
      mousewheel: { forceToAxis: true, releaseOnEdges: true },
      observeParents: true,
      observer: true,
      watchSlidesProgress: true
    });

    // kasih z-index biar tombol selalu kebaca kliknya
    [prev, next].forEach(b => b && b.classList.add('z-30'));

    // efek memanjangkan bullet aktif (opsional)
    if (dotsEl) {
      const updateBullets = () => {
        const bullets = dotsEl.querySelectorAll('.swiper-pagination-bullet');
        bullets.forEach(b => b.classList.remove('w-6', 'bg-rose-900'));
        const active = dotsEl.querySelector('.swiper-pagination-bullet-active');
        if (active) active.classList.add('w-6', 'bg-rose-900'); // <- pakai rose-600 (atau rose-700/900)
      };
      swiper.on('paginationUpdate', updateBullets);
      swiper.on('afterInit', updateBullets);
    }

    // Refresh AOS setelah render
    if (window.AOS && typeof window.AOS.refreshHard === 'function') {
      setTimeout(() => AOS.refreshHard(), 60);
    }
  }

  function makeSlide(p) {
    // gunakan <div> .swiper-slide
    const slide = document.createElement('div');
    slide.className = 'swiper-slide'; // width diatur via slidesPerView/breakpoints
    const src = p.src || p.img || p.image || '';
    const alt = p.alt || p.caption || 'Produk';
    const href = p.href || p.url;

    const card = `
      <article class="rounded-2xl ring-1 ring-black/5 shadow-md overflow-hidden bg-white">
        <figure class="w-full bg-neutral-50">
          <img src="${src}" alt="${escapeHtml(alt)}" class="w-full h-auto object-cover" loading="lazy" />
        </figure>
      </article>
    `;
    slide.innerHTML = href ? `<a href="${href}" target="_blank" rel="noopener">${card}</a>` : card;
    return slide;
  }

  function escapeHtml(s = '') {
    return s.replace(/[&<>"']/g, m => ({ '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#39;' }[m]));
  }
})();
