<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>ASAD CORPORATION — Solusi Penerbitan, Pelatihan & Digital</title>
    <meta name="description"
        content="Satu pintu untuk penerbitan buku & jurnal, pelatihan LKP/LPK, layanan OJS, Virtual Office, dan legalitas usaha. Bangun reputasi dan percepat pertumbuhan bisnismu.">
    <meta name="author" content="ASAD CORPORATION" />
    <meta name="publisher" content="ASAD CORPORATION" />
    <meta name="robots" content="index,follow" />
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-KSLV8NPD');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Preconnect: percepat DNS/TLS ke semua origin yang kamu pakai -->
    <link rel="preconnect" href="https://cdn.tailwindcss.com" crossorigin>
    <link rel="preconnect" href="https://res.cloudinary.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://unpkg.com" crossorigin>
    <link rel="preconnect" href="https://code.iconify.design" crossorigin>
    

    <!-- Google Fonts: Inter (sekali saja, rapi) -->
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Inter:wght@400..900&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400..900&display=swap">

    <!-- Tailwind CDN (tetap pakai). Konfigurasi opsional: batasi fitur agar ringan -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- CSS tambahanmu (kalau ada). Jika non-kritis, pakai trik non-blocking -->
    <link rel="preload" as="style" href="/assets/css/app.min.css">
    <link rel="stylesheet" href="/assets/css/app.min.css">

    <!-- AOS CSS (sekali, blocking ringan oke; hindari trik media=print) -->
    <link rel="preload" as="style" href="https://unpkg.com/aos@2.3.4/dist/aos.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">

    <!-- Favicon (sesuaikan type dengan ekstensi .webp) -->
    <link rel="icon" type="image/webp"
        href="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756103067/favicon02_arg36j.webp">

    <!-- Iconify: non-blocking -->
    <script src="https://code.iconify.design/3/3.1.1/iconify.min.js" defer></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11258390254">
    </script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'AW-11258390254');
    </script>
</head>

