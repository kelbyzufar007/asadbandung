  (function () {
    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('mobile-menu');
    const backdrop = document.getElementById('backdrop');

    function openMenu() {
      menu.classList.remove('hidden');
      backdrop.classList.remove('hidden');
      btn.setAttribute('aria-expanded', 'true');
      document.body.classList.add('overflow-hidden'); // cegah body scroll
    }
    function closeMenu() {
      menu.classList.add('hidden');
      backdrop.classList.add('hidden');
      btn.setAttribute('aria-expanded', 'false');
      document.body.classList.remove('overflow-hidden');
    }

    btn.addEventListener('click', () => {
      const open = btn.getAttribute('aria-expanded') === 'true';
      open ? closeMenu() : openMenu();
    });

    // Klik backdrop atau link -> tutup
    backdrop.addEventListener('click', closeMenu);
    document.querySelectorAll('#mobile-menu a').forEach(a => a.addEventListener('click', closeMenu));

    // Saat lebar >= md, pastikan tertutup
    window.addEventListener('resize', () => { if (window.innerWidth >= 768) closeMenu(); });
  })();
