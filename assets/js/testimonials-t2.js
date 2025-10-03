(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {
    /* --- AOS (aman jika tidak dipasang) --- */
    if (window.AOS && typeof AOS.init === 'function') {
      AOS.init({ duration: 700, offset: 80, easing: 'ease-out-cubic', once: true });
    }

    /* ====================== SLIDER TESTIMONI (SPLIDE) ====================== */
    const root   = document.getElementById('tst-splide');
    const listEl = document.getElementById('tst-track');
    const prev   = document.getElementById('tst-prev');
    const next   = document.getElementById('tst-next');

    if (root && listEl) {
      // --- Tentukan file JSON berdasar halaman (mengikuti mapping kamu) ---
      function getPageKey() {
        if (document.body.dataset.page) return document.body.dataset.page.toLowerCase();
        const segs = location.pathname.split('/').filter(Boolean);
        let last = segs.pop() || 'index.php';
        if (last.toLowerCase() === 'index.php' && segs.length) last = segs.pop(); // /publisher/index.php -> "publisher"
        return last.toLowerCase();
      }

      const pageToJson = {
        'publisher.php': '/assets/data/testimonials-publisher.json',
        'publikasi':     '/assets/data/testimonials-publisher.json', // pretty URL /publisher
        'book.php':      '/assets/data/testimonials-book.json',
        'penerbit':      '/assets/data/testimonials-book.json',      // pretty URL /book
      };

      const pageKey = getPageKey();
      const jsonSrc = pageToJson[pageKey] || '/assets/data/publisher.json';

      // --- Template slide (pakai gambar testimoni seperti versi kamu) ---
      function makeSlide(it) {
        const li  = document.createElement('li');
        // lebar responsif + autoWidth Splide
        li.className = 'splide__slide w-full sm:w-[70%] md:w-[45%] lg:w-[32%]';
        const src = it.src || it.image || it.url || '';
        const alt = it.alt || it.caption || 'Testimoni';

        li.innerHTML = `
          <figure class="mx-auto max-w-[360px] rounded-2xl overflow-hidden ring-1 ring-black/5 shadow-md bg-white">
            <img src="${src}" alt="${alt}" loading="lazy" class="w-full h-auto object-cover select-none">
          </figure>
        `;
        return li;
      }

      // --- Fetch & render, lalu init Splide (loop mulus) ---
      (async () => {
        let data = [];
        try {
          const res = await fetch(jsonSrc, { cache: 'no-store' });
          data = await res.json();
        } catch (e) {
          // fallback minimal jika JSON gagal
          data = [
            { src: '/assets/img/testimoni/t1.jpg', alt: 'Testimoni' },
            { src: '/assets/img/testimoni/t2.jpg', alt: 'Testimoni' },
            { src: '/assets/img/testimoni/t3.jpg', alt: 'Testimoni' },
          ];
          console.warn('[Testimoni] gagal memuat JSON, pakai fallback.', e);
        }

        if (!Array.isArray(data) || !data.length) return;

        listEl.innerHTML = '';
        data.forEach(item => listEl.appendChild(makeSlide(item)));

        if (typeof Splide !== 'function') {
          console.error('Splide belum termuat.');
          return;
        }

        const splide = new Splide(root, {
          type: 'loop',          // <- ini yang bikin “mentok balik lagi” secara smooth
          autoWidth: true,       // lebar dari kelas Tailwind di <li>
          gap: '1.5rem',         // setara gap-6
          pagination: false,     // dots custom? nonaktifkan bawaan
          arrows: false,         // pakai tombol custom kamu
          drag: 'free',
          flickPower: 600,
          speed: 600,
          easing: 'cubic-bezier(.22,.61,.36,1)',
          autoplay: true,
          interval: 5500,
          pauseOnHover: true,
          pauseOnFocus: true,
          // perPage: 3 // tidak diperlukan saat autoWidth
        });

        // tombol custom
        prev?.addEventListener('click', () => splide.go('<'));
        next?.addEventListener('click', () => splide.go('>'));

        splide.mount();
      })();
    }

    /* ====================== COUNTER ANGKA ====================== */
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
            obs.unobserve(el); // jalan sekali
          }
        });
      }, { threshold: 0.35 });

      counters.forEach(el => io.observe(el));
    }
  });
})();