<body class="antialiased bg-gray-50 text-gray-800 min-h-screen flex flex-col overflow-x-hidden " data-page="<?= basename($_SERVER['PHP_SELF']); ?>">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KSLV8NPD" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- ====== Section Navbar ====== -->
    <header class="fixed top-0 inset-x-0 z-50 border-w bg-white md:bg-white/80 md:backdrop-blur">
        <nav class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <!-- GRID 12 | HEIGHT: 72px mobile, 120px desktop -->
            <div class="grid grid-cols-12 gap-4 items-center h-[72px] md:h-[100px]">

                <!-- Logo kiri -->
                <a href="/" class="col-span-8 md:col-span-3 flex items-center">
                    <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756103060/logo01-hori_fnmbn0.webp"
                        alt="ASAD CORPORATION Indonesia" class="h-8 md:h-12 w-auto" loading="eager" decoding="async" />
                    <span class="sr-only">ASAD CORPORATION Indonesia</span>
                </a>

                <!-- Menu tengah (desktop) -->
                <ul
                    class="col-span-12 md:col-span-6 hidden md:flex items-center justify-center gap-10 text-[15px] font-medium">
                    <li><a href="#tentang" class="hover:text-rose-800">Tentang Kami</a></li>

                    <li class="relative">
                        <button id="services-btn" class="inline-flex items-center gap-1 hover:text-rose-800"
                            type="button" aria-haspopup="true" aria-expanded="false" aria-controls="services-menu">
                            Layanan
                            <svg class="w-4 h-4 text-amber-500" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                                <path d="M5.25 7.5 10 12.25 14.75 7.5" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>

                        <div class="absolute left-0 top-full pt-3 z-30">
                            <div id="services-menu" role="menu" class="w-56 bg-white border border-slate-200 rounded-xl shadow p-3
                  hidden opacity-0 translate-y-2 pointer-events-none
                  transition duration-150">
                                <a href="/publikasi" class="block px-3 py-2 rounded-lg hover:bg-gray-100">Publikasi
                                    Jurnal</a>
                                <a href="/penerbit" class="block px-3 py-2 rounded-lg hover:bg-gray-100">Penerbitan
                                    Buku</a>
                                <a href="/ojs" class="block px-3 py-2 rounded-lg hover:bg-gray-100">OJS & Indexing</a>
                                <a href="/kursus" class="block px-3 py-2 rounded-lg hover:bg-gray-100">Pelatihan &
                                    Sertifikasi</a>
                                <a href="/pelatihan" class="block px-3 py-2 rounded-lg hover:bg-gray-100">Pelatihan
                                    Kerja Jepang</a>
                                <a href="/virtualoffice" class="block px-3 py-2 rounded-lg hover:bg-gray-100">Virtual
                                    Office</a>
                                <a href="/legalitas" class="block px-3 py-2 rounded-lg hover:bg-gray-100">Legalitas</a>
                            </div>
                        </div>
                    </li>

                    <li><a href="#testimoni" class="hover:text-rose-800">Testimoni</a></li>
                    <li><a href="#kontak" class="hover:text-rose-800">Kontak</a></li>
                    <li><a href="#event" class="hover:text-rose-800">Event</a></li>
                </ul>


                <!-- Aksi kanan (desktop) + tombol mobile -->
                <div class="col-span-4 md:col-span-3 flex items-center justify-end gap-3">
                    <a href="https://whatsapp.com/channel/0029VbBVWb8K5cD6UAS75W0R"
                        class="conversion hidden md:inline-flex w-10 h-10 items-center justify-center rounded-full border border-amber-300 bg-amber-50 text-amber-500 hover:bg-amber-100"
                        aria-label="Telepon">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none"
                            aria-hidden="true">
                            <path fill="currentColor"
                                d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28" />
                        </svg>
                    </a>

                    <a href="mailto:hello@asadcorporation.co.id"
                        class="hidden md:inline-flex w-10 h-10 items-center justify-center rounded-full border border-amber-300 bg-amber-50 text-amber-500 hover:bg-amber-100"
                        aria-label="Email">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 32 32">
                            <path fill="currentColor"
                                d="M32 6v20c0 1.135-.865 2-2 2h-2V9.849l-12 8.62l-12-8.62V28H2c-1.135 0-2-.865-2-2V6c0-.568.214-1.068.573-1.422A1.97 1.97 0 0 1 2 4h.667L16 13.667L29.333 4H30c.568 0 1.068.214 1.427.578c.359.354.573.854.573 1.422" />
                        </svg>
                    </a>

                    <a href="https://wa.me/6282297881480?text=Halo%20admin%20ACI%2C%20saya%20dari%20website%20ingin%20bertanya%20tentang%20layanan%3A%20terbit%20buku%2C%20publish%20jurnal%2C%20percetakan%2C%20dll."
                        target="_blank" rel="noopener"
                        class="conversion hidden md:inline-flex items-center rounded-xl px-5 py-3 bg-rose-900 text-white font-medium shadow-sm hover:opacity-90">
                        Hubungi Kami
                    </a>

                    <!-- Toggle mobile -->
                    <button id="menu-btn"
                        class="md:hidden inline-flex w-10 h-10 items-center justify-center rounded-lg border border-amber-300 bg-amber-50 text-amber-500 hover:bg-amber-100"
                        aria-label="Buka menu" aria-expanded="false" aria-controls="mobile-menu">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M4 6h16M4 12h16M4 18h16" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" />
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
    </header>

    <!-- Spacer supaya konten tidak ketutup header fixed -->
    <div class="h-[72px] md:h-[120px]"></div>

    <!-- Backdrop -->
    <div id="backdrop" class="fixed inset-0 bg-black/30 hidden z-40"></div>

    <!-- PANEL MENU MOBILE -->
    <nav id="mobile-menu" class="md:hidden fixed top-[72px] md:top-[120px] inset-x-0 z-[60] hidden">
        <!-- Inner container -->
        <div class="mx-4 mb-4 rounded-2xl bg-white shadow-xl ring-1 ring-slate-200
              max-h-[calc(100vh-72px-1rem)] md:max-h-[calc(100vh-120px-1rem)]
              overflow-y-auto overscroll-contain">
            <ul class="p-2 flex flex-col gap-2 text-base">
                <li><a href="#tentang" class="block px-4 py-3 rounded-lg hover:bg-gray-50">Tentang Kami</a></li>
                <li><a href="/publikasi" class="block px-4 py-3 rounded-lg hover:bg-gray-50">Publikasi Jurnal</a></li>
                <li><a href="/penerbit" class="block px-4 py-3 rounded-lg hover:bg-gray-50">Penerbitan Buku</a></li>
                <li><a href="/ojs" class="block px-4 py-3 rounded-lg hover:bg-gray-50">OJS & Indexing</a></li>
                <li><a href="/kursus" class="block px-4 py-3 rounded-lg hover:bg-gray-50">Pelatihan & Sertifikasi</a>
                <li><a href="/pelatihan" class="block px-4 py-3 rounded-lg hover:bg-gray-50">Pelatihan Kerja Jepang</a>
                <li><a href="/virtualoffice" class="block px-4 py-3 rounded-lg hover:bg-gray-50">Virtual office</a>
                <li><a href="/legalitas" class="block px-4 py-3 rounded-lg hover:bg-gray-50">Legalitas</a>
                </li>

                <li><a href="#testimoni" class="block px-4 py-3 rounded-lg hover:bg-gray-50">Testimoni</a></li>
                <li><a href="#event" class="block px-4 py-3 rounded-lg hover:bg-gray-50">Event</a></li>
                <li><a href="#kontak"
                        class="block px-4 py-3 rounded-lg bg-rose-900 text-white text-center hover:opacity-90">Hubungi
                        Kami</a></li>
            </ul>
            <ul class="p-2 flex flex-col gap-2 text-base">
                <li><a href="#tentang" class="block px-4 py-3 rounded-lg hover:bg-gray-50">Tentang Kami</a></li>
                <li><a href="/publikasi" class="block px-4 py-3 rounded-lg hover:bg-gray-50">Publikasi Jurnal</a></li>
                <li><a href="/penerbit" class="block px-4 py-3 rounded-lg hover:bg-gray-50">Penerbitan Buku</a></li>
                <li><a href="/ojs" class="block px-4 py-3 rounded-lg hover:bg-gray-50">OJS & Indexing</a></li>
                <li><a href="/kursus" class="block px-4 py-3 rounded-lg hover:bg-gray-50">Pelatihan & Sertifikasi</a>
                <li><a href="/pelatihan" class="block px-4 py-3 rounded-lg hover:bg-gray-50">Pelatihan Kerja Jepang</a>
                <li><a href="/virtualoffice" class="block px-4 py-3 rounded-lg hover:bg-gray-50">Virtual office</a>
                <li><a href="/legalitas" class="block px-4 py-3 rounded-lg hover:bg-gray-50">Legalitas</a>
                </li>

                <li><a href="#testimoni" class="block px-4 py-3 rounded-lg hover:bg-gray-50">Testimoni</a></li>
                <li><a href="#event" class="block px-4 py-3 rounded-lg hover:bg-gray-50">Event</a></li>
                <li><a href="#kontak"
                        class="block px-4 py-3 rounded-lg bg-rose-900 text-white text-center hover:opacity-90">Hubungi
                        Kami</a></li>
            </ul>
        </div>
    </nav>
    <!-- ====== Section End Navbar ====== -->


    <main class="flex-1">
        <!-- ====== HERO ====== -->
        <section
            class="max-w-7xl mx-auto px-6 lg:px-8 py-12 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center relative overflow-hidden">
            <!-- Kolom kiri -->
            <div class="space-y-6">
                <h1 class="text-3xl md:text-4xl font-bold leading-snug" data-aos="fade-up">
                    <span class="text-amber-500">"</span>
                    <span class="text-black" style="font-family:'Madani',ui-sans-serif,system-ui;font-weight:700;">
                        PARTNER STRATEGIS UNTUK
                    </span><br>
                    <span class="relative inline-block text-rose-900 pb-3"
                        style="font-family:'Madani',ui-sans-serif,system-ui;font-weight:700;">
                        SOLUSI DIGITAL ANDA
                        <span class="absolute left-0 bottom-0 w-full h-[5px] bg-amber-500"></span>
                    </span>
                    <span class="text-amber-500">"</span>
                </h1>

                <p class="text-slate-900 text-justify leading-relaxed" data-aos="fade-up" data-aos-delay="100">
                    Dengan pengalaman dan jaringan luas, Asad Corporation Indonesia membantu Anda menerbitkan karya,
                    mengembangkan keterampilan, dan membangun platform digital yang siap bersaing di era modern.
                </p>

                <!-- Ikon Sosial -->
                <div class="flex gap-3" data-aos="fade-up" data-aos-delay="200">
                    <a href="https://www.instagram.com/asadcorp/"><img
                            src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756093845/ig_m9z8g6.webp"
                            class="w-8 h-8" alt="Instagram" loading="lazy"></a>
                    <a href="https://www.facebook.com/people/Asad-Corporation-Indonesia/61579008007320/"><img
                            src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756093852/fb_wnh2m9.webp"
                            class="w-8 h-8" alt="Facebook" loading="lazy"></a>
                    <a href="mailto:asadcorporationindonesia@gmail.com"><img
                            src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756093847/gm_uzwphz.webp"
                            class="w-8 h-8" alt="Gmail" loading="lazy"></a>
                    <a href="https://wa.me/6282297881480"><img
                            src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756093850/wa_yhetdf.webp"
                            class="conversion w-8 h-8" alt="WhatsApp" loading="lazy"></a>
                </div>

                <!-- Tombol -->
                <div class="flex flex-wrap gap-2 lg:gap-3" data-aos="fade-up" data-aos-delay="300">
                    <a href="https://wa.me/6282297881480?text=Halo%20admin%20ACI%2C%20saya%20dari%20website%20ingin%20bertanya%20tentang%20layanan%3A%20terbit%20buku%2C%20publish%20jurnal%2C%20percetakan%2C%20dll.%0A%0ANama%3A%20%0AKebutuhan%3A%20%0ATenggat%2FDeadline%3A%20"
                        class="conversion px-6 py-3 bg-amber-500 text-rose-900 rounded-lg font-medium hover:bg-amber-400">
                        Hubungi Kami
                    </a>
                    <a href="#layanan"
                        class="px-6 py-3 border border-rose-900 text-rose-900 rounded-lg font-medium hover:bg-rose-900 hover:text-white inline-flex items-center gap-2">
                        Lihat Layanan <span>↓</span>
                    </a>
                </div>
            </div>

            <!-- Kolom kanan (gambar) -->
            <div class="relative flex justify-center lg:justify-end" data-aos="fade-left" data-aos-delay="150">
                <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756092825/group1892_wjzh06.webp"
                    class="w-lg" alt="Orang"
                    class="w-full max-w-[320px] sm:max-w-[380px] md:max-w-sm h-auto object-contain" loading="lazy">
            </div>
        </section>

        <!-- ====== MEDIA PARTNER ====== -->
        <div class=" z-10 relative overflow-hidden">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div data-aos="fade-up"
                    class="bg-white rounded-[28px] shadow-lg ring-1 ring-black/5 px-2 md:px-8 py-4 md:py-5 flex flex-col md:flex-row items-center gap-2 md:gap-10 aos-init aos-animate">
                    <!-- Judul -->
                    <div class="w-full md:w-auto  text-center md:text-left md:text-lg font-semibold text-slate-700">
                        Media Partner:
                    </div>

                    <!-- Logo bar -->
                    <ul class="w-full flex items-center justify-center md:justify-start gap-2 md:gap-10 flex-wrap">
                        <li><img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756093409/tj_o3plkx.webp"
                                alt="Tribun Jabar" loading="lazy" class="h-4 md:h-11 object-contain"></li>
                        <li><img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756093412/kk_ewxaxs.webp"
                                alt="Kaskus" loading="lazy" class="h-2 md:h-6  object-contain"></li>
                        <li><img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756093407/sm_qgczt0.webp"
                                alt="suara.com" loading="lazy" class="h-4 md:h-9  object-contain"></li>
                        <li><img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756093407/oz_zppxxl.webp"
                                alt="okezone.com" loading="lazy" class="h-2 md:h-7  object-contain"></li>
                        <li><img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756093410/bc_llvhgt.webp"
                                alt="Bisnis.com" loading="lazy" class="h-3 md:h-9  object-contain"></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- ====== MENGAPA KAMI ====== -->
        <section class="relative bg-gradient-to-br from-rose-900 to-rose-600 text-white
                -mt-4 md:-mt-14 pt-20 md:pt-28 pb-16  overflow-hidden">
            <div class="mx-auto max-w-7xl px-6 lg:px-8 text-center">
                <h2 class="text-3xl md:text-4xl font-bold"
                    style="font-family:'Madani',ui-sans-serif,system-ui;font-weight:700;" data-aos="fade-up">
                    Mengapa Harus Kami?
                </h2>
                <p class="mt-2 text-white/80" data-aos="fade-up" data-aos-delay="100">
                    Kami memberikan lebih dari sekadar layanan. kami menghadirkan solusi yang nyata, terpercaya, dan
                    berdampak.
                </p>

                <div class="mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- 1 -->
                    <div class="space-y-2" data-aos="zoom-in" data-aos-delay="0">
                        <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756094060/emblem_oletef.webp"
                            class="mx-auto h-20" alt="" loading="lazy">
                        <h3 class="font-bold text-lg"
                            style="font-family:'Madani',ui-sans-serif,system-ui;font-weight:700;">Terdaftar & Resmi</h3>
                        <p class="text-white/80 text-sm">ACI adalah perusahaan berbadan hukum yang terdaftar di
                            Kementerian Hukum dan HAM RI</p>
                    </div>
                    <!-- 2 -->
                    <div class="space-y-2" data-aos="zoom-in" data-aos-delay="100">
                        <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756094063/hand_x0w3b7.webp"
                            class="mx-auto h-20" alt="" loading="lazy">
                        <h3 class="font-bold text-lg"
                            style="font-family:'Madani',ui-sans-serif,system-ui;font-weight:700;">Layanan Lengkap</h3>
                        <p class="text-white/80 text-sm">Publikasi, kursus, dan layanan digital dalam satu atap.</p>
                    </div>
                    <!-- 3 -->
                    <div class="space-y-2" data-aos="zoom-in" data-aos-delay="200">
                        <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756094058/person_u9e6l3.webp"
                            class="mx-auto h-20" alt="" loading="lazy">
                        <h3 class="font-bold text-lg"
                            style="font-family:'Madani',ui-sans-serif,system-ui;font-weight:700;">Tim Profesional</h3>
                        <p class="text-white/80 text-sm">Didukung tenaga ahli di bidang publikasi, pendidikan, dan
                            teknologi.</p>
                    </div>
                    <!-- 4 -->
                    <div class="space-y-2" data-aos="zoom-in" data-aos-delay="300">
                        <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756094060/emblem_oletef.webp"
                            class="mx-auto h-20" alt="" loading="lazy">
                        <h3 class="font-bold text-lg"
                            style="font-family:'Madani',ui-sans-serif,system-ui;font-weight:700;">Jangkauan Klien Luas
                        </h3>
                        <p class="text-white/80 text-sm">Dipercaya individu, lembaga pendidikan, hingga perusahaan
                            nasional.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ====== TENTANG KAMI ====== -->
        <section id="tentang" class="bg-neutral-50  scroll-mt-[120px] relative overflow-hidden ">
            <div
                class="max-w-7xl mx-auto px-6 lg:px-8 py-16 lg:py-24 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                <!-- KIRI -->
                <div class="space-y-6" data-aos="fade-right">
                    <span
                        class="inline-flex w-auto px-4 py-1.5 rounded-full bg-amber-500 text-rose-900 text-sm font-semibold">
                        TENTANG KAMI
                    </span>

                    <h2 class="text-3xl md:text-4xl font-bold leading-snug"
                        style="font-family:'Madani',ui-sans-serif,system-ui;font-weight:700;">
                        MITRA TEPERCAYA DALAM
                        <span class="text-rose-900">PUBLIKASI, kursus, DAN LAYANAN DIGITAL</span>
                    </h2>

                    <p class="text-slate-800 text-justify">
                        <span class="font-semibold ">ACI (Asad Corporation Indonesia)</span> adalah perusahaan resmi
                        berbadan hukum
                        yang telah terdaftar di Kementerian Hukum dan HAM Republik Indonesia serta memiliki izin
                        operasional yang sah.
                    </p>

                    <p class="text-slate-700 text-justify">
                        Kami hadir untuk membantu penulis, pendidik, pelaku bisnis, dan institusi dalam menghadirkan
                        karya terbaiknya
                        melalui layanan publikasi, kursus, dan pengembangan platform digital yang profesional. Dengan
                        dukungan tim ahli
                        dan pengalaman yang luas, ACI berkomitmen memberikan solusi terintegrasi, berkualitas tinggi,
                        dan tepat waktu untuk setiap klien.
                    </p>
                </div>

                <!-- KANAN: legalitas — SELALU PAS DENGAN SHAPE -->
                <div class="relative" data-aos="fade-left">
                    <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756093672/legal_xpjmpn.webp"
                        alt="Dokumen Resmi ACI"
                        class="mx-auto w-full max-w-[480px] h-auto object-contain drop-shadow-xl" loading="lazy">
                </div>


            </div>
        </section>

        <!-- ====== PRODUK & LAYANAN ====== -->
        <section id="layanan" class="relative overflow-hidden bg-[#F4EAD6] py-14">
            <!-- dekor kiri/kanan -->
            <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756094972/orn-right_ybuwe4.webp"
                class="pointer-events-none absolute left-0 bottom-0 w-56 md:w-96 opacity-70" alt=""
                data-aos="fade-right" data-aos-delay="0">
            <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756094975/orn-left_ollpnl.webp"
                class="pointer-events-none absolute right-0 top-0 w-56 md:w-96 rotate-180 opacity-70" alt=""
                data-aos="fade-left" data-aos-delay="0">

            <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8">
                <header class="mb-6">
                    <h2 class="text-3xl md:text-4xl font-bold leading-tight"
                        style="font-family:'Madani', ui-sans-serif, system-ui; font-weight:700;" data-aos="fade-up"
                        data-aos-delay="0">
                        PRODUK &amp; LAYANAN
                        <span class="relative text-rose-900">ACI
                            <span class="absolute left-0 -bottom-1 h-[5px] w-full bg-amber-500"></span>
                        </span>
                    </h2>
                    <p class="text-slate-700 mt-1 pt-4" data-aos="fade-up" data-aos-delay="100">
                        Temukan produk &amp; layanan yang paling tepat untuk Anda
                    </p>
                </header>

                <!-- TRACK: horizontal scroll + snap -->
                <div id="services-track"
                    class="flex gap-6 overflow-x-auto snap-x snap-mandatory scroll-smooth pb-2 -mx-2 px-2 lg:px-0 scrollbar-none"
                    aria-label="Daftar layanan" data-aos="fade-up" data-aos-delay="150">
                    <!-- slide akan diinject JS -->
                </div>

                <!-- NAV -->
                <div class="mt-8 flex justify-center gap-6" data-aos="fade-up" data-aos-delay="200">
                    <button id="svc-prev"
                        class="w-12 h-12 rounded-full ring-2 ring-rose-900 text-rose-900 flex items-center justify-center hover:bg-rose-900/10"
                        aria-label="Sebelumnya">
                        <svg viewBox="0 0 24 24" class="w-6 h-6" fill="none">
                            <path d="M15 6 9 12l6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                    <button id="svc-next"
                        class="w-12 h-12 rounded-full ring-2 ring-rose-900 text-rose-900 flex items-center justify-center hover:bg-rose-900/10"
                        aria-label="Berikutnya">
                        <svg viewBox="0 0 24 24" class="w-6 h-6" fill="none">
                            <path d="M9 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
        </section>

        <!-- ================= TESTIMONI ================= -->
        <section id="testimoni" class="bg-neutral-100 py-14 relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <header class="text-center mb-8">
                    <h2 class="text-3xl md:text-4xl font-bold"
                        style="font-family:'Madani', ui-sans-serif, system-ui; font-weight:700;" data-aos="fade-up"
                        data-aos-delay="0">
                        Bukti
                        <span class="relative text-rose-900">
                            Kepuasan Pelanggan
                            <span class="absolute left-0 -bottom-1 h-[5px] w-full bg-amber-500"></span>
                        </span>
                        Kami
                    </h2>
                </header>

                <div class="relative isolate">
                    <!-- tombol kiri -->
                    <button id="testi-prev"
                        class="absolute -left-5 md:-left-7 top-1/2 -translate-y-1/2 w-11 h-11 rounded-full ring-2 ring-rose-900 text-rose-900 bg-white flex items-center justify-center hover:bg-rose-900/10 z-20"
                        aria-label="Sebelumnya" data-aos="fade-right" data-aos-delay="100">
                        <svg viewBox="0 0 24 24" class="w-6 h-6" fill="none">
                            <path d="M15 6 9 12l6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>

                    <!-- TRACK -->
                    <div id="testi-track" class="flex gap-6 overflow-x-auto snap-x snap-mandatory scroll-smooth px-1 pb-2 scrollbar-none
           pl-16 pr-16 md:pl-20 md:pr-20" aria-label="Daftar testimoni" data-aos="fade-up" data-aos-delay="150">
                    </div>

                    <!-- tombol kanan -->
                    <button id="testi-next"
                        class="absolute -right-5 md:-right-7 top-1/2 -translate-y-1/2 w-11 h-11 rounded-full ring-2 ring-rose-900 text-rose-900 bg-white flex items-center justify-center hover:bg-rose-900/10 z-20"
                        aria-label="Berikutnya" data-aos="fade-left" data-aos-delay="100">
                        <svg viewBox="0 0 24 24" class="w-6 h-6" fill="none">
                            <path d="M9 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>


                <!-- DOTS -->
                <div id="testi-dots" class="mt-5 flex justify-center gap-2" data-aos="fade-up" data-aos-delay="200">
                </div>
            </div>
        </section>

        <!-- ==========  KONTAK KAMI ========== -->
        <section id="kontak" class="bg-neutral-100 py-16 relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" data-aos="fade-up" data-aos-delay="0">
                <div class="bg-gradient-to-br from-rose-900 to-rose-600 text-white rounded-[24px] sm:rounded-[36px] p-4 sm:p-6 md:p-10 shadow-xl"
                    data-aos="zoom-in" data-aos-delay="50">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 items-start">
                        <!-- KIRI: Info Kontak -->
                        <div class="space-y-6">
                            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold uppercase"
                                style="font-family:'Madani', ui-sans-serif, system-ui; font-weight:700;"
                                data-aos="fade-right" data-aos-delay="100">Hubungi Kami</h2>

                            <div data-aos="fade-up" data-aos-delay="150">
                                <p class="font-semibold mb-3">Primary Contact</p>
                                <ul class="space-y-3">
                                    <li class="flex gap-3" data-aos="fade-up" data-aos-delay="200">
                                        <span
                                            class="w-9 h-9 rounded-full bg-amber-500/90 text-rose-900 flex items-center justify-center shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M12 11.5A2.5 2.5 0 0 1 9.5 9A2.5 2.5 0 0 1 12 6.5A2.5 2.5 0 0 1 14.5 9a2.5 2.5 0 0 1-2.5 2.5M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7" />
                                            </svg>
                                        </span>
                                        <p class="text-white/90 leading-relaxed">
                                            Graha DLA, Jl. Otto Iskandar Dinata No. 392, Lantai 1, Kelurahan Nyengseret,
                                            Kecamatan Astanaanyar, Kota Bandung, Jawa Barat 40252
                                        </p>
                                    </li>

                                    <li class="flex gap-3" data-aos="fade-up" data-aos-delay="250">
                                        <span
                                            class="w-9 h-9 rounded-full bg-amber-500/90 text-rose-900 flex items-center justify-center shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M20 18h-2V9.25L12 13L6 9.25V18H4V6h1.2l6.8 4.25L18.8 6H20m0-2H4c-1.11 0-2 .89-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2" />
                                            </svg>
                                        </span>
                                        <a href="mailto:asadcorporationindonesia@gmail.com"
                                            class="text-white/90 hover:underline">
                                            asadcorporationindonesia@gmail.com
                                        </a>
                                    </li>

                                    <li class="flex gap-3" data-aos="fade-up" data-aos-delay="300">
                                        <span
                                            class="w-9 h-9 rounded-full bg-amber-500/90 text-rose-900 flex items-center justify-center shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M12.001 2c5.523 0 10 4.477 10 10s-4.477 10-10 10a9.95 9.95 0 0 1-5.03-1.355L2.005 22l1.352-4.968A9.95 9.95 0 0 1 2.001 12c0-5.523 4.477-10 10-10M8.593 7.3l-.2.008a1 1 0 0 0-.372.1a1.3 1.3 0 0 0-.294.228c-.12.113-.188.211-.261.306A2.73 2.73 0 0 0 6.9 9.62c.002.49.13.967.33 1.413c.409.902 1.082 1.857 1.97 2.742c.214.213.424.427.65.626a9.45 9.45 0 0 0 3.84 2.046l.568.087c.185.01.37-.004.556-.013a2 2 0 0 0 .833-.231a5 5 0 0 0 .383-.22q.001.002.125-.09c.135-.1.218-.171.33-.288q.126-.13.21-.302c.078-.163.156-.474.188-.733c.024-.198.017-.306.014-.373c-.004-.107-.093-.218-.19-.265l-.582-.261s-.87-.379-1.402-.621a.5.5 0 0 0-.176-.041a.48.48 0 0 0-.378.127c-.005-.002-.072.055-.795.931a.35.35 0 0 1-.368.13a1.4 1.4 0 0 1-.191-.066c-.124-.052-.167-.072-.252-.108a6 6 0 0 1-1.575-1.003c-.126-.11-.243-.23-.363-.346a6.3 6.3 0 0 1-1.02-1.268l-.059-.095a1 1 0 0 1-.102-.205c-.038-.147.061-.265.061-.265s.243-.266.356-.41c.11-.14.203-.276.263-.373c.118-.19.155-.385.093-.536q-.42-1.026-.868-2.041c-.059-.134-.234-.23-.393-.249q-.081-.01-.162-.016a3 3 0 0 0-.403.004z" />
                                            </svg>
                                        </span>
                                        <a href="https://wa.me/6282297881480" target="_blank"
                                            class="conversion text-white/90 hover:underline">0822-9788-1480</a>
                                    </li>
                                </ul>
                            </div>

                            <div data-aos="fade-up" data-aos-delay="200">
                                <p class="font-semibold mb-3">Social Links</p>
                                <ul class="space-y-3">
                                    <li class="flex items-center gap-3" data-aos="fade-up" data-aos-delay="250">
                                        <span
                                            class="w-9 h-9 rounded-full bg-amber-500/90 text-rose-900 flex items-center justify-center shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M12 9.52A2.48 2.48 0 1 0 14.48 12A2.48 2.48 0 0 0 12 9.52m9.93-2.45a6.5 6.5 0 0 0-.42-2.26a4 4 0 0 0-2.32-2.32a6.5 6.5 0 0 0-2.26-.42C15.64 2 15.26 2 12 2s-3.64 0-4.93.07a6.5 6.5 0 0 0-2.26.42a4 4 0 0 0-2.32 2.32a6.5 6.5 0 0 0-.42 2.26C2 8.36 2 8.74 2 12s0 3.64.07 4.93a6.9 6.9 0 0 0 .42 2.27a3.9 3.9 0 0 0 .91 1.4a3.9 3.9 0 0 0 1.41.91a6.5 6.5 0 0 0 2.26.42C8.36 22 8.74 22 12 22s3.64 0 4.93-.07a6.5 6.5 0 0 0 2.26-.42a3.9 3.9 0 0 0 1.41-.91a3.9 3.9 0 0 0 .91-1.4a6.6 6.6 0 0 0 .42-2.27C22 15.64 22 15.26 22 12s0-3.64-.07-4.93m-2.54 8a5.7 5.7 0 0 1-.39 1.8A3.86 3.86 0 0 1 16.87 19a5.7 5.7 0 0 1-1.81.35H8.94A5.7 5.7 0 0 1 7.13 19a3.5 3.5 0 0 1-1.31-.86A3.5 3.5 0 0 1 5 16.87a5.5 5.5 0 0 1-.34-1.81V8.94A5.5 5.5 0 0 1 5 7.13a3.5 3.5 0 0 1 .86-1.31A3.6 3.6 0 0 1 7.13 5a5.7 5.7 0 0 1 1.81-.35h6.12a5.7 5.7 0 0 1 1.81.35a3.5 3.5 0 0 1 1.31.86A3.5 3.5 0 0 1 19 7.13a5.7 5.7 0 0 1 .35 1.81V12c0 2.06.07 2.27.04 3.06Zm-1.6-7.44a2.38 2.38 0 0 0-1.41-1.41A4 4 0 0 0 15 6H9a4 4 0 0 0-1.38.26a2.38 2.38 0 0 0-1.41 1.36A4.3 4.3 0 0 0 6 9v6a4.3 4.3 0 0 0 .26 1.38a2.38 2.38 0 0 0 1.41 1.41a4.3 4.3 0 0 0 1.33.26h6a4 4 0 0 0 1.38-.26a2.38 2.38 0 0 0 1.41-1.41a4 4 0 0 0 .26-1.38V9a3.8 3.8 0 0 0-.26-1.38ZM12 15.82A3.81 3.81 0 0 1 8.19 12A3.82 3.82 0 1 1 12 15.82m4-6.89a.9.9 0 0 1 0-1.79a.9.9 0 0 1 0 1.79" />
                                            </svg>
                                        </span>
                                        <a href="https://instagram.com/asadcorp" target="_blank"
                                            class="text-white/90 hover:underline">@asadcorp</a>
                                    </li>

                                    <li class="flex items-center gap-3" data-aos="fade-up" data-aos-delay="300">
                                        <span
                                            class="w-9 h-9 rounded-full bg-amber-500/90 text-rose-900 flex items-center justify-center shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95" />
                                            </svg>
                                        </span>
                                        <a href="https://www.facebook.com/people/Asad-Corporation-Indonesia/61579008007320/"
                                            class="text-white/90 hover:underline">Asad Corporation Indonesia</a>
                                    </li>

                                    <li class="flex items-center gap-3" data-aos="fade-up" data-aos-delay="350">
                                        <span
                                            class="w-9 h-9 rounded-full bg-amber-500/90 text-rose-900 flex items-center justify-center shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16">
                                                <path fill="currentColor" fill-rule="evenodd"
                                                    d="M8 14.5c.23 0 .843-.226 1.487-1.514c.306-.612.563-1.37.742-2.236H5.771c.179.866.436 1.624.742 2.236C7.157 14.274 7.77 14.5 8 14.5M5.554 9.25a14.4 14.4 0 0 1 0-2.5h4.892a14.5 14.5 0 0 1 0 2.5zm6.203 1.5c-.224 1.224-.593 2.308-1.066 3.168a6.53 6.53 0 0 0 3.2-3.168zm2.623-1.5h-2.43a16 16 0 0 0 0-2.5h2.429a6.5 6.5 0 0 1 0 2.5Zm-10.331 0H1.62a6.5 6.5 0 0 1 0-2.5h2.43a16 16 0 0 0 0 2.5Zm-1.94 1.5h2.134c.224 1.224.593 2.308 1.066 3.168a6.53 6.53 0 0 1-3.2-3.168m3.662-5.5h4.458c-.179-.866-.436-1.624-.742-2.236C8.843 1.726 8.23 1.5 8 1.5s-.843.226-1.487 1.514c-.306.612-.563 1.37-.742 2.236m5.986 0h2.134a6.53 6.53 0 0 0-3.2-3.168c.473.86.842 1.944 1.066 3.168M5.31 2.082c-.473.86-.842 1.944-1.066 3.168H2.109a6.53 6.53 0 0 1 3.2-3.168ZM8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                        <a href="https://asadcorporationindonesia.com" target="_blank"
                                            class="text-white/90 hover:underline">asadcorporationindonesia.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- KANAN: Peta -->
                        <div class="rounded-[28px] overflow-hidden ring-1 ring-white/25 shadow-lg" data-aos="fade-left"
                            data-aos-delay="150">
                            <div class="aspect-[16/9] sm:aspect-[16/12] md:aspect-[16/16]">
                                <iframe class="w-full h-full min-h-[220px] sm:min-h-[320px] md:min-h-[400px] border-0"
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                                    src="https://www.google.com/maps?q=Graha%20DLA%20Jl.%20Otto%20Iskandar%20Dinata%20392%20Bandung&output=embed"
                                    allowfullscreen aria-label="Lokasi Asad Corporation Indonesia">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ============ kursus & KEGIATAN KAMI ============ -->
        <!-- <section id="kegiatan" class="bg-neutral-100 py-16 relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <header class="mb-6">
                    <h2 class="text-3xl md:text-4xl font-bold"
                        style="font-family:'Madani', ui-sans-serif, system-ui; font-weight:700;" data-aos="fade-up"
                        data-aos-delay="0">
                        kursus &amp; KEGIATAN KAMI
                    </h2>
                    <p class="text-slate-600 mt-1" data-aos="fade-up" data-aos-delay="100">
                        Tingkatkan Kompetensi, Perluas Jaringan, dan Raih Kesuksesan Bersama Kami
                    </p>
                </header>

                <div class="relative isolate">
                    <button id="ev-prev"
                        class="absolute -left-5 md:-left-7 top-1/2 -translate-y-1/2 w-11 h-11 rounded-full ring-2 ring-rose-900 text-rose-900 bg-white flex items-center justify-center hover:bg-rose-900/10 z-20"
                        aria-label="Sebelumnya" data-aos="fade-right" data-aos-delay="150">
                        <svg viewBox="0 0 24 24" class="w-6 h-6" fill="none">
                            <path d="M15 6 9 12l6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>

                    <div id="ev-track"
                        class="flex gap-6 overflow-x-auto snap-x snap-mandatory scroll-smooth px-1 pb-2 -mx-1 scrollbar-none pl-16 pr-16 md:pl-20 md:pr-20"
                        aria-label="Daftar kegiatan" data-aos="fade-up" data-aos-delay="200">
                    </div>

                    <button id="ev-next"
                        class="absolute -right-5 md:-right-7 top-1/2 -translate-y-1/2 w-11 h-11 rounded-full ring-2 ring-rose-900 text-rose-900 bg-white flex items-center justify-center hover:bg-rose-900/10 z-20"
                        aria-label="Berikutnya" data-aos="fade-left" data-aos-delay="150">
                        <svg viewBox="0 0 24 24" class="w-6 h-6" fill="none">
                            <path d="M9 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
        </section> -->
        <!-- ===================== FAQ ===================== -->
        <section id="faq" class="bg-neutral-100 py-16 relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <header class="text-center mb-8">
                    <h2 class="text-3xl md:text-4xl font-bold"
                        style="font-family:'Madani', ui-sans-serif, system-ui; font-weight:700;" data-aos="fade-up">FAQ
                    </h2>
                    <p class="mt-2 text-slate-600" data-aos="fade-up" data-aos-delay="100">
                        Temukan jawaban cepat untuk pertanyaan seputar layanan dan proses kerja kami.
                    </p>
                </header>

                <!-- Grid 2 kolom -->
                <div id="faq-grid" class="grid grid-cols-1 lg:grid-cols-2 gap-5" data-aos="fade-up"
                    data-aos-delay="150">
                    <div id="faq-left" class="space-y-4"></div>
                    <div id="faq-right" class="space-y-4"></div>
                </div>
            </div>
        </section>
        <!-- ===================== Floating Whatsapp ===================== -->
        <div id="wa-btn" class="fixed bottom-24 right-7 z-50">
            <a href="https://wa.me/6282297881480?text=Halo%20admin%20ACI%2C%20saya%20dari%20website%20ingin%20bertanya%20tentang%20layanan%3A%20terbit%20buku%2C%20publish%20jurnal%2C%20percetakan%2C%20dll.%0A%0ANama%3A%20%0AKebutuhan%3A%20%0ATenggat%2FDeadline%3A%20"
                target="_blank" rel="noopener" class="conversion relative block">
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp"
                    class="w-16 h-16" />
                <!-- Badge Notifikasi -->
                <span id="wa-badge"
                    class="hidden absolute -top-1 -right-1 z-10 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full">
                    1
                </span>
            </a>
        </div>

        <!-- ===================== Notifikasi order ===================== -->
        <div id="orders-notify" class="fixed bottom-6 right-6 z-40 pointer-events-none"></div>



        <script>
        (function() {
            // ====== AUTOSLIDE: aman jika tombol ada ======
            const nextBtn =
                document.getElementById('ev-next') ||
                document.getElementById('svc-next') ||
                document.getElementById('testi-next') ||
                null;

            if (nextBtn) {
                setInterval(() => {
                    try {
                        nextBtn.click();
                    } catch (e) {}
                }, 3000);
            }
        })();
        </script>


    </main>

    <?php include 'footer.php'; ?>

    <script>
    (function() {
        const btn = document.getElementById('services-btn');
        const menu = document.getElementById('services-menu');

        function setOpen(open) {
            btn.setAttribute('aria-expanded', String(open));
            menu.classList.toggle('hidden', !open);
            if (open) {
                menu.classList.remove('pointer-events-none', 'opacity-0', 'translate-y-2');
                menu.classList.add('opacity-100', 'translate-y-0');
            } else {
                menu.classList.add('pointer-events-none', 'opacity-0', 'translate-y-2');
                menu.classList.remove('opacity-100', 'translate-y-0');
            }
        }

        btn.addEventListener('click', (e) => {
            e.stopPropagation();
            setOpen(btn.getAttribute('aria-expanded') !== 'true');
        });

        document.addEventListener('click', (e) => {
            if (!menu.contains(e.target) && !btn.contains(e.target)) setOpen(false);
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') setOpen(false);
        });
    })();
    </script>


    <!-- AOS JS (non-blocking) -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js" defer></script>
    <script>
    window.addEventListener('DOMContentLoaded', () => {
        AOS.init({
            duration: 700,
            easing: 'ease-out-cubic',
            offset: 80,
            once: true
        });
    });
    </script>

    <!-- JS lokal kamu, pakai defer semua -->
    <script src="/assets/js/toogle.js" defer></script>
    <script src="/assets/js/services.js" defer></script>
    <script src="/assets/js/testimonials-t1.js" defer></script>
    <script src="/assets/js/events.js" defer></script>
    <script src="/assets/js/faq.js" defer></script>
    <script src="/assets/js/wa.js" defer></script>
    <script src="/assets/js/order-notify.js" defer></script>

</body>