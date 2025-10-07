(function () {
  function getPageKey() {
    if (document.body.dataset.page) return document.body.dataset.page.toLowerCase();
    var segs = location.pathname.split('/').filter(Boolean);
    var last = segs.pop() || 'index.php';
    if (last.toLowerCase() === 'index.php' && segs.length) last = segs.pop();
    return last.toLowerCase();
  }

  var pageToJson = {
    '': '/assets/data/testimonials.json',
    'index': '/assets/data/testimonials.json',
    'index.php': '/assets/data/testimonials.json',
    'lkp.php': '/assets/data/testimonials-lkp.json',
    'lkp': '/assets/data/testimonials-lkp.json',
    'kursus': '/assets/data/testimonials-lkp.json',
    'ojs.php': '/assets/data/testimonials-ojs.json',
    'ojs': '/assets/data/testimonials-ojs.json'
  };

  var starSVG = '<svg viewBox="0 0 20 20" class="w-4 h-4 inline-block -mt-[2px]"><path fill="currentColor" d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.967 0 1.371 1.24.588 1.81l-2.802 2.036a1 1 0 00-.364 1.118l1.07 3.293c.3.921-.755 1.688-1.54 1.118L10 13.347l-2.885 2.067c-.785.57-1.84-.197-1.54-1.118l1.07-3.293a1 1 0 00-.364-1.118L3.48 8.72c-.783-.57-.379-1.81.588-1.81h3.461a1 1 0 00.95-.69l1.07-3.292z"/></svg>';

  function makeSlide(t) {
    var name = t.name || 'User';
    var role = t.role || t.package || '';
    var quote = t.quote || t.text || t.comment || '';
    var avatar = t.avatar || 'https://via.placeholder.com/80x80.png?text=%20';
    var rating = Math.max(0, Math.min(5, t.rating || 5));
    var stars = new Array(rating).fill(starSVG).join('');

    var li = document.createElement('li');
    li.className = 'splide__slide w-full sm:w-[62%] md:w-[48%] lg:w-[32%] px-2';
    li.innerHTML = '\n      <article class="bg-white rounded-2xl shadow-md ring-1 ring-black/5 px-6 py-6 min-h-[220px]">\n        <div class="flex items-start gap-3">\n          <img src="' + avatar + '" alt="' + name + '" class="w-10 h-10 rounded-full object-cover ring-2 ring-white shadow"/>\n          <div class="flex-1">\n            <div class="text-amber-500">' + stars + '</div>\n            <h3 class="text-slate-900 font-extrabold text-lg leading-tight mt-1">' + name + '</h3>\n            ' + (role ? '<p class="text-slate-500 text-sm -mt-0.5">' + role + '</p>' : '') + '\n          </div>\n          <div class="text-rose-900/60">\n            <svg viewBox="0 0 24 24" class="w-6 h-6"><path fill="currentColor" d="M7.17 17H4a6 6 0 0 1 6-6v9H4.83a1 1 0 0 1-.83-1Zm10 0H14a6 6 0 0 1 6-6v9h-5.17a1 1 0 0 1-.83-1Z"/></svg>\n          </div>\n        </div>\n        <p class="text-slate-700 text-sm leading-relaxed mt-3">"' + quote + '"</p>\n      </article>\n    ';
    return li;
  }

  var root = document.getElementById('testimonials');
  if (!root) return;

  var ul = document.getElementById('testi-track');
  var prevBtn = document.getElementById('testi-prev');
  var nextBtn = document.getElementById('testi-next');
  var dotsWrap = document.getElementById('testi-dots');

  function ensureSplide() {
    if (typeof window.loadSplide === 'function') {
      return window.loadSplide();
    }
    if (typeof window.Splide === 'function') {
      return Promise.resolve(window.Splide);
    }
    return Promise.reject(new Error('loadSplide helper tidak ditemukan.'));
  }

  async function init() {
    var pageKey = getPageKey();
    var src = pageToJson[pageKey] || '/assets/data/testimonials.json';

    var data = [];
    try {
      var res = await fetch(src, { cache: 'no-store' });
      data = await res.json();
    } catch (error) {
      console.error('Gagal memuat', src, error);
      return;
    }
    if (!Array.isArray(data) || !data.length) return;

    ul.innerHTML = '';
    data.forEach(function (item) { ul.appendChild(makeSlide(item)); });

    try {
      await ensureSplide();
    } catch (error) {
      console.error('Splide gagal dimuat untuk testimonials.', error);
      return;
    }

    if (typeof window.Splide !== 'function') return;

    var splide = new window.Splide('#testimonials', {
      type: 'loop',
      autoWidth: true,
      gap: '1.5rem',
      pagination: false,
      arrows: false,
      drag: 'free',
      flickPower: 600,
      speed: 600,
      easing: 'cubic-bezier(.22,.61,.36,1)',
      autoplay: true,
      interval: 10000,
      pauseOnHover: true,
      pauseOnFocus: true
    });

    prevBtn && prevBtn.addEventListener('click', function () { splide.go('<'); });
    nextBtn && nextBtn.addEventListener('click', function () { splide.go('>'); });

    var total = data.length;
    var dots = [];

    function renderDots() {
      if (!dotsWrap) return;
      dotsWrap.innerHTML = '';
      dots = Array.from({ length: total }).map(function (_, i) {
        var b = document.createElement('button');
        b.type = 'button';
        b.className = 'w-2.5 h-2.5 rounded-full bg-rose-300 transition-all aria-[current=true]:w-6 aria-[current=true]:bg-rose-900';
        b.setAttribute('aria-label', 'Slide ' + (i + 1));
        b.addEventListener('click', function () { splide.go(i); });
        dotsWrap.appendChild(b);
        return b;
      });
    }

    function syncDots() {
      if (!dots.length) return;
      var i = ((splide.index % total) + total) % total;
      dots.forEach(function (d, k) { d.setAttribute('aria-current', k === i ? 'true' : 'false'); });
    }

    splide.on('mounted move', syncDots);
    splide.mount();
    renderDots();
    syncDots();
  }

  function run() {
    init().catch(function (error) {
      console.error('Testimonials slider gagal inisialisasi.', error);
    });
  }

  function schedule() {
    if ('IntersectionObserver' in window) {
      var observer = new IntersectionObserver(function (entries) {
        for (var i = 0; i < entries.length; i++) {
          if (entries[i].isIntersecting) {
            observer.disconnect();
            attach();
            return;
          }
        }
      }, { rootMargin: '0px 0px 240px 0px' });
      observer.observe(root);
    } else {
      attach();
    }
  }

  function attach() {
    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', run, { once: true });
    } else {
      run();
    }
  }

  schedule();
})();
