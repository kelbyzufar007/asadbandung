(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {
    // --- AOS (aman jika tidak dipasang) ---
    if (window.AOS && typeof AOS.init === 'function') {
      AOS.init({ duration: 700, offset: 80, easing: 'ease-out-cubic', once: true });
    }

    // ====================== SLIDER TESTIMONI (SWIPER) ======================
    const root   = document.getElementById('tst-swiper'); // .swiper
    const listEl = document.getElementById('tst-track');  // .swiper-wrapper
    const prev   = document.getElementById('tst-prev');
    const next   = document.getElementById('tst-next');
    const dotsEl = document.getElementById('tst-dots');   // <- dots container

    if (root && listEl) {
      // --- Tentukan file JSON berdasar halaman ---
      function getPageKey() {
        if (document.body.dataset.page) return document.body.dataset.page.toLowerCase();
        const segs = location.pathname.split('/').filter(Boolean);
        let last = segs.pop() || 'index.php';
        if (last.toLowerCase() === 'index.php' && segs.length) last = segs.pop();
        return last.toLowerCase();
      }

      const pageToJson = {
        'publisher.php': '/assets/data/testimonials-publisher.json',
        'publikasi':     '/assets/data/testimonials-publisher.json',
        'book.php':      '/assets/data/testimonials-book.json',
        'penerbit':      '/assets/data/testimonials-book.json'
      };

      const pageKey = getPageKey();
      const jsonSrc = pageToJson[pageKey] || '/assets/data/publisher.json';

      // --- Template slide (kelas WAJIB: swiper-slide) ---
      function makeSlide(it) {
        const div  = document.createElement('div');
        div.className = 'swiper-slide';
        const src = it.src || it.image || it.url || '';
        const alt = it.alt || it.caption || 'Testimoni';

        div.innerHTML = `
          <figure class="mx-auto max-w-[360px] rounded-2xl overflow-hidden ring-1 ring-black/5 shadow-md bg-rose-900">
            <img src="${src}" alt="${alt}" loading="lazy" class="w-full h-auto object-cover select-none">
          </figure>
        `;
        return div;
      }

      (async () => {
        let data = [];
        try {
          const res = await fetch(jsonSrc, { cache: 'no-store' });
          data = await res.json();
        } catch (e) {
          data = [
            { src: '/assets/img/testimoni/t1.jpg', alt: 'Testimoni' },
            { src: '/assets/img/testimoni/t2.jpg', alt: 'Testimoni' },
            { src: '/assets/img/testimoni/t3.jpg', alt: 'Testimoni' }
          ];
          console.warn('[Testimoni] gagal memuat JSON, pakai fallback.', e);
        }

        if (!Array.isArray(data) || !data.length) return;

        listEl.innerHTML = '';
        data.forEach(item => listEl.appendChild(makeSlide(item)));

        if (typeof Swiper !== 'function') {
          console.error('Swiper belum termuat.');
          return;
        }

        // ===== Konfigurasi Swiper (UX ramah + dots rose) =====
        const swiper = new Swiper('#tst-swiper', {
          loop: true,
          speed: 700,
          spaceBetween: 24,
          autoplay: {
            delay: 3800,
            disableOnInteraction: false,
            pauseOnMouseEnter: true
          },
          navigation: { nextEl: '#tst-next', prevEl: '#tst-prev' },

          // 3 card di desktop
          slidesPerView: 1.1,
          centeredSlides: false,
          breakpoints: {
            640:  { slidesPerView: 1.5, spaceBetween: 20 },
            768:  { slidesPerView: 2,   spaceBetween: 24 },
            1024: { slidesPerView: 3,   spaceBetween: 24 },
            1280: { slidesPerView: 3,   spaceBetween: 28 }
          },

          // Dots (rose)
          pagination: dotsEl ? {
            el: '#tst-dots',
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

        // bullet aktif: rose-900 + memanjang
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

        // Pastikan tombol selalu di atas overlay lain
        [prev, next].forEach(b => b && b.classList.add('z-30'));
      })();
    }

    // ====================== COUNTER ANGKA ======================
    const counters = document.querySelectorAll('.js-count');
    if (counters.length) {
      const easeOut = t => 1 - Math.pow(1 - t, 3);
      function animateCount(el, to, duration = 1200) {
        const start = performance.now();
        function frame(now) {
          const p = Math.min(1, (now - start) / duration);
          const val = Math.round(to * easeOut(p));
          el.textContent = val.toLocaleString('id-ID');
          if (p < 1) requestAnimationFrame(frame);
        }
        requestAnimationFrame(frame);
      }
      const io = new IntersectionObserver((entries, obs) => {
        entries.forEach(ent => {
          if (ent.isIntersecting) {
            const el = ent.target;
            const target = parseInt(el.dataset.target || '0', 10);
            animateCount(el, target);
            obs.unobserve(el);
          }
        });
      }, { threshold: 0.35 });
      counters.forEach(el => io.observe(el));
    }
  });
})();
