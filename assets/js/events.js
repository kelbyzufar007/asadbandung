(async function () {
  const track = document.getElementById('ev-track');
  const prev  = document.getElementById('ev-prev');
  const next  = document.getElementById('ev-next');
  if (!track) return;

  // Ambil data
  let items = [];
  try {
    const res = await fetch('assets/data/events.json', { cache: 'no-store' });
    items = await res.json();
  } catch (e) { console.error('Gagal memuat events.json', e); }

  // Util: format tanggal Indonesia
  const bulan = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
  const tglID = (iso) => {
    const d = new Date(iso);
    return isNaN(d) ? iso : `${d.getDate()} ${bulan[d.getMonth()]} ${d.getMonth()+1 === 0 ? 'Januari' : bulan[d.getMonth()]} ${d.getFullYear()}`;
  };

  // Ikon meta
  const icCal = `<svg viewBox="0 0 24 24" class="w-5 h-5 text-rose-900"><path fill="currentColor" d="M19 4h-1V2h-2v2H8V2H6v2H5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3Zm1 15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V10h16v9Z"/></svg>`;
  const icCam = `<svg viewBox="0 0 24 24" class="w-5 h-5 text-rose-900"><path fill="currentColor" d="M17 10.5V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-3.5l4 3V7.5l-4 3Z"/></svg>`;

  // Template kartu
  const makeCard = (ev) => {
    const wrap = document.createElement('div');
    wrap.className = 'shrink-0 snap-center w-[88%] sm:w-[62%] md:w-[48%] lg:w-[24%]';
    wrap.innerHTML = `
      <article class="bg-white rounded-[28px] shadow-md ring-1 ring-black/5 p-4 md:p-5 flex flex-col">
        <div class="rounded-2xl border-2 border-dotted border-neutral-200 p-2">
          <div class="aspect-[4/5] overflow-hidden rounded-xl bg-neutral-100">
            <img src="${ev.poster}" alt="${ev.title}" class="w-full h-full object-cover">
          </div>
        </div>
        <div class="mt-4 flex items-center justify-between text-sm text-slate-700">
          <div class="flex items-center gap-2">${icCal}<span>${tglID(ev.date)}</span></div>
          <div class="flex items-center gap-2">${icCam}<span>${ev.mode}</span></div>
        </div>
        <a href="${ev.link}" class="mt-4 inline-flex items-center justify-center w-full rounded-xl bg-amber-500 text-rose-900 font-semibold py-3 hover:bg-amber-400">
          Daftar Sekarang
        </a>
      </article>
    `;
    return wrap;
  };

  // Render
  items.forEach(ev => track.appendChild(makeCard(ev)));

  // Hitung lebar satu langkah (kartu + gap)
  function stepWidth() {
    const first = track.querySelector(':scope > *');
    if (!first) return 0;
    const gap = parseInt(getComputedStyle(track).gap || '24', 10);
    return Math.ceil(first.getBoundingClientRect().width + gap);
  }

  // Index & navigasi (wrap-around)
  let idx = 0;
  const last = () => Math.max(0, items.length - 1);

  function goTo(i, smooth = true) {
    const sw = stepWidth(); if (!sw) return;
    idx = Math.max(0, Math.min(i, last()));
    track.scrollTo({ left: idx * sw, behavior: smooth ? 'smooth' : 'auto' });
  }

  function go(dir = 1) {
    const sw = stepWidth(); if (!sw) return;

    if (dir > 0 && idx >= last()) {
      goTo(0, false);
      requestAnimationFrame(() => { idx = 0; track.scrollBy({ left: sw, behavior: 'smooth' }); idx = 1; });
      return;
    }
    if (dir < 0 && idx <= 0) {
      goTo(last(), false);
      requestAnimationFrame(() => { idx = last(); track.scrollBy({ left: -sw, behavior: 'smooth' }); idx = Math.max(0, last()-1); });
      return;
    }
    goTo(idx + dir, true);
  }

  function syncIdx() {
    const sw = stepWidth(); if (!sw) return;
    idx = Math.round(track.scrollLeft / sw);
  }
  track.addEventListener('scroll', syncIdx);
  window.addEventListener('resize', syncIdx);

  // ===== AUTOPLAY ON =====
  let timer;
  const INTERVAL = 4000; // ganti kecepatan di sini (ms)
  function startAuto(){ stopAuto(); timer = setInterval(() => go(1), INTERVAL); }
  function stopAuto(){ if (timer) { clearInterval(timer); timer = null; } }

  // Pause saat user interaksi
  ['mouseenter','touchstart','focusin'].forEach(e => track.addEventListener(e, stopAuto));
  ['mouseleave','touchend','focusout'].forEach(e => track.addEventListener(e, startAuto));

  // Pause saat klik panah, lalu lanjut lagi
  const clickAndResume = (dir) => { stopAuto(); go(dir); startAuto(); };
  prev?.addEventListener('click', () => clickAndResume(-1));
  next?.addEventListener('click', () => clickAndResume(1));

  // Pause saat tab tidak aktif
  document.addEventListener('visibilitychange', () => {
    if (document.hidden) stopAuto(); else startAuto();
  });

  // Optional: hanya autoplay saat section terlihat di viewport
  const section = document.getElementById('kegiatan');
  if (section && 'IntersectionObserver' in window) {
    const io = new IntersectionObserver(([ent]) => {
      if (ent.isIntersecting) startAuto(); else stopAuto();
    }, { threshold: 0.25 });
    io.observe(section);
  } else {
    startAuto(); // fallback
  }

  // Init
  syncIdx();
})();
