(function () {
  'use strict';

 const PAGE_KEY = (
  document.body?.dataset?.page ||
  location.pathname.split('/').filter(Boolean).pop() || ''
).toLowerCase().replace(/\.php$/, '');

// Peta slug -> file JSON (pakai path absolut biar aman di sub-path)
const pageToJson = {
  // LPK/LKP
  'lpk': '/assets/data/testimonials-lpk.json',
  'lkp': '/assets/data/testimonials-lpk.json',
  // Virtual Office / OV
  'ov': '/assets/data/testimonials-ov.json',
  'virtualoffice': '/assets/data/testimonials-ov.json',
  // Legal
  'legal': '/assets/data/testimonials-legal.json',
  'legalitas': '/assets/data/testimonials-legal.json',
};

// Sumber data final (default: OV)
const DATA_URL = pageToJson[PAGE_KEY] || '/assets/data/testimonials-ov.json';

// (opsional) debug
console.debug('[TESTI] pageKey:', PAGE_KEY, 'src:', DATA_URL);

  // Kecepatan/arah diatur dari HTML lewat CSS variable & class .marquee--reverse
  const ROWS = [
    { id: 'row-1', duration: '20s' }, // baris 1
    { id: 'row-2', duration: '28s' }, // baris 2 (biasanya diberi .marquee--reverse di HTML/CSS)
  ];

  // ====== Fallback data minimal ======
  const FALLBACK_DATA = [
    { name: 'User A', role: 'Klien',    rating: 5, avatar: 'https://via.placeholder.com/96', text: 'Layanan memuaskan, proses cepat.' },
    { name: 'User B', role: 'Mitra',    rating: 5, avatar: 'https://via.placeholder.com/96', text: 'Komunikasi responsif dan profesional.' },
    { name: 'User C', role: 'Pelanggan',rating: 4, avatar: 'https://via.placeholder.com/96', text: 'Rekomendasi untuk kebutuhan bisnis.' },
  ];

  // ====== Util ======
  function starSVG() {
    return `
      <svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" class="shrink-0 fill-yellow-400">
        <path d="M12 17.27 18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24 7.46 13.97 5.82 21z"/>
      </svg>
    `;
  }

  function createCard(item) {
    const card = document.createElement('article');
    card.className = [
      "w-[360px] md:w-[380px] lg:w-[400px]",
      "rounded-2xl border border-slate-200 shadow-sm",
      "p-5 bg-white"
    ].join(' ');

    const rating = Math.max(0, Math.min(5, item.rating ?? 5));
    const name   = item.name  ?? 'User';
    const role   = item.role  ?? '';
    const avatar = item.avatar ?? '';
    const text   = item.text  ?? '';

    card.innerHTML = `
      <div class="flex items-start gap-3">
        <img src="${avatar}" alt="${name}"
             width="48" height="48"
             class="w-12 h-12 rounded-full object-cover bg-slate-100 border border-slate-200" />
        <div class="flex-1 min-w-0">
          <div class="flex items-center gap-2 flex-wrap">
            <h3 class="font-semibold text-slate-900">${name}</h3>
            <div class="flex items-center gap-0.5" aria-label="${rating} dari 5 bintang">
              ${Array.from({ length: rating }).map(starSVG).join('')}
            </div>
          </div>
          <p class="text-sm text-slate-500">${role}</p>
        </div>
      </div>
      <p class="mt-3 text-[15px] leading-relaxed text-slate-700">${text}</p>
    `;
    return card;
  }

  async function loadData() {
    try {
      const res = await fetch(DATA_URL, { cache: 'no-store' });
      if (!res.ok) throw new Error('Bad status');
      return await res.json();
    } catch {
      return FALLBACK_DATA;
    }
  }

  /**
   * Duplikasi konten agar mulus (A…N | A…N | A…N ...) sampai lebar track cukup.
   * Target: minimal 2x lebar viewport, supaya animasi -50% terlihat seamless.
   */
  function fillClones(trackEl, containerEl) {
    if (!trackEl || !containerEl) return;
    const minWidth = containerEl.clientWidth * 2; // target minimal
    let safety = 0;
    while (trackEl.scrollWidth < minWidth && safety < 6) {
      const clone = trackEl.firstElementChild?.cloneNode(true);
      if (!clone) break;
      clone.setAttribute('aria-hidden', 'true');
      trackEl.appendChild(clone);
      safety++;
    }
  }

  function setDuration(trackEl, secondsString) {
    if (trackEl) trackEl.style.setProperty('--marquee-duration', secondsString);
  }

  async function initRow(rowId, duration) {
    const row = document.getElementById(rowId);
    if (!row) return;

    const track = row.querySelector('.marquee__track');
    const viewport = row.querySelector('.overflow-hidden');
    if (!track || !viewport) return;

    const data = await loadData();

    // Group asli (isi sekali)
    const group = document.createElement('div');
    group.className = 'marquee__group flex gap-4';
    data.forEach(item => group.appendChild(createCard(item)));
    track.appendChild(group);

    // Gandakan minimal sekali agar pola repetisi ada
    const firstClone = group.cloneNode(true);
    firstClone.setAttribute('aria-hidden', 'true');
    track.appendChild(firstClone);

    // Panjangkan track secukupnya agar animasi mulus
    fillClones(track, viewport);

    // Durasi per baris (bisa berbeda agar tidak “berbaris”)
    setDuration(track, duration);

    // Anti-CLS ringan
    row.style.paddingTop = '4px';
    row.style.paddingBottom = '4px';
  }

  // Init kedua baris
  ROWS.forEach(r => initRow(r.id, r.duration));
})();