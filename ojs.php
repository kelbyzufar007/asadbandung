<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>ASAD CORPORATION — Setup & Manajemen OJS Terpercaya</title>
    <meta name="description"
        content="Implementasi OJS, indexing, template jurnal, workflow editorial, pelatihan editor & reviewer. Tingkatkan visibilitas dan kredibilitas jurnal Anda.">
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

    <link rel="icon" type="image/svg+xml"
        href="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756103067/favicon02_arg36j.webp">

    <!-- CSS kamu (biarkan di atas Tailwind CDN tidak masalah) -->
    <link rel="preload" as="style" href="/assets/css/app.min.css">
    <link rel="stylesheet" href="/assets/css/app.min.css">


    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <style>
    html,
    body {
        overflow-x: hidden
    }

    .scrollbar-none::-webkit-scrollbar {
        display: none
    }

    .scrollbar-none {
        -ms-overflow-style: none;
        scrollbar-width: none
    }
    </style>

    <!-- Swiper CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Tailwind via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Icondy via CDN -->
    <script src="https://code.iconify.design/3/3.1.1/iconify.min.js"></script>

    <!-- AOS via CDN -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">

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

<body class="antialiased bg-white text-gray-800 min-h-screen flex flex-col overflow-x-hidden"
    data-page="<?= basename($_SERVER['PHP_SELF']); ?>">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KSLV8NPD" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- ====== Section Navbar ====== -->
    <?php include 'navbar.php'; ?>
    <!-- ====== Section End Navbar ====== -->


    <!-- ====== Section 

    <main class="flex-1">
        <!-- ========== HERO OJS ========== -->
    <section id="hero-ojs" class="relative bg-white py-12 sm:py-16 lg:py-20">
        <div
            class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-6 grid grid-cols-1 lg:grid-cols-12 items-center gap-6 lg:gap-8">

            <!-- Left -->
            <div class="lg:col-span-6 space-y-5" data-aos="fade-right">
                <h2 class="leading-tight">
                    <span
                        class="relative inline-block pb-2 text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900"
                        style="font-family:'Madani', ui-sans-serif, system-ui; font-weight:800;">
                        BUAT DAN KELOLA WEB JURNAL ANDA BERSAMA
                        <span class="text-rose-900">ASAD CORP</span>
                        <span class="absolute left-0 bottom-0 h-[5px] w-full bg-amber-500"></span>
                    </span>
                </h2>

                <p class="text-slate-700" data-aos="fade-right" data-aos-delay="100">
                    Jasa Pembuatan OJS Profesional dan Siap Pakai &amp; Sesuai Standar Akreditasi SINTA.
                </p>

                <!-- Stat -->
                <div class="flex items-center gap-2" data-aos="fade-right" data-aos-delay="180">
                    <img src="https://cdn-icons-png.flaticon.com/512/833/833472.png" alt="icon" class="w-12 h-12" />
                    <div class="flex items-center gap-2">
                        <div class="flex items-baseline">
                            <!-- w tetap + tabular numbers + sedikit margin-negatif agar ekstra rapat -->
                            <span
                                class="inline-block -ml-1 w-[6ch] text-right tabular-nums text-4xl md:text-5xl font-extrabold leading-none tracking-tight text-[#6b0000]"
                                data-countup="2187" data-duration="1600">0</span>
                            <span
                                class="ml-1 -translate-y-1 inline-block text-xl md:text-2xl font-extrabold leading-none text-[#6b0000]">+</span>
                        </div>
                        <div class="leading-tight">
                            <p class="text-lg md:text-xl font-extrabold text-[#6b0000]">Instansi Telah</p>
                            <p class="text-lg md:text-xl font-extrabold text-[#6b0000]">Membuat OJS di ACI</p>
                        </div>
                    </div>
                </div>
                
                <!-- CTA -->
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-start" data-aos="fade-right"
                    data-aos-delay="260">
                    <a href="https://api.whatsapp.com/send/?phone=6282297881480&text=Halo%20admin%20ACI%2C%20saya%20ingin%20membuat%20OJS%20sekarang.%20Mohon%20info%20biaya%2C%20paket%2C%20dan%20langkah%20memulai.&type=phone_number&app_absent=0."
                        target="_blank" rel="noopener"
                        class="conversion inline-flex items-center justify-center gap-2 px-6 py-3 rounded-lg bg-amber-500 text-rose-900 font-semibold hover:bg-amber-400 transition-colors w-full sm:w-auto">
                        Buat OJS Sekarang
                    </a>
                </div>
            </div>

            <!-- Right -->
            <div class="lg:col-span-6 relative mt-6 lg:mt-0" data-aos="fade-left">
                <div class="relative w-full max-w-[480px] sm:max-w-[520px] mx-auto" data-aos="zoom-in"
                    data-aos-delay="120">
                    <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1757311717/head-ojs_d1caai.webp"
                        aalt="Hero" width="1200" height="700" loading="eager" decoding="async" fetchpriority="high"
                        class="w-full h-auto">
                </div>
            </div>

        </div>
    </section>


    <section id="customers" class="py-6">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="relative rounded-2xl border border-slate-200 bg-white shadow-sm
            pt-7 pb-5 overflow-visible">
                <!-- << was py-5 overflow-hidden -->

                <!-- Chip judul -->
                <span class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2
               inline-flex items-center rounded-xl border border-amber-300
               bg-amber-50 text-rose-900 text-sm font-semibold px-4 py-1">
                    Customer Kami
                </span>

                <!-- Marquee wrapper tetap hidden agar strip logo tidak keluar -->
                <div class="overflow-hidden">
                    <div id="logos-track" class="relative will-change-transform"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== SOLUSI PERMASALAHAN (3 KARTU) ========== -->
    <section class="bg-white py-12 sm:py-16">
        <div class="max-w-6xl mx-auto px-4 ">
            <!-- Heading -->
            <div class="text-center mb-8 sm:mb-10" data-aos="fade-up">
                <h2 class="text-3xl font-extrabold leading-snug text-slate-900"
                    style="font-family:'Madani', ui-sans-serif, system-ui; font-weight:700;">
                    Menjadi <span class="text-rose-900">Solusi Permasalahan</span><br class="hidden sm:block" />
                    Setiap Pengelola Jurnal
                </h2>
            </div>

            <!-- Grid -->
            <div class="grid md:grid-cols-3 ">
                <!-- Card 1 -->
                <div class="relative overflow-hidden w-full rounded-2xl p-5" data-aos="fade-up" data-aos-delay="100">
                    <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1758082996/so-c1_nrrvcc.webp" alt=""
                        loading="lazy" decoding="async" fetchpriority="low" class="w-full h-auto">
                </div>

                <!-- Card 2 -->
                <div class="relative overflow-hidden w-full rounded-2xl p-5" data-aos="fade-up" data-aos-delay="200">
                    <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1758082769/so-c2_gmafjv.webp" alt=""
                        loading="lazy" decoding="async" fetchpriority="low" class="w-full h-auto">
                </div>

                <!-- Card 3 -->
                <div class="relative overflow-hidden w-full rounded-2xl p-5" data-aos="fade-up" data-aos-delay="300">
                    <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1758082931/so-c3_r3y0g1.webp" alt=""
                        loading="lazy" decoding="async" fetchpriority="low" class="w-full h-auto">
                </div>
            </div>
        </div>
    </section>

    <!-- ========== LAYANAN LENGKAP OJS (AOS) ========== -->
    <section class="relative bg-gradient-to-b from-[#D40000] to-[#6E0000] py-12 sm:py-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-6">
            <!-- Heading -->
            <header class="text-center text-white">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold"
                    style="font-family:'Madani', ui-sans-serif, system-ui; font-weight:700;" data-aos="fade-up">
                    Layanan Lengkap Untuk Pengelolaan Jurnal Anda
                </h2>
                <p class="mt-2 text-sm sm:text-base opacity-90" data-aos="fade-up" data-aos-delay="120">
                    Mulai Dari Pembuatan, Kustomisasi, Pelatihan, Hingga Indeksasi OJS — Semua Kami Sediakan Agar
                    Jurnal Anda Siap Bersaing
                    Secara Nasional Maupun Internasional
                </p>
            </header>

            <!-- Grid Cards -->
            <div class="mt-8 grid sm:grid-cols-2 gap-5 lg:gap-6">
                <!-- Card 1 -->
                <article class="bg-white rounded-3xl shadow-[0_10px_30px_rgba(0,0,0,0.08)] p-5 sm:p-6"
                    data-aos="zoom-in" data-aos-delay="0">
                    <div class="flex items-start gap-4">
                        <div class="text-4xl leading-none select-none">
                            <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1757314114/image821_jb5oqg.webp"
                                alt="" loading="lazy" decoding="async" fetchpriority="low" class="w-full h-auto">
                        </div>
                        <div>
                            <h3 class="text-lg sm:text-xl font-extrabold text-slate-900">Pembuatan OJS</h3>
                            <p class="text-slate-600 text-sm mt-1">Membantu Anda Membangun OJS Dari Awal Hingga Siap
                                Digunakan.</p>
                        </div>
                    </div>
                </article>

                <!-- Card 2 -->
                <article class="bg-white rounded-3xl shadow-[0_10px_30px_rgba(0,0,0,0.08)] p-5 sm:p-6"
                    data-aos="zoom-in" data-aos-delay="120">
                    <div class="flex items-start gap-4">
                        <div class="text-4xl leading-none select-none">
                            <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1757314117/image822_ybxxmd.webp"
                                alt="" loading="lazy" decoding="async" fetchpriority="low" class="w-full h-auto">
                        </div>
                        <div>
                            <h3 class="text-lg sm:text-xl font-extrabold text-slate-900">Kustomisasi OJS</h3>
                            <p class="text-slate-600 text-sm mt-1">Layanan kustomisasi tampilan & fitur OJS sesuai
                                kebutuhan Anda.</p>
                        </div>
                    </div>
                </article>

                <!-- Card 3 -->
                <article class="bg-white rounded-3xl shadow-[0_10px_30px_rgba(0,0,0,0.08)] p-5 sm:p-6"
                    data-aos="zoom-in" data-aos-delay="240">
                    <div class="flex items-start gap-4">
                        <div class="text-4xl leading-none select-none">
                            <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1757314119/image823_jce9gw.webp"
                                alt="" loading="lazy" decoding="async" fetchpriority="low" class="w-full h-auto">
                        </div>
                        <div>
                            <h3 class="text-lg sm:text-xl font-extrabold text-slate-900">Pelatihan OJS</h3>
                            <p class="text-slate-600 text-sm mt-1">Pelatihan tim pengelola agar operasional OJS
                                lancar dan efektif.</p>
                        </div>
                    </div>
                </article>

                <!-- Card 4 -->
                <article class="bg-white rounded-3xl shadow-[0_10px_30px_rgba(0,0,0,0.08)] p-5 sm:p-6"
                    data-aos="zoom-in" data-aos-delay="360">
                    <div class="flex items-start gap-4">
                        <div class="text-4xl leading-none select-none">
                            <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1757314119/image823_jce9gw.webp"
                                alt="" loading="lazy" decoding="async" fetchpriority="low" class="w-full h-auto">
                        </div>
                        <div>
                            <h3 class="text-lg sm:text-xl font-extrabold text-slate-900">Indeksasi & Optimasi</h3>
                            <p class="text-slate-600 text-sm mt-1">Pendampingan optimasi dan persiapan indeksasi
                                agar jurnal siap bersaing.</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- ========== PAKET PEMBUATAN OJS ========== -->
    <section id="paket" class="bg-white py-12 sm:py-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-6">
            <!-- Heading -->
            <header class="text-center mb-8">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold leading-snug text-slate-900"
                    style="font-family:'Madani', ui-sans-serif, system-ui; font-weight:700;" data-aos="fade-up">
                    Pilih Paket Pembuatan OJS Sesuai Dengan
                    <br class="hidden sm:block" />
                    <span class="text-rose-900">Kebutuhan Anda!!</span>
                </h2>
            </header>

            <!-- Grid -->
            <div class="grid gap-6 md:grid-cols-3">

                <!-- CARD 01 -->
                <article class="rounded-3xl overflow-hidden shadow-[0_12px_30px_rgba(0,0,0,0.10)] ring-1 ring-black/5
         flex flex-col h-full" data-aos="fade-up" data-aos-delay="0">
                    <!-- Header merah full-width -->
                    <div class="bg-gradient-to-b from-[#8a0e0e] to-[#c21515] text-white text-center
              font-bold text-3xl tracking-wide py-5">
                        PAKET OJS RAJA
                    </div>

                    <!-- Body -->
                    <div class="p-5 sm:p-6 flex flex-col flex-1">
                        <ul class="space-y-2 sm:space-y-2.5 text-slate-800 text-[15px] leading-6">
                            <!-- GROUP 1 -->
                            <p class="font-bold text-[12px] tracking-wide text-slate-800 uppercase mb-2">
                                BONUS TAMBAHAN :
                            </p>
                            <ul class="space-y-2 text-sm leading-6">
                                <li class="flex items-start gap-2">
                                    <svg class="mt-[3px] w-4 h-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg>
                                    <span>Gratis Hosting & Domain (.com/.org/.ac.id/.id/.co.id) 2 TAHUN</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="mt-[3px] w-4 h-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg>
                                    <span>Storage Hosting Unlimited (Tanpa Batasan)</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="mt-[3px] w-4 h-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg>
                                    <span>Unlimited Bandwidth & Database (Tanpa Batasan)</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="mt-[3px] w-4 h-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg>
                                    <span>Unlimited Akun Email Domain (Tanpa Batasan)</span>
                                </li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Jasa Backup Database setiap bulannya selama 2 TAHUN</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Gratis Sertifikat SSL</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Instalasi OJS Versi 3 Terbaru</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Kustomisasi Pembuatan 1 Jurnal</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Gratis Theme Jurnal</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Desain Header Jurnal</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Desain Cover Jurnal</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Pengisian Navbar Jurnal</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Pengisian Informasi Jurnal</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Gratis Logo Jurnal</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Website Organisasi (company profile atau publisher)</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Free Maintenance 6 Bulan</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Batas Revisi Tampilan Web OJS 4X</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Akses Web Jurnal, Akses Website Organisasi, Akses Cpanel (Hosting),
                                        dan Email Domain Tanpa Batas</span></li>
                            </ul>

                            <!-- GROUP 2 -->
                            <p class="font-bold text-[12px] tracking-wide text-slate-800 uppercase mt-4 mb-2">
                                BONUS TAMBAHAN :
                            </p>
                            <ul class="space-y-2 text-sm leading-6">
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Pendaftaran Bantuan E-ISSN</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Pendaftaran Bantuan P-ISSN</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Pendaftaran DOI + Aktivasi (Sudah Termasuk Annually 500rb + Deposito
                                        500rb)</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Indexing Internasional Google Scholar</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Indexing Internasional Dimensions</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span><b>INDEXING INTERNASIONAL DOAJ</b></span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Indexing Nasional Garuda</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Gratis Template Artikel</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Pelatihan Pengelolaan Jurnal (Zoom Meeting)
                                    </span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Video Tutorial Pengelolaan web Jurnal
                                    </span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Modul Panduan OJS
                                    </span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Kesempatan BerAflllasl Dengan Web Jurnal Terkenal
                                    </span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span><b>Gratis Publikasi Nasional SINTA 4-5 (Hukum, Ekonomi, Teknik)</b>
                                    </span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span><b>PENDAMPINGAN AKREDITASI SINTA</b>
                                    </span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span><b>Diskon Voucher 20% Next Publikasi Jurnal +
                                            Penerbitan buku</b>
                                    </span></li>
                            </ul>


                            <!-- CTA: oranye gradien + shadow -->
                            <div class=" mt-auto pt-4 sm:pt-6 mb-4 sm:mb-0">
                                <a href="https://api.whatsapp.com/send/?phone=6282297881480&text=Halo%20admin%20ACI%2C%20saya%20ingin%20memesan%20%2APaket%20OJS%20Raja%2A%3B%20mohon%20rincian%20biaya%2C%20fasilitas%2C%20dan%20langkah%20prosesnya.&type=phone_number&app_absent=0"
                                    target="_blank" rel="noopener" class="conversion inline-flex w-full justify-center rounded-lg bg-gradient-to-b from-[#FBBF24] to-[#F59E0B]
              text-rose-900 font-semibold px-5 py-3 shadow-[0_6px_14px_rgba(245,158,11,.35)]
              hover:brightness-105 transition">
                                    Beli Paket Sekarang
                                </a>
                            </div>
                </article>

                <!-- CARD 02 -->
                <article class="rounded-3xl overflow-hidden shadow-[0_12px_30px_rgba(0,0,0,0.10)] ring-1 ring-black/5
         flex flex-col h-full" data-aos="fade-up" data-aos-delay="0">
                    <!-- Header merah full-width -->
                    <div class="bg-gradient-to-b from-[#8a0e0e] to-[#c21515] text-white text-center
              font-bold text-3xl tracking-wide py-5">
                        PAKET OJS MENTERI
                    </div>

                    <!-- Body -->
                    <div class="p-5 sm:p-6 flex flex-col flex-1">
                        <ul class="space-y-2 sm:space-y-2.5 text-slate-800 text-[15px] leading-6">
                            <!-- GROUP 1 -->
                            <p class="font-bold text-[12px] tracking-wide text-slate-800 uppercase mb-2">
                                BONUS TAMBAHAN :
                            </p>
                            <ul class="space-y-2 text-sm leading-6">
                                <li class="flex items-start gap-2">
                                    <svg class="mt-[3px] w-4 h-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg>
                                    <span>Gratis Hosting & Domain (.com/.org/.ac.id/.id/.co.id) 2 TAHUN</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="mt-[3px] w-4 h-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg>
                                    <span>Storage Hosting Unlimited (Tanpa Batasan)</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="mt-[3px] w-4 h-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg>
                                    <span>Unlimited Bandwidth & Database (Tanpa Batasan)</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="mt-[3px] w-4 h-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg>
                                    <span>Unlimited Akun Email Domain (Tanpa Batasan)</span>
                                </li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Jasa Backup Database setiap bulannya selama 2 TAHUN</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Gratis Sertifikat SSL</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Instalasi OJS Versi 3 Terbaru</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Kustomisasi Pembuatan 1 Jurnal</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Gratis Theme Jurnal</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Desain Header Jurnal</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Desain Cover Jurnal</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Pengisian Navbar Jurnal</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Pengisian Informasi Jurnal</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Gratis Logo Jurnal</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Website Organisasi (company profile atau publisher)</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g fill="#D40000">
                                            <path
                                                d="M16.396 7.757a1 1 0 0 1 0 1.415l-2.982 2.981l2.676 2.675a1 1 0 1 1-1.415 1.415L12 13.567l-2.675 2.676a1 1 0 0 1-1.415-1.415l2.676-2.675l-2.982-2.981A1 1 0 1 1 9.02 7.757L12 10.74l2.981-2.982a1 1 0 0 1 1.415 0" />
                                            <path fill-rule="evenodd"
                                                d="M4 1a3 3 0 0 0-3 3v16a3 3 0 0 0 3 3h16a3 3 0 0 0 3-3V4a3 3 0 0 0-3-3zm16 2H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Free Maintenance 6 Bulan</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Batas Revisi Tampilan Web OJS 4X</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Akses Web Jurnal, Akses Website Organisasi, Akses Cpanel (Hosting),
                                        dan Email Domain Tanpa Batas</span></li>
                            </ul>

                            <!-- GROUP 2 -->
                            <p class="font-bold text-[12px] tracking-wide text-slate-800 uppercase mt-4 mb-2">
                                BONUS TAMBAHAN :
                            </p>
                            <ul class="space-y-2 text-sm leading-6">
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Pendaftaran Bantuan E-ISSN</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Pendaftaran Bantuan P-ISSN</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Pendaftaran DOI + Aktivasi (Sudah Termasuk Annually 500rb + Deposito
                                        500rb)</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Indexing Internasional Google Scholar</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Indexing Internasional Dimensions</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g fill="#D40000">
                                            <path
                                                d="M16.396 7.757a1 1 0 0 1 0 1.415l-2.982 2.981l2.676 2.675a1 1 0 1 1-1.415 1.415L12 13.567l-2.675 2.676a1 1 0 0 1-1.415-1.415l2.676-2.675l-2.982-2.981A1 1 0 1 1 9.02 7.757L12 10.74l2.981-2.982a1 1 0 0 1 1.415 0" />
                                            <path fill-rule="evenodd"
                                                d="M4 1a3 3 0 0 0-3 3v16a3 3 0 0 0 3 3h16a3 3 0 0 0 3-3V4a3 3 0 0 0-3-3zm16 2H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span><b>INDEXING INTERNASIONAL DOAJ</b></span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Indexing Nasional Garuda</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g fill="#D40000">
                                            <path
                                                d="M16.396 7.757a1 1 0 0 1 0 1.415l-2.982 2.981l2.676 2.675a1 1 0 1 1-1.415 1.415L12 13.567l-2.675 2.676a1 1 0 0 1-1.415-1.415l2.676-2.675l-2.982-2.981A1 1 0 1 1 9.02 7.757L12 10.74l2.981-2.982a1 1 0 0 1 1.415 0" />
                                            <path fill-rule="evenodd"
                                                d="M4 1a3 3 0 0 0-3 3v16a3 3 0 0 0 3 3h16a3 3 0 0 0 3-3V4a3 3 0 0 0-3-3zm16 2H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Gratis Template Artikel</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Pelatihan Pengelolaan Jurnal (Zoom Meeting)
                                    </span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Video Tutorial Pengelolaan web Jurnal
                                    </span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Modul Panduan OJS
                                    </span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Kesempatan BerAflllasl Dengan Web Jurnal Terkenal
                                    </span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span><b>Gratis Publikasi Nasional SINTA 4-5 (Hukum, Ekonomi, Teknik)</b>
                                    </span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g fill="#D40000">
                                            <path
                                                d="M16.396 7.757a1 1 0 0 1 0 1.415l-2.982 2.981l2.676 2.675a1 1 0 1 1-1.415 1.415L12 13.567l-2.675 2.676a1 1 0 0 1-1.415-1.415l2.676-2.675l-2.982-2.981A1 1 0 1 1 9.02 7.757L12 10.74l2.981-2.982a1 1 0 0 1 1.415 0" />
                                            <path fill-rule="evenodd"
                                                d="M4 1a3 3 0 0 0-3 3v16a3 3 0 0 0 3 3h16a3 3 0 0 0 3-3V4a3 3 0 0 0-3-3zm16 2H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span><b>PENDAMPINGAN AKREDITASI SINTA</b>
                                    </span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span><b>Diskon Voucher 20% Next Publikasi Jurnal +
                                            Penerbitan buku</b>
                                    </span></li>
                            </ul>


                            <!-- CTA: oranye gradien + shadow -->
                            <div class=" mt-auto pt-4 sm:pt-6 mb-4 sm:mb-0">
                                <a href="https://api.whatsapp.com/send/?phone=6282297881480&text=Halo%20admin%20ACI%2C%20saya%20berminat%20aktivasi%20%2APaket%20OJS%20Menteri%2A%3B%20mohon%20kirim%20proposal%20harga%20dan%20estimasi%20timeline.&type=phone_number&app_absent=0"
                                    target="_blank" rel="noopener" class="conversion inline-flex w-full justify-center rounded-lg bg-gradient-to-b from-[#FBBF24] to-[#F59E0B]
              text-rose-900 font-semibold px-5 py-3 shadow-[0_6px_14px_rgba(245,158,11,.35)]
              hover:brightness-105 transition">
                                    Beli Paket Sekarang
                                </a>
                            </div>
                </article>

                <!-- CARD 01 -->
                <article class="rounded-3xl overflow-hidden shadow-[0_12px_30px_rgba(0,0,0,0.10)] ring-1 ring-black/5
         flex flex-col h-full" data-aos="fade-up" data-aos-delay="0">
                    <!-- Header merah full-width -->
                    <div class="bg-gradient-to-b from-[#8a0e0e] to-[#c21515] text-white text-center
              font-bold text-3xl tracking-wide py-5">
                        PAKET OJS RAKYAT
                    </div>

                    <!-- Body -->
                    <div class="p-5 sm:p-6 flex flex-col flex-1">
                        <ul class="space-y-2 sm:space-y-2.5 text-slate-800 text-[15px] leading-6">
                            <!-- GROUP 1 -->
                            <p class="font-bold text-[12px] tracking-wide text-slate-800 uppercase mb-2">
                                BONUS TAMBAHAN :
                            </p>
                            <ul class="space-y-2 text-sm leading-6">
                                <li class="flex items-start gap-2">
                                    <svg class="mt-[3px] w-4 h-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg>
                                    <span>Gratis Hosting & Domain (.com/.org/.ac.id/.id/.co.id) 2 TAHUN</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="mt-[3px] w-4 h-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg>
                                    <span>Storage Hosting Unlimited (Tanpa Batasan)</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="mt-[3px] w-4 h-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg>
                                    <span>Unlimited Bandwidth & Database (Tanpa Batasan)</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <svg class="mt-[3px] w-4 h-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg>
                                    <span>Unlimited Akun Email Domain (Tanpa Batasan)</span>
                                </li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Jasa Backup Database setiap bulannya selama 2 TAHUN</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Gratis Sertifikat SSL</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Instalasi OJS Versi 3 Terbaru</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Kustomisasi Pembuatan 1 Jurnal</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Gratis Theme Jurnal</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Desain Header Jurnal</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Desain Cover Jurnal</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Pengisian Navbar Jurnal</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Pengisian Informasi Jurnal</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g fill="#D40000">
                                            <path
                                                d="M16.396 7.757a1 1 0 0 1 0 1.415l-2.982 2.981l2.676 2.675a1 1 0 1 1-1.415 1.415L12 13.567l-2.675 2.676a1 1 0 0 1-1.415-1.415l2.676-2.675l-2.982-2.981A1 1 0 1 1 9.02 7.757L12 10.74l2.981-2.982a1 1 0 0 1 1.415 0" />
                                            <path fill-rule="evenodd"
                                                d="M4 1a3 3 0 0 0-3 3v16a3 3 0 0 0 3 3h16a3 3 0 0 0 3-3V4a3 3 0 0 0-3-3zm16 2H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Gratis Logo Jurnal</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g fill="#D40000">
                                            <path
                                                d="M16.396 7.757a1 1 0 0 1 0 1.415l-2.982 2.981l2.676 2.675a1 1 0 1 1-1.415 1.415L12 13.567l-2.675 2.676a1 1 0 0 1-1.415-1.415l2.676-2.675l-2.982-2.981A1 1 0 1 1 9.02 7.757L12 10.74l2.981-2.982a1 1 0 0 1 1.415 0" />
                                            <path fill-rule="evenodd"
                                                d="M4 1a3 3 0 0 0-3 3v16a3 3 0 0 0 3 3h16a3 3 0 0 0 3-3V4a3 3 0 0 0-3-3zm16 2H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Website Organisasi (company profile atau publisher)</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Free Maintenance 6 Bulan</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Batas Revisi Tampilan Web OJS 4X</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Akses Web Jurnal, Akses Website Organisasi, Akses Cpanel (Hosting),
                                        dan Email Domain Tanpa Batas</span></li>
                            </ul>

                            <!-- GROUP 2 -->
                            <p class="font-bold text-[12px] tracking-wide text-slate-800 uppercase mt-4 mb-2">
                                BONUS TAMBAHAN :
                            </p>
                            <ul class="space-y-2 text-sm leading-6">
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Pendaftaran Bantuan E-ISSN</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Pendaftaran Bantuan P-ISSN</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g fill="#D40000">
                                            <path
                                                d="M16.396 7.757a1 1 0 0 1 0 1.415l-2.982 2.981l2.676 2.675a1 1 0 1 1-1.415 1.415L12 13.567l-2.675 2.676a1 1 0 0 1-1.415-1.415l2.676-2.675l-2.982-2.981A1 1 0 1 1 9.02 7.757L12 10.74l2.981-2.982a1 1 0 0 1 1.415 0" />
                                            <path fill-rule="evenodd"
                                                d="M4 1a3 3 0 0 0-3 3v16a3 3 0 0 0 3 3h16a3 3 0 0 0 3-3V4a3 3 0 0 0-3-3zm16 2H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Pendaftaran DOI + Aktivasi (Sudah Termasuk Annually 500rb + Deposito
                                        500rb)</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g fill="#D40000">
                                            <path
                                                d="M16.396 7.757a1 1 0 0 1 0 1.415l-2.982 2.981l2.676 2.675a1 1 0 1 1-1.415 1.415L12 13.567l-2.675 2.676a1 1 0 0 1-1.415-1.415l2.676-2.675l-2.982-2.981A1 1 0 1 1 9.02 7.757L12 10.74l2.981-2.982a1 1 0 0 1 1.415 0" />
                                            <path fill-rule="evenodd"
                                                d="M4 1a3 3 0 0 0-3 3v16a3 3 0 0 0 3 3h16a3 3 0 0 0 3-3V4a3 3 0 0 0-3-3zm16 2H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Indexing Internasional Google Scholar</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g fill="#D40000">
                                            <path
                                                d="M16.396 7.757a1 1 0 0 1 0 1.415l-2.982 2.981l2.676 2.675a1 1 0 1 1-1.415 1.415L12 13.567l-2.675 2.676a1 1 0 0 1-1.415-1.415l2.676-2.675l-2.982-2.981A1 1 0 1 1 9.02 7.757L12 10.74l2.981-2.982a1 1 0 0 1 1.415 0" />
                                            <path fill-rule="evenodd"
                                                d="M4 1a3 3 0 0 0-3 3v16a3 3 0 0 0 3 3h16a3 3 0 0 0 3-3V4a3 3 0 0 0-3-3zm16 2H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Indexing Internasional Dimensions</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g fill="#D40000">
                                            <path
                                                d="M16.396 7.757a1 1 0 0 1 0 1.415l-2.982 2.981l2.676 2.675a1 1 0 1 1-1.415 1.415L12 13.567l-2.675 2.676a1 1 0 0 1-1.415-1.415l2.676-2.675l-2.982-2.981A1 1 0 1 1 9.02 7.757L12 10.74l2.981-2.982a1 1 0 0 1 1.415 0" />
                                            <path fill-rule="evenodd"
                                                d="M4 1a3 3 0 0 0-3 3v16a3 3 0 0 0 3 3h16a3 3 0 0 0 3-3V4a3 3 0 0 0-3-3zm16 2H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span><b>INDEXING INTERNASIONAL DOAJ</b></span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g fill="#D40000">
                                            <path
                                                d="M16.396 7.757a1 1 0 0 1 0 1.415l-2.982 2.981l2.676 2.675a1 1 0 1 1-1.415 1.415L12 13.567l-2.675 2.676a1 1 0 0 1-1.415-1.415l2.676-2.675l-2.982-2.981A1 1 0 1 1 9.02 7.757L12 10.74l2.981-2.982a1 1 0 0 1 1.415 0" />
                                            <path fill-rule="evenodd"
                                                d="M4 1a3 3 0 0 0-3 3v16a3 3 0 0 0 3 3h16a3 3 0 0 0 3-3V4a3 3 0 0 0-3-3zm16 2H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Indexing Nasional Garuda</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g fill="#D40000">
                                            <path
                                                d="M16.396 7.757a1 1 0 0 1 0 1.415l-2.982 2.981l2.676 2.675a1 1 0 1 1-1.415 1.415L12 13.567l-2.675 2.676a1 1 0 0 1-1.415-1.415l2.676-2.675l-2.982-2.981A1 1 0 1 1 9.02 7.757L12 10.74l2.981-2.982a1 1 0 0 1 1.415 0" />
                                            <path fill-rule="evenodd"
                                                d="M4 1a3 3 0 0 0-3 3v16a3 3 0 0 0 3 3h16a3 3 0 0 0 3-3V4a3 3 0 0 0-3-3zm16 2H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Gratis Template Artikel</span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g fill="#D40000">
                                            <path
                                                d="M16.396 7.757a1 1 0 0 1 0 1.415l-2.982 2.981l2.676 2.675a1 1 0 1 1-1.415 1.415L12 13.567l-2.675 2.676a1 1 0 0 1-1.415-1.415l2.676-2.675l-2.982-2.981A1 1 0 1 1 9.02 7.757L12 10.74l2.981-2.982a1 1 0 0 1 1.415 0" />
                                            <path fill-rule="evenodd"
                                                d="M4 1a3 3 0 0 0-3 3v16a3 3 0 0 0 3 3h16a3 3 0 0 0 3-3V4a3 3 0 0 0-3-3zm16 2H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Pelatihan Pengelolaan Jurnal (Zoom Meeting)
                                    </span></li>
                                <li class="flex items-start gap-2">
                                    <svg class="mt-[3px] w-4 h-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <g fill="#22c55e">
                                            <path
                                                d="M10.243 16.314L6 12.07l1.414-1.414l2.829 2.828l5.656-5.657l1.415 1.415z" />
                                            <path fill-rule="evenodd"
                                                d="M1 5a4 4 0 0 1 4-4h14a4 4 0 0 1 4 4v14a4 4 0 0 1-4 4H5a4 4 0 0 1-4-4zm4-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Video Tutorial Pengelolaan web Jurnal
                                    </span>
                                </li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g fill="#D40000">
                                            <path
                                                d="M16.396 7.757a1 1 0 0 1 0 1.415l-2.982 2.981l2.676 2.675a1 1 0 1 1-1.415 1.415L12 13.567l-2.675 2.676a1 1 0 0 1-1.415-1.415l2.676-2.675l-2.982-2.981A1 1 0 1 1 9.02 7.757L12 10.74l2.981-2.982a1 1 0 0 1 1.415 0" />
                                            <path fill-rule="evenodd"
                                                d="M4 1a3 3 0 0 0-3 3v16a3 3 0 0 0 3 3h16a3 3 0 0 0 3-3V4a3 3 0 0 0-3-3zm16 2H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Modul Panduan OJS
                                    </span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g fill="#D40000">
                                            <path
                                                d="M16.396 7.757a1 1 0 0 1 0 1.415l-2.982 2.981l2.676 2.675a1 1 0 1 1-1.415 1.415L12 13.567l-2.675 2.676a1 1 0 0 1-1.415-1.415l2.676-2.675l-2.982-2.981A1 1 0 1 1 9.02 7.757L12 10.74l2.981-2.982a1 1 0 0 1 1.415 0" />
                                            <path fill-rule="evenodd"
                                                d="M4 1a3 3 0 0 0-3 3v16a3 3 0 0 0 3 3h16a3 3 0 0 0 3-3V4a3 3 0 0 0-3-3zm16 2H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span>Kesempatan BerAflllasl Dengan Web Jurnal Terkenal
                                    </span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g fill="#D40000">
                                            <path
                                                d="M16.396 7.757a1 1 0 0 1 0 1.415l-2.982 2.981l2.676 2.675a1 1 0 1 1-1.415 1.415L12 13.567l-2.675 2.676a1 1 0 0 1-1.415-1.415l2.676-2.675l-2.982-2.981A1 1 0 1 1 9.02 7.757L12 10.74l2.981-2.982a1 1 0 0 1 1.415 0" />
                                            <path fill-rule="evenodd"
                                                d="M4 1a3 3 0 0 0-3 3v16a3 3 0 0 0 3 3h16a3 3 0 0 0 3-3V4a3 3 0 0 0-3-3zm16 2H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span><b>Gratis Publikasi Nasional SINTA 4-5 (Hukum, Ekonomi, Teknik)</b>
                                    </span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g fill="#D40000">
                                            <path
                                                d="M16.396 7.757a1 1 0 0 1 0 1.415l-2.982 2.981l2.676 2.675a1 1 0 1 1-1.415 1.415L12 13.567l-2.675 2.676a1 1 0 0 1-1.415-1.415l2.676-2.675l-2.982-2.981A1 1 0 1 1 9.02 7.757L12 10.74l2.981-2.982a1 1 0 0 1 1.415 0" />
                                            <path fill-rule="evenodd"
                                                d="M4 1a3 3 0 0 0-3 3v16a3 3 0 0 0 3 3h16a3 3 0 0 0 3-3V4a3 3 0 0 0-3-3zm16 2H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span><b>PENDAMPINGAN AKREDITASI SINTA</b>
                                    </span></li>
                                <li class="flex items-start gap-2"><svg class="mt-[3px] w-4 h-4 flex-shrink-0"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <g fill="#D40000">
                                            <path
                                                d="M16.396 7.757a1 1 0 0 1 0 1.415l-2.982 2.981l2.676 2.675a1 1 0 1 1-1.415 1.415L12 13.567l-2.675 2.676a1 1 0 0 1-1.415-1.415l2.676-2.675l-2.982-2.981A1 1 0 1 1 9.02 7.757L12 10.74l2.981-2.982a1 1 0 0 1 1.415 0" />
                                            <path fill-rule="evenodd"
                                                d="M4 1a3 3 0 0 0-3 3v16a3 3 0 0 0 3 3h16a3 3 0 0 0 3-3V4a3 3 0 0 0-3-3zm16 2H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1"
                                                clip-rule="evenodd" />
                                        </g>
                                    </svg><span><b>Diskon Voucher 20% Next Publikasi Jurnal +
                                            Penerbitan buku</b>
                                    </span></li>
                            </ul>


                            <!-- CTA: oranye gradien + shadow -->
                            <div class=" mt-auto pt-4 sm:pt-6 mb-4 sm:mb-0">
                                <a href="https://api.whatsapp.com/send/?phone=6282297881480&text=Halo%20admin%20ACI%2C%20saya%20ingin%20menggunakan%20%2APaket%20OJS%20Rakyat%2A%3B%20mohon%20info%20detail%20paket%20dan%20cara%20memulai.&type=phone_number&app_absent=0"
                                    target="_blank" rel="noopener" class="conversion inline-flex w-full justify-center rounded-lg bg-gradient-to-b from-[#FBBF24] to-[#F59E0B]
              text-rose-900 font-semibold px-5 py-3 shadow-[0_6px_14px_rgba(245,158,11,.35)]
              hover:brightness-105 transition">
                                    Beli Paket Sekarang
                                </a>
                            </div>
                </article>



            </div>
        </div>
    </section>

    <!-- ====== KEUNTUNGAN EKSKLUSIF OJS (AOS) ====== -->
    <section id="why" class="bg-white py-12 sm:py-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-6">
            <!-- Heading -->
            <header class="text-center mb-8 sm:mb-10">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold leading-snug text-slate-900"
                    style="font-family:'Madani', ui-sans-serif, system-ui; font-weight:700;" data-aos="fade-up">
                    Keuntungan Eksklusif Pembuatan OJS Di
                    <br class="hidden sm:block">
                    Asad Corporation Yang Bisa Anda Dapatkan! <span aria-hidden="true">🚀</span>
                </h2>
            </header>

            <!-- Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 lg:gap-6">
                <!-- Card 1 -->
                <article class="rounded-[24px] bg-gradient-to-b from-[#FF0000] via-[#e11b1b] to-[#6E0000] p-6 text-white
                      shadow-[0_14px_30px_rgba(0,0,0,0.18)] ring-1 ring-white/10" data-aos="zoom-in"
                    data-aos-delay="0">
                    <div class="flex flex-col items-center text-center">
                        <div class="select-none">
                            <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1757319260/image825_ecvkoz.webp"
                                alt="" loading="lazy" decoding="async" fetchpriority="low" class="w-full h-auto">
                        </div>
                        <h3 class="mt-3 text-xl font-extrabold">Bergaransi</h3>
                        <div class="w-24 border-t-2 border-dotted border-white/80 my-3"></div>
                        <p class="text-[13px] leading-5 text-white/90 max-w-[240px]">
                            Maksimalkan Keuntungan Dengan OJS Bergaransi! Percayakan Pada Tim Ahli Kami Untuk Solusi
                            Jurnal Ilmiah Yang Terpercaya.
                        </p>
                    </div>
                </article>

                <!-- Card 2 -->
                <article class="rounded-[24px] bg-gradient-to-b from-[#FF0000] via-[#e11b1b] to-[#6E0000] p-6 text-white
                      shadow-[0_14px_30px_rgba(0,0,0,0.18)] ring-1 ring-white/10" data-aos="zoom-in"
                    data-aos-delay="120">
                    <div class="flex flex-col items-center text-center">
                        <div class="select-none">
                            <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1757319262/image826_ntacze.webp"
                                alt="" loading="lazy" decoding="async" fetchpriority="low" class="w-full h-auto">
                        </div>
                        <h3 class="mt-3 text-xl font-extrabold">Terjangkau</h3>
                        <div class="w-24 border-t-2 border-dotted border-white/80 my-3"></div>
                        <p class="text-[13px] leading-5 text-white/90 max-w-[240px]">
                            Maksimalkan Keuntungan Dengan OJS Terjangkau! Percayakan Pada Tim Ahli Kami Untuk Solusi
                            Jurnal Ilmiah Yang Terpercaya.
                        </p>
                    </div>
                </article>

                <!-- Card 3 -->
                <article class="rounded-[24px] bg-gradient-to-b from-[#FF0000] via-[#e11b1b] to-[#6E0000] p-6 text-white
                      shadow-[0_14px_30px_rgba(0,0,0,0.18)] ring-1 ring-white/10" data-aos="zoom-in"
                    data-aos-delay="240">
                    <div class="flex flex-col items-center text-center">
                        <div class="select-none">
                            <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1757319266/image827_qxgp5v.webp"
                                alt="" loading="lazy" decoding="async" fetchpriority="low" class="w-full h-auto">
                        </div>
                        <h3 class="mt-3 text-xl font-extrabold">Full Service</h3>
                        <div class="w-24 border-t-2 border-dotted border-white/80 my-3"></div>
                        <p class="text-[13px] leading-5 text-white/90 max-w-[240px]">
                            Maksimalkan Keuntungan Dengan OJS Full Service! Percayakan Pada Tim Ahli Kami Untuk
                            Solusi Jurnal Ilmiah Yang Terpercaya.
                        </p>
                    </div>
                </article>

                <!-- Card 4 -->
                <article class="rounded-[24px] bg-gradient-to-b from-[#FF0000] via-[#e11b1b] to-[#6E0000] p-6 text-white
                      shadow-[0_14px_30px_rgba(0,0,0,0.18)] ring-1 ring-white/10" data-aos="zoom-in"
                    data-aos-delay="360">
                    <div class="flex flex-col items-center text-center">
                        <div class="select-none">
                            <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1757319260/image828_hrtlvu.webp"
                                alt="" loading="lazy" decoding="async" fetchpriority="low" class="w-full h-auto">
                        </div>
                        <h3 class="mt-3 text-[19px] sm:text-xl font-extrabold">
                            Gratis Konsultasi Akreditasi SINTA
                        </h3>
                        <div class="w-24 border-t-2 border-dotted border-white/80 my-3"></div>
                        <p class="text-[13px] leading-5 text-white/90 max-w-[240px]">
                            Maksimalkan Keuntungan Dengan OJS Bergaransi! Percayakan Pada Tim Ahli Kami Untuk Solusi
                            Jurnal Ilmiah Yang Terpercaya.
                        </p>
                    </div>
                </article>


            </div>
        </div>
    </section>

    <!-- ================= TESTIMONI ================= -->
    <section id="testimoni" class="bg-neutral-100 py-14 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <header class="text-center mb-8">
                <h2 class="text-3xl md:text-4xl font-bold"
                    style="font-family:'Madani', ui-sans-serif, system-ui; font-weight:700;" data-aos="fade-up">
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
                    aria-label="Sebelumnya" data-aos="fade-right">
                    <svg viewBox="0 0 24 24" class="w-6 h-6" fill="none">
                        <path d="M15 6 9 12l6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>

                <!-- SWIPER ROOT -->
                <div id="testimonials" class="swiper relative isolate" aria-label="Daftar testimoni" data-aos="fade-up">
                    <ul id="testi-track" class="swiper-wrapper pl-16 pr-16 md:pl-20 md:pr-20">
                        <!-- slides akan diinject JS, masing-masing <li class="swiper-slide ..."> -->
                    </ul>
                </div>

                <!-- tombol kanan -->
                <button id="testi-next"
                    class="absolute -right-5 md:-right-7 top-1/2 -translate-y-1/2 w-11 h-11 rounded-full ring-2 ring-rose-900 text-rose-900 bg-white flex items-center justify-center hover:bg-rose-900/10 z-20"
                    aria-label="Berikutnya" data-aos="fade-left">
                    <svg viewBox="0 0 24 24" class="w-6 h-6" fill="none">
                        <path d="M9 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>

            <!-- DOTS (pagination) -->
            <div id="testi-dots" class="mt-5 flex justify-center gap-2" data-aos="fade-up"></div>
        </div>
    </section>

    <!-- ========== JURNAL MITRA (3 KARTU) ========== -->
    <section id="produk" class="bg-white py-12 sm:py-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-6">
            <!-- Heading -->
            <header class="text-center mb-8 sm:mb-10">
                <h2 class="text-xl sm:text-2xl md:text-3xl font-extrabold text-slate-900"
                    style="font-family:'Madani', ui-sans-serif, system-ui; font-weight:700;" data-aos="fade-up">
                    Jurnal Mitra ASAD CORP yang Lolos Akreditasi SINTA
                </h2>
            </header>

            <!-- Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-stretch">
                <!-- Item 1 -->
                <article class="text-center flex flex-col items-center h-full" data-aos="fade-up" data-aos-delay="0">
                    <h3 class="text-lg font-extrabold tracking-wide text-slate-900 uppercase mb-3">Educenter</h3>

                    <!-- Laptop image -->
                    <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1757320629/image2_xlcq6i.webp"
                        alt="Educenter - tampilan jurnal"
                        class="w-[260px] sm:w-[300px] md:w-[320px] h-auto object-contain drop-shadow-xl select-none"
                        loading="lazy" />

                    <!-- CTA -->
                    <a href="https://jurnal.arkainstitute.co.id/index.php/educenter" target="_blank" rel="noopener"
                        class="mt-4 inline-flex items-center justify-center px-6 py-2 rounded-full
                  bg-amber-500 hover:bg-amber-400 text-rose-900 font-semibold shadow">
                        Kunjungi
                    </a>
                </article>

                <!-- Item 2 -->
                <article class="text-center flex flex-col items-center h-full" data-aos="fade-up" data-aos-delay="120">
                    <h3 class="text-lg font-extrabold tracking-wide text-slate-900 uppercase mb-3">Cessie</h3>

                    <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1757320633/image5_hpewh8.webp"
                        alt="Cessie - tampilan jurnal"
                        class="w-[260px] sm:w-[300px] md:w-[320px] h-auto object-contain drop-shadow-xl select-none"
                        loading="lazy" />

                    <a href="https://jurnal.arkainstitute.co.id/index.php/cessie" target="_blank" rel="noopener" class="mt-4 inline-flex items-center justify-center px-6 py-2 rounded-full
                  bg-amber-500 hover:bg-amber-400 text-rose-900 font-semibold shadow">
                        Kunjungi
                    </a>
                </article>

                <!-- Item 3 -->
                <article class="text-center flex flex-col items-center h-full" data-aos="fade-up" data-aos-delay="240">
                    <h3 class="text-lg font-extrabold tracking-wide text-slate-900 uppercase mb-3">Co-Creation</h3>

                    <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1757320628/image4_v04tu5.webp"
                        alt="Co-Creation - tampilan jurnal"
                        class="w-[260px] sm:w-[300px] md:w-[320px] h-auto object-contain drop-shadow-xl select-none"
                        loading="lazy" />

                    <a href="https://jurnal.arkainstitute.co.id/index.php/co-creation" target="_blank" rel="noopener"
                        class="mt-4 inline-flex items-center justify-center px-6 py-2 rounded-full
                  bg-amber-500 hover:bg-amber-400 text-rose-900 font-semibold shadow">
                        Kunjungi
                    </a>
                </article>
            </div>
        </div>
    </section>


    <!-- ===================== FAQ ===================== -->
    <section id="faq" class="bg-neutral-100 py-16 ">
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
            <div id="faq-grid" class="grid grid-cols-1 lg:grid-cols-2 gap-5" data-aos="fade-up" data-aos-delay="150">
                <div id="faq-left" class="space-y-4"></div>
                <div id="faq-right" class="space-y-4"></div>
            </div>
        </div>
    </section>


    <!-- ===================== Floating Whatsapp ===================== -->
    <div id="wa-btn" class="fixed bottom-24 right-7 z-50">
        <a href="https://wa.me/6282297881480?text=Halo%20admin%20ACI%2C%20saya%20dari%20website%20ingin%20bertanya%20tentang%20layanan%3A%20terbit%20buku%2C%20publish%20jurnal%2C%20percetakan%2C%20dll."
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


    </main>


    <?php include 'footer.php'; ?>

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
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const easeOutCubic = t => 1 - Math.pow(1 - t, 3);
        const nf = new Intl.NumberFormat('id-ID');

        document.querySelectorAll('[data-countup]').forEach(el => {
            const target = parseInt(el.getAttribute('data-countup'), 10) || 0;
            const duration = parseInt(el.getAttribute('data-duration') || '1500', 10);
            let started = false;

            const run = () => {
                if (started) return;
                started = true;
                const t0 = performance.now();
                const step = now => {
                    const p = Math.min((now - t0) / duration, 1);
                    const eased = easeOutCubic(p);
                    el.textContent = nf.format(Math.floor(eased * target));
                    if (p < 1) requestAnimationFrame(step);
                };
                requestAnimationFrame(step);
            };

            // Mulai saat terlihat (robust di semua browser, tidak tergantung AOS)
            const io = new IntersectionObserver(entries => {
                entries.forEach(e => {
                    if (e.isIntersecting) {
                        run();
                        io.unobserve(el);
                    }
                });
            }, {
                threshold: 0.5
            });
            io.observe(el);
        });
    });
    </script>

    <!-- JS lokal kamu, pakai defer semua -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
    <script src="assets/js/toogle.js" defer></script>
    <script src="assets/js/clients-marquee-lkp.js" defer></script>
    <script src="assets/js/testimonials-t1.js" defer></script>
    <script src="assets/js/faq.js" defer></script>
    <script src="assets/js/wa.js" defer></script>
    <script src="assets/js/order-notify.js" defer></script>
</body>