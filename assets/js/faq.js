(async function () {
  const left  = document.getElementById('faq-left');
  const right = document.getElementById('faq-right');
  if (!left || !right) return;

  // ---- TENTUKAN SUMBER FAQ ----
  // 1) Optional override dari HTML: <section id="faq" data-faq-src="assets/data/faq-custom.json">
  const faqRoot = document.getElementById('faq');
  const overrideSrc = faqRoot?.dataset?.faqSrc;

  // 2) Deteksi nama halaman dari body[data-page] (diset oleh PHP) atau dari URL
  const currentPage =
    document.body.dataset.page // pakai ini jika body punya data-page
    || (location.pathname.split('/').pop() || 'index.php'); // fallback dari URL

  // 3) Peta halaman -> file JSON
  const pageToFaq = {
    '': 'assets/data/faq.json',
    'index.php': 'assets/data/faq.json',
    'publisher.php': 'assets/data/faq-publisher.json',
    'publikasi': 'assets/data/faq-publisher.json', // kalau pakai pretty URL /publikasi
    'book.php': 'assets/data/faq-book.json',
    'penerbit': 'assets/data/faq-book.json',           // kalau pakai pretty URL /penerbit
    'ojs.php': 'assets/data/faq-ojs.json',
    'ojs': 'assets/data/faq-ojs.json',           // kalau pakai pretty URL /ojs
    'lkp.php': 'assets/data/faq-lkp.json',
    'kursus': 'assets/data/faq-lkp.json',           // kalau pakai pretty URL /book
    'lpk.php': 'assets/data/faq-lpk.json',
    'pelatihan': 'assets/data/faq-lpk.json',           // kalau pakai pretty URL /book
    'ov.php': 'assets/data/faq-vo.json',
    'virtualoffice': 'assets/data/faq-vo.json',           // kalau pakai pretty URL /book
    'legal.php': 'assets/data/faq-legal.json',
    'legalitas': 'assets/data/faq-legal.json',           // kalau pakai pretty URL /book
  };

  // 4) Tentukan path final
  const faqSrc = overrideSrc || pageToFaq[currentPage] || 'assets/data/faq.json';

  // ---- AMBIL DATA ----
  let faqs = [];
  try {
    const res = await fetch(faqSrc, { cache: 'no-store' });
    faqs = await res.json();
  } catch (e) {
    console.error('Gagal memuat FAQ:', faqSrc, e);
  }

  // Komponen kartu FAQ
  function cardTpl(item, i) {
    const wrap = document.createElement('div');
    wrap.className = 'rounded-2xl bg-white border border-slate-200 shadow-sm overflow-hidden';
    wrap.setAttribute('data-index', String(i));
    wrap.setAttribute('aria-expanded', item.open ? 'true' : 'false');

    const caret = `
      <svg class="faq-caret w-5 h-5 text-rose-900 transition-transform duration-300 ${item.open ? 'rotate-180' : ''}"
           viewBox="0 0 20 20" fill="none" aria-hidden="true">
        <path d="M5.25 7.5 10 12.25 14.75 7.5" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round"/>
      </svg>`;

    wrap.innerHTML = `
      <button type="button"
              class="w-full flex items-center justify-between gap-4 px-6 py-5 text-left"
              aria-controls="faq-ans-${i}">
        <span class="font-semibold text-slate-900">${item.q}</span>
        ${caret}
      </button>
      <div id="faq-ans-${i}"
           class="faq-answer max-h-0 overflow-hidden transition-[max-height] duration-300 ease-out">
        <div class="px-6 pb-5 pt-0 border-t text-slate-600">${item.a}</div>
      </div>
    `;

    // Set default open state
    const ans = wrap.querySelector('.faq-answer');
    if (item.open && ans) {
      ans.style.maxHeight = ans.scrollHeight + 'px';
    } else {
      // jika tertutup, hilangkan border-top di konten jawaban
      const inner = ans?.firstElementChild;
      if (inner) inner.classList.remove('border-t');
    }
    return wrap;
  }

  // Render ke dua kolom (index genap -> kiri, ganjil -> kanan)
  faqs.forEach((f, i) => {
    const el = cardTpl(f, i);
    (i % 2 === 0 ? left : right).appendChild(el);
  });

  // Toggle handler
  function toggle(wrap) {
    const expanded = wrap.getAttribute('aria-expanded') === 'true';
    const ans  = wrap.querySelector('.faq-answer');
    const icon = wrap.querySelector('.faq-caret');
    const inner = ans?.firstElementChild;

    if (!ans || !icon || !inner) return;

    if (expanded) {
      ans.style.maxHeight = '0px';
      inner.classList.remove('border-t', 'pt-3');
      icon.classList.remove('rotate-180');
      wrap.setAttribute('aria-expanded', 'false');
    } else {
      ans.style.maxHeight = ans.scrollHeight + 'px';
      inner.classList.add('border-t', 'pt-3');
      icon.classList.add('rotate-180');
      wrap.setAttribute('aria-expanded', 'true');
    }
  }

  // Delegasi click untuk tiap kartu
  [left, right].forEach(col => {
    col.addEventListener('click', (e) => {
      const btn = (e.target.closest && e.target.closest('button[aria-controls]')) || null;
      if (!btn) return;
      const wrap = btn.closest('[aria-expanded]');
      if (wrap) toggle(wrap);
    });
  });

  // Recalc tinggi saat resize (agar animasi tetap smooth)
  window.addEventListener('resize', () => {
    document.querySelectorAll('#faq .faq-answer').forEach(ans => {
      const card = ans.closest('[aria-expanded="true"]');
      if (card) ans.style.maxHeight = ans.scrollHeight + 'px';
    });
  });

  // Refresh AOS bila dipakai
  if (window.AOS && typeof window.AOS.refreshHard === 'function') {
    window.AOS.refreshHard();
  }
})();
