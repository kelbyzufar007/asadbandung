(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {
    /* --- AOS (aman jika tidak dipasang) --- */
    if (window.AOS && typeof AOS.init === 'function') {
      AOS.init({ duration: 700, offset: 80, easing: 'ease-out-cubic', once: true });
    }

    /* ====================== SLIDER TESTIMONI ====================== */
    const track = document.getElementById('tst-track');
    const prev  = document.getElementById('tst-prev');
    const next  = document.getElementById('tst-next');

    if (track) {
      // --- Tentukan file JSON berdasar halaman ---
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
        'penerbit':          '/assets/data/testimonials-book.json',      // pretty URL /book
      };
      const pageKey = getPageKey();
      const jsonSrc = pageToJson[pageKey] || '/assets/data/publisher.json';
      // console.debug('[Testimoni] pageKey:', pageKey, 'src:', jsonSrc);

      const makeSlide = (it) => {
        const w = document.createElement('div');
        w.className = 'shrink-0 snap-center w-full sm:w-[70%] md:w-[45%] lg:w-[32%]';
        const src = it.src || it.image || it.url || '';
        const alt = it.alt || it.caption || 'Testimoni';
        w.innerHTML = `
          <figure class="mx-auto max-w-[360px] rounded-2xl overflow-hidden ring-1 ring-black/5 shadow-md bg-white">
            <img src="${src}" alt="${alt}" loading="lazy" class="w-full h-auto object-cover select-none">
          </figure>`;
        return w;
      };

      fetch(jsonSrc, { cache: 'no-store' })
        .then(r => r.json())
        .then(list => {
          if (!Array.isArray(list) || list.length === 0) throw new Error('empty');
          list.forEach(it => track.appendChild(makeSlide(it)));
          if (list.length < 3) list.forEach(it => track.appendChild(makeSlide(it))); // duplikasi ringan agar enak discroll
          initSlider();
        })
        .catch(() => {
          // fallback minimal
          ['t1','t2','t3'].forEach(n => {
            track.appendChild(makeSlide({ src: '/assets/img/testimoni/' + n + '.jpg', alt: 'Testimoni' }));
          });
          initSlider();
        });

      function stepWidth() {
        const first = track.querySelector(':scope > *');
        if (!first) return 0;
        const gap = parseFloat(getComputedStyle(track).gap || '24') || 0;
        return Math.ceil(first.getBoundingClientRect().width + gap);
      }
      function go(dir = 1) {
        track.scrollBy({ left: dir * stepWidth(), behavior: 'smooth' });
      }

      let timer;
      const INTERVAL = 5500;

      function startAuto() {
        stopAuto();
        timer = setInterval(() => {
          const atEnd = Math.ceil(track.scrollLeft + track.clientWidth) >= track.scrollWidth;
          if (atEnd) {
            track.scrollTo({ left: 0, behavior: 'auto' });
            setTimeout(() => go(1), 60);
          } else {
            go(1);
          }
        }, INTERVAL);
      }
      function stopAuto() { if (timer) clearInterval(timer); }

      function initSlider() {
        prev?.addEventListener('click', () => { stopAuto(); go(-1); });
        next?.addEventListener('click', () => { stopAuto(); go(1);  });
        ['mouseenter','touchstart','focusin'].forEach(e => track.addEventListener(e, stopAuto));
        ['mouseleave','touchend','focusout'].forEach(e => track.addEventListener(e, startAuto));
        startAuto();
      }
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
