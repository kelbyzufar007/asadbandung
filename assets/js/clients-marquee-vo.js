(() => {
  // ------- KONFIG -------
  const SPEED = 40; // px per detik (atur sesuai selera)
  const GAP_DESKTOP = 36; // jarak antar logo di desktop (px)
  const GAP_MOBILE = 32; // jarak antar logo di mobile (px)
  
  // Daftar logo (urutkan sesuka hati)
   const LOGOS = [
    'https://res.cloudinary.com/dhjqjn2hn/image/upload/v1758177585/image425_ycmozo.webp','https://res.cloudinary.com/dhjqjn2hn/image/upload/v1758177583/group1308_imtqiz.webp', 'https://res.cloudinary.com/dhjqjn2hn/image/upload/v1758177583/5.nusa_xdaijz.webp','https://res.cloudinary.com/dhjqjn2hn/image/upload/v1758177581/3_1_1_yv6imv.webp','https://res.cloudinary.com/dhjqjn2hn/image/upload/v1758177580/image885_zusugf.webp','https://res.cloudinary.com/dhjqjn2hn/image/upload/v1758177580/image884_gqvxok.webp','https://res.cloudinary.com/dhjqjn2hn/image/upload/v1758177580/image882_dzexhk.webp','https://res.cloudinary.com/dhjqjn2hn/image/upload/v1758177580/image881_thhuqz.webp','https://res.cloudinary.com/dhjqjn2hn/image/upload/v1758177579/image879_lkzulj.webp','https://res.cloudinary.com/dhjqjn2hn/image/upload/v1758177579/image883_itnrla.webp','https://res.cloudinary.com/dhjqjn2hn/image/upload/v1758177579/image880_yimt7o.webp'
  ];
  
  const track = document.getElementById('logos-track');
  if (!track) return;
  
  // Fungsi untuk mendapatkan gap yang sesuai dengan ukuran layar
  function getResponsiveGap() {
    return window.innerWidth < 640 ? GAP_MOBILE : GAP_DESKTOP;
  }
  
  // Fungsi untuk mendapatkan ukuran gambar yang sesuai
  function getResponsiveImageSize() {
    return window.innerWidth < 640 ? 'h-10' : 'h-12'; // Memperbesar gambar di mobile dari h-6 menjadi h-10
  }
  
  // Fungsi untuk mendapatkan padding yang sesuai
  function getResponsivePadding() {
    return window.innerWidth < 640 ? '0 20px' : '0 20px';
  }
  
  // Fungsi untuk mendapatkan margin gambar yang sesuai
  function getResponsiveImageMargin() {
    return window.innerWidth < 640 ? '0 6px' : '0'; // Mengurangi margin sedikit untuk mengakomodasi gambar yang lebih besar
  }
  
  // Fungsi untuk mendapatkan maxWidth gambar yang sesuai
  function getResponsiveImageMaxWidth() {
    return window.innerWidth < 640 ? '90px' : '100%'; // Memperbesar maxWidth gambar di mobile
  }
  
  // utility buat satu strip logo
  function buildStrip() {
    const wrap = document.createElement('div');
    wrap.className = 'absolute top-1/2 -translate-y-1/2 flex items-center justify-center';
    
    // Atur gap berdasarkan ukuran layar
    const currentGap = getResponsiveGap();
    wrap.style.gap = `${currentGap}px`;
    
    // Atur padding berdasarkan ukuran layar
    wrap.style.padding = getResponsivePadding();
    
    LOGOS.forEach((src, i) => {
      const img = document.createElement('img');
      img.src = src;
      img.alt = 'Client ' + (i + 1);
      
      // Atur ukuran gambar berdasarkan ukuran layar
      img.className = `${getResponsiveImageSize()} object-contain select-none`;
      
      // Tambahkan style untuk mencegah tumpukan dan memberikan jarak
      img.style.minWidth = 'auto';
      img.style.maxWidth = getResponsiveImageMaxWidth(); // Menggunakan fungsi untuk maxWidth
      img.style.flexShrink = '0'; // Mencegah gambar menyusut
      
      // Tambahkan margin untuk jarak tambahan
      img.style.margin = getResponsiveImageMargin();
      
      img.loading = 'lazy';
      
      // Tambahkan error handling
      img.onerror = function() {
        this.onerror = null;
        this.src = 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHJlY3Qgd2lkdGg9IjY0IiBoZWlnaHQ9IjY0IiBmaWxsPSIjRjNGNEY2Ii8+CjxwYXRoIGQ9Ik0yMSAzMkgyN1YzOEgyMVYzMloiIHN0cm9rZT0iIzlDQTNBQyIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiLz4KPHBhdGggZD0iTTI3IDI4SDMzVjM0SDI3VjI4WiIgc3Ryb2tlPSIjOUNBM0FDIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIvPgo8cGF0aCBkPSJNMzMgMzJIMzlWMzhIMzNWMzJaIiBzdHJva2U9IiM5Q0EzQUMiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIi8+CjxwYXRoIGQ9Ik0yMSA0MEgzOVY0NEgyMVY0MFoiIHN0cm9rZT0iIzlDQTNBQyIgc3Ryb2tlLXdpZHRoPSIyIiBzdHJva2UtbGluZWNhcD0icm91bmQiLz4KPC9zdmc+';
        this.alt = 'Image not available';
      };
      
      wrap.appendChild(img);
    });
    return wrap;
  }
  
  // buat dua strip untuk loop mulus
  const stripA = buildStrip();
  const stripB = buildStrip();
  track.append(stripA, stripB);
  
  // hitung lebar strip setelah gambar termuat
  function stripWidth(el) {
    const rect = el.getBoundingClientRect();
    return Math.ceil(rect.width);
  }
  
  let w = 0, pos = 0, last = performance.now(), playing = true;
  
  function recalc() {
    // Update gap berdasarkan ukuran layar
    const currentGap = getResponsiveGap();
    stripA.style.gap = `${currentGap}px`;
    stripB.style.gap = `${currentGap}px`;
    
    // Update padding berdasarkan ukuran layar
    const paddingValue = getResponsivePadding();
    stripA.style.padding = paddingValue;
    stripB.style.padding = paddingValue;
    
    // Update ukuran gambar dan margin
    const imageSizeClass = getResponsiveImageSize();
    const imageMargin = getResponsiveImageMargin();
    const maxWidth = getResponsiveImageMaxWidth();
    
    [stripA, stripB].forEach(strip => {
      const images = strip.querySelectorAll('img');
      images.forEach(img => {
        // Hapus kelas ukuran lama
        img.classList.remove('h-6', 'h-8', 'h-10', 'h-12');
        // Tambahkan kelas ukuran baru
        img.className = `${imageSizeClass} object-contain select-none`;
        
        // Reset style
        img.style.minWidth = 'auto';
        img.style.maxWidth = maxWidth;
        img.style.flexShrink = '0';
        img.style.margin = imageMargin;
      });
    });
    
    // reset posisi
    pos = 0;
    // pastikan strip di kiri-kanan
    stripA.style.transform = `translateX(0px) translateY(-50%)`;
    w = stripWidth(stripA);
    stripB.style.transform = `translateX(${w}px) translateY(-50%)`;
    track.style.height = stripA.getBoundingClientRect().height + 'px';
  }
  
  // jalankan
  function tick(now) {
    if (!playing) { 
      last = now; 
      return requestAnimationFrame(tick); 
    }
    
    const dt = (now - last) / 1000; 
    last = now;
    pos -= SPEED * dt;
    
    if (pos <= -w) pos += w;
    
    stripA.style.transform = `translateX(${pos}px) translateY(-50%)`;
    stripB.style.transform = `translateX(${pos + w}px) translateY(-50%)`;
    
    requestAnimationFrame(tick);
  }
  
  // pause saat hover/touch
  track.addEventListener('mouseenter', () => playing = false);
  track.addEventListener('mouseleave', () => playing = true);
  track.addEventListener('touchstart', () => playing = false, {passive:true});
  track.addEventListener('touchend', () => playing = true);
  
  // hitung ulang saat resize atau setelah gambar load
  window.addEventListener('resize', () => { 
    // Debounce resize event
    clearTimeout(window.resizeTimeout);
    window.resizeTimeout = setTimeout(recalc, 200);
  });
  
  window.addEventListener('load', recalc);
  
  // jika sebagian gambar lazy-load, beri jeda kecil
  setTimeout(recalc, 300);
  
  // Jalankan animasi
  requestAnimationFrame((t)=>{ 
    last=t; 
    recalc(); 
    tick(t); 
  });
})();

