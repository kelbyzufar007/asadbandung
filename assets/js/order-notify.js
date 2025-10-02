// assets/js/orders-notifier.js
(() => {
  // Cegah inisialisasi ganda
  if (window.__ORDERS_NOTIFIER_INITED) return;
  window.__ORDERS_NOTIFIER_INITED = true;

  // ====== KONFIGURASI ======
  const FETCH_URL    = '/assets/data/orders.json'; // file gabungan
  const SWITCH_EVERY = 9000;  // jeda antar notifikasi (ms)
  const FADE_MS      = 450;   // durasi fade in/out (ms)

  let data = [];
  let idx = -1;
  let timer = null;

  // Mount (container)
  const mount = document.getElementById('orders-notify') || (() => {
    const el = document.createElement('div');
    el.id = 'orders-notify';
    Object.assign(el.style, {
      position: 'fixed', left: '16px', bottom: '16px', zIndex: 60, pointerEvents: 'none'
    });
    document.body.appendChild(el);
    return el;
  })();

  // ------ Tentukan page target ------
  function urlLastSegment() {
    const segs = location.pathname.split('/').filter(Boolean);
    let last = segs.pop() || 'index.php';
    if (last.toLowerCase() === 'index.php' && segs.length) last = segs.pop();
    return last.toLowerCase().replace(/\.php$/, '');
  }

  // Prioritas: mount[data-page] -> body[data-page] -> slug URL
  const slugRaw =
    (mount.dataset && mount.dataset.page) ||
    (document.body && document.body.dataset && document.body.dataset.page || '')
      .toLowerCase().replace(/\.php$/, '') ||
    urlLastSegment();

  // Map slug URL -> key "page" di JSON
  const URL_TO_PAGE = {
    // index/home => ambil semua
    '': 'all', 'index': 'all', 'home': 'all',

    // Publikasi
    'publikasi':'publikasi', 'publisher':'publikasi',

    // Penerbitan Buku
    'book':'penerbit', 'penerbit':'penerbit',

    // Pelatihan & Sertifikasi (kursus/LKP)
    'lkp':'kursus', 'kursus':'kursus',

    // LPK Jepang
    'lpk':'pelatihan', 'pelatihan':'pelatihan',

    // OJS
    'ojs':'ojs',

    // Virtual Office
    'ov':'vo', 'virtualoffice':'vo',

    // Legalitas
    'legal':'legal', 'legalitas':'legal'
  };

  const PAGE_KEY = URL_TO_PAGE[slugRaw] || 'publikasi';

  // ====== Util ======
  const esc = s => String(s).replace(/[&<>"']/g, m => ({'&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#39;'}[m]));
  const tpl = (o) => `
    <div class="orders-toast" style="
      display:flex;align-items:center;gap:10px;pointer-events:auto;
      background:#fff;border:1px solid rgba(15,23,42,.12);
      box-shadow:0 10px 30px rgba(15,23,42,.12);
      padding:10px 14px;border-radius:14px;">
      <img src="${o.avatar || 'https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756096658/icpro_b3jrq4.webp'}"
           alt="${esc(o.name)}" style="width:36px;height:36px;border-radius:999px;object-fit:cover;border:2px solid #fff;box-shadow:0 2px 6px rgba(15,23,42,.12)">
      <div style="font-size:14px;line-height:1.2;color:#0f172a">
        <strong>${esc(o.name)}</strong> baru saja order<br>
        <span style="color:#931c3a;font-weight:bold">${esc(o.package)}</span>
      </div>
    </div>
  `;

  // Shuffle in-place (Fisher–Yates)
  function shuffle(arr) {
    for (let i = arr.length - 1; i > 0; i--) {
      const j = Math.floor(Math.random() * (i + 1));
      [arr[i], arr[j]] = [arr[j], arr[i]];
    }
    return arr;
  }

  async function load() {
    try {
      const res = await fetch(FETCH_URL, { cache: 'no-store' });
      const list = await res.json();
      const arr = Array.isArray(list) ? list : [];

      // Filter sesuai halaman; untuk index "all" ambil semuanya
      const base = (PAGE_KEY === 'all') ? arr : arr.filter(x => x.page === PAGE_KEY);

      // Buang duplikat (name+package)
      const seen = new Set();
      data = base.filter(it => {
        const key = `${it.name}|${it.package}`;
        if (seen.has(key)) return false;
        seen.add(key);
        return true;
      });

      // Acak urutan awal
      shuffle(data);

      // Fallback kalau kosong: ambil sample acak dari seluruh data
      if (!data.length && arr.length) {
        data = shuffle(arr.slice()).slice(0, 12).map(x => ({ name:x.name, package:x.package, avatar:x.avatar }));
      }
    } catch (e) {
      console.error('orders.json gagal dimuat', e);
      data = [];
    }
  }

  function nextIndex() {
    if (!data.length) return -1;
    idx++;
    if (idx >= data.length) {
      // selesai satu putaran -> acak lagi
      idx = 0;
      shuffle(data);
    }
    return idx;
  }

  function show(i) {
    if (i < 0) return;
    // Hapus toast lama
    mount.querySelectorAll('.orders-toast').forEach(n => n.remove());

    const wrap = document.createElement('div');
    wrap.innerHTML = tpl(data[i]);
    const node = wrap.firstElementChild;

    // Animasi masuk
    node.style.opacity = '0';
    node.style.transform = 'translateY(8px)';
    node.style.transition = `opacity ${FADE_MS}ms ease, transform ${FADE_MS}ms ease`;
    mount.appendChild(node);
    requestAnimationFrame(() => {
      node.style.opacity = '1';
      node.style.transform = 'translateY(0)';
    });

    // Jadwalkan keluar
    const hideAt = SWITCH_EVERY - FADE_MS - 50;
    setTimeout(() => {
      node.style.opacity = '0';
      node.style.transform = 'translateY(8px)';
      setTimeout(() => node.remove(), FADE_MS);
    }, Math.max(300, hideAt));
  }

  function startLoop() {
    if (timer) clearInterval(timer);
    show(nextIndex());
    timer = setInterval(() => show(nextIndex()), SWITCH_EVERY);
  }

  // Pause/Resume saat hover
  mount.addEventListener('mouseenter', () => { if (timer) { clearInterval(timer); timer = null; } });
  mount.addEventListener('mouseleave', () => { if (!timer) timer = setInterval(() => show(nextIndex()), SWITCH_EVERY); });

  // Init
  (async () => {
    await load();
    if (data.length) startLoop();
  })();
})();