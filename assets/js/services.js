(function () {
  var root = document.getElementById('services-slider');
  var list = document.getElementById('services-track');
  var prev = document.getElementById('svc-prev');
  var next = document.getElementById('svc-next');
  if (!root || !list) return;

  var started = false;

  function scheduleInit() {
    if (started) return;
    started = true;
    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', runInit, { once: true });
    } else {
      runInit();
    }
  }

  function observe() {
    if (!('IntersectionObserver' in window)) {
      scheduleInit();
      return;
    }
    var observer = new IntersectionObserver(function (entries) {
      for (var i = 0; i < entries.length; i++) {
        if (entries[i].isIntersecting) {
          observer.disconnect();
          scheduleInit();
          return;
        }
      }
    }, { rootMargin: '0px 0px 240px 0px' });
    observer.observe(root);
  }

  function runInit() {
    init().catch(function (error) {
      console.error('Services slider gagal inisialisasi.', error);
    });
  }

  async function ensureSplide() {
    if (typeof window.loadSplide === 'function') {
      return window.loadSplide();
    }
    if (typeof window.Splide === 'function') {
      return Promise.resolve(window.Splide);
    }
    return Promise.reject(new Error('loadSplide helper tidak ditemukan.')); 
  }

  async function init() {
    var items = [];
    try {
      var res = await fetch('assets/data/services.json', { cache: 'no-store' });
      items = await res.json();
    } catch (error) {
      console.error('Failed to load services.json', error);
    }

    if (!Array.isArray(items) || !items.length) return;

    list.innerHTML = '';
    items.forEach(function (item) {
      var li = document.createElement('li');
      li.className = 'splide__slide w-[85%] sm:w-[60%] md:w-[48%] lg:w-[32%] px-2';
      li.innerHTML = '
        <article class="bg-white rounded-[24px] shadow-md ring-1 ring-black/5 px-6 py-6 md:py-7 min-h-[260px] flex flex-col justify-between">
          <div>
            <h3 class="text-rose-900 font-bold text-xl mb-2">' + item.title + '</h3>
            <p class="text-slate-600 text-sm leading-relaxed">' + item.desc + '</p>
          </div>
          <div class="mt-5 flex items-end justify-between">
            <img src="' + item.icon + '" alt="" class="h-16 md:h-20 object-contain">
            <a href="' + item.url + '" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-amber-500 text-rose-900 font-semibold hover:bg-amber-400">
              ' + (item.cta || 'Selengkapnya') + '
              <svg viewBox="0 0 24 24" class="w-4 h-4" fill="none" aria-hidden="true">
                <path d="M9 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </a>
          </div>
        </article>
      ';
      list.appendChild(li);
    });

    try {
      await ensureSplide();
    } catch (error) {
      console.error('Splide gagal dimuat untuk services slider.', error);
      return;
    }

    if (typeof window.Splide !== 'function') return;

    var splide = new window.Splide(root, {
      type: 'loop',
      autoWidth: true,
      gap: '1.5rem',
      pagination: false,
      arrows: false,
      drag: 'free',
      flickPower: 600,
      speed: 600,
      easing: 'cubic-bezier(.22,.61,.36,1)'
    });

    prev && prev.addEventListener('click', function () { splide.go('<'); });
    next && next.addEventListener('click', function () { splide.go('>'); });

    splide.mount();
  }

  observe();
})();
