// assets/js/products-splide.js
(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', init);

  async function init() {
    const root   = document.getElementById('prod-splide');
    const listEl = document.getElementById('prod-track');
    const prev   = document.getElementById('prod-prev');
    const next   = document.getElementById('prod-next');
    const dotsEl = document.getElementById('prod-dots');
    if (!root || !listEl) return;

    // --- Ambil data (pakai path yang sama dengan skrip kamu) ---
    let items = [];
    try {
      const res = await fetch('assets/data/products.json', { cache: 'no-store' });
      items = await res.json();
    } catch (e) {
      console.error('Gagal memuat products.json', e);
      items = [
        { src:'/assets/img/produk/a.jpg', alt:'Produk A', href:'#' },
        { src:'/assets/img/produk/b.jpg', alt:'Produk B', href:'#' },
        { src:'/assets/img/produk/c.jpg', alt:'Produk C', href:'#' },
      ];
    }
    if (!Array.isArray(items) || !items.length) return;

    // --- Render slide (lebar responsif ala punyamu) ---
    listEl.innerHTML = '';
    items.forEach(p => listEl.appendChild(makeSlide(p)));

    // --- Init Splide: loop halus + autoWidth + autoplay ---
    if (typeof Splide !== 'function') {
      console.error('Splide belum termuat.');
      return;
    }
    const splide = new Splide(root, {
      type: 'loop',              // <- bikin "mentok → lanjut mulus → normalize"
      autoWidth: true,           // lebar slide dari kelas Tailwind di <li>
      gap: '1.5rem',             // ≈ gap-6
      pagination: false,         // dots custom
      arrows: false,             // tombol custom kita
      drag: 'free',
      flickPower: 600,
      speed: 600,
      easing: 'cubic-bezier(.22,.61,.36,1)',
      autoplay: true,
      interval: 5500,
      pauseOnHover: true,
      pauseOnFocus: true,
    });

    // tombol custom
    prev?.addEventListener('click', () => splide.go('<'));
    next?.addEventListener('click', () => splide.go('>'));

    // dots custom
    let dots = [];
    function renderDots(total){
      if (!dotsEl) return;
      dotsEl.innerHTML = '';
      dots = Array.from({ length: total }).map((_, i) => {
        const b = document.createElement('button');
        b.type = 'button';
        b.className = 'w-2.5 h-2.5 rounded-full bg-rose-300 transition-all aria-[current=true]:w-6 aria-[current=true]:bg-rose-900';
        b.setAttribute('aria-label', `Slide ${i+1}`);
        b.addEventListener('click', () => splide.go(i)); // index logis (tanpa clone)
        dotsEl.appendChild(b);
        return b;
      });
    }
    function syncDots(total){
      if (!dots.length) return;
      const i = ((splide.index % total) + total) % total;
      dots.forEach((d, k) => d.setAttribute('aria-current', k === i ? 'true' : 'false'));
    }

    splide.on('mounted', () => { renderDots(items.length); syncDots(items.length); });
    splide.on('move',    () => { syncDots(items.length); });

    splide.mount();

    // Refresh AOS setelah elemen masuk DOM
    if (window.AOS && typeof window.AOS.refreshHard === 'function') {
      setTimeout(() => AOS.refreshHard(), 60);
    }
  }

  function makeSlide(p) {
    const li = document.createElement('li');
    // kelas lebar mengikuti versi sebelumnya
    li.className = 'splide__slide w-[88%] sm:w-[62%] md:w-[48%] lg:w-[32%]';
    const src  = p.src || p.img || p.image || '';
    const alt  = p.alt || p.caption || 'Produk';
    const href = p.href || p.url;

    const card = `
      <article class="rounded-2xl ring-1 ring-black/5 shadow-md overflow-hidden bg-white">
        <figure class="w-full bg-neutral-50">
          <img src="${src}" alt="${escapeHtml(alt)}" class="w-full h-auto object-cover" loading="lazy" />
        </figure>
      </article>
    `;
    li.innerHTML = href ? `<a href="${href}" target="_blank" rel="noopener">${card}</a>` : card;
    return li;
  }

  function escapeHtml(s=''){
    return s.replace(/[&<>"']/g, m => ({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'}[m]));
  }
})();
