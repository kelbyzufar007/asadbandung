<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>ASAD CORPORATION — Layanan Publisher</title>
    <meta name="description"
        content="Dengan pengalaman dan jaringan luas, ASAD CORPORATION membantu Anda menerbitkan karya, mengembangkan keterampilan, dan membangun platform digital yang siap bersaing di era modern.">
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

    <!-- Preconnect: percepat DNS/TLS -->
    <link rel="preconnect" href="https://cdn.tailwindcss.com" crossorigin>
    <link rel="preconnect" href="https://res.cloudinary.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://unpkg.com" crossorigin>
    <link rel="preconnect" href="https://code.iconify.design" crossorigin>


    <!-- (Opsional) Preload versi desktop lebih tajam -->
    <link rel="preload" as="image"
        href="https://res.cloudinary.com/dhjqjn2hn/image/upload/f_auto,q_auto,w_1600/v1756699852/group1892_rn11jh.webp"
        media="(min-width:1024px)" fetchpriority="high">

    <!-- Favicon (.webp -> type harus image/webp). Hapus duplikasi favicon -->
    <link rel="icon" type="image/webp"
        href="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756103067/favicon02_arg36j.webp">

    <!-- Google Fonts: Inter (cukup sekali) -->
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Inter:wght@400..900&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400..900&display=swap">

    <!-- Tailwind CDN (tetap pakai) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- CSS kamu (jika ada) -->
    <link rel="preload" as="style" href="/assets/css/app.min.css">
    <link rel="stylesheet" href="/assets/css/app.min.css">

    <!-- AOS CSS (sekali saja, tanpa hack print) -->
    <link rel="preload" as="style" href="https://unpkg.com/aos@2.3.4/dist/aos.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">

    <!-- Iconify non-blocking -->
    <script src="https://code.iconify.design/3/3.1.1/iconify.min.js" defer></script>



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

<body> data-page="<?= basename($_SERVER['PHP_SELF']); ?>"
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KSLV8NPD" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript)  -->

    <!-- ====== Section Navbar ====== -->
    <?php include 'navbar.php'; ?>
    <!-- ====== Section End Navbar ====== -->

    <!-- Popup Modal -->
    <div id="popupModal" class="fixed inset-0 bg-black/50 flex justify-center items-start overflow-auto z-50 p-4">
        <div id="popupContent"
            class="relative bg-white rounded-2xl shadow-xl max-w-md w-full mt-16 p-6 flex flex-col items-center">

            <!-- Close Button -->
            <button id="closeBtn"
                class="absolute top-3 right-3 text-gray-500 hover:text-gray-900 font-bold text-lg">&times;</button>

            <!-- Image with link to WhatsApp -->
            <a href="https://wa.me/6282297881480?text=Halo%20Admin%20ACI%2C%20Saya%20ingin%20tau%20promo%20publikasi%20jurnal%20up%20to%2040%25%20%2B%2015%25."
                target="_blank" rel="noopener" class="conversion">
                <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/f_auto,q_auto,w_600/v1756805764/publikasi_aci_hnkfsb.webp"
                    srcset="
    https://res.cloudinary.com/dhjqjn2hn/image/upload/f_auto,q_auto,w_400/v1756805764/publikasi_aci_hnkfsb.webp 400w,
    https://res.cloudinary.com/dhjqjn2hn/image/upload/f_auto,q_auto,w_600/v1756805764/publikasi_aci_hnkfsb.webp 600w,
    https://res.cloudinary.com/dhjqjn2hn/image/upload/f_auto,q_auto,w_800/v1756805764/publikasi_aci_hnkfsb.webp 800w"
                    sizes="(max-width:640px) 90vw, 400px" width="600" height="750" alt="Promo Publikasi"
                    class="conversion w-full max-w-xs sm:max-w-sm aspect-[4/5] object-cover rounded-xl mb-5 shadow-md"
                    loading="lazy" decoding="async" />

            </a>

            <!-- Title -->
            <h3 class="text-lg sm:text-xl font-bold text-slate-900 text-center mb-3">
                Publikasi Jurnalmu Sekarang!
            </h3>

            <!-- Button Konsultasi -->
            <a href="https://wa.me/6282297881480?text=Halo%20Admin%20ACI%2C%20Saya%20ingin%20tau%20promo%20publikasi%20jurnal%20up%20to%2040%25%20%2B%2015%25."
                target="_blank" rel="noopener"
                class="conversion bg-amber-500 hover:bg-amber-400 text-rose-900 font-semibold px-6 py-3 rounded-lg transition-all">
                Konsultasi Sekarang
            </a>
        </div>
    </div>


    <!-- HERO -->
    <section id="hero" class="relative py-8 sm:py-12 md:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8
            grid grid-cols-1 lg:grid-cols-12 items-center
            gap-8 lg:gap-6 xl:gap-8">
            <!-- KIRI -->
            <div class="lg:col-span-7 space-y-5 sm:space-y-6 lg:text-left" data-aos="fade-right">
                <h1 class="text-[26px] sm:text-4xl md:text-[40px] font-extrabold leading-tight"
                    style="font-family:'Madani', ui-sans-serif, system-ui; font-weight:700;">
                    <span class="text-amber-500">"</span>
                    BUTUH PUBLIKASI JURNAL<br>
                    <span class="relative inline-block text-rose-900 pb-2 sm:pb-3">
                        CEPAT &amp; TERPERCAYA?
                        <span class="absolute left-0 bottom-0 w-full h-[5px] bg-amber-500"></span>
                    </span>
                    <span class="text-amber-500">"</span>
                </h1>

                <!-- List -->
                <ul class="space-y-4">
                    <li class="flex items-start gap-3 justify-center lg:justify-start">
                        <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756096658/icbolt_ebmg45.webp"
                            class="w-10 h-10" alt="Cepat">
                        <div>
                            <p class="font-semibold text-lg">LoA Cepat 3–5 Hari</p>
                            <p class="text-slate-600 text-sm">ACI Publisher menyediakan LoA cepat hanya 3–5 hari saja.
                            </p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3 justify-center lg:justify-start">
                        <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756096658/icpromo_xekuhf.webp"
                            class="w-10 h-10" alt="Promo">
                        <div>
                            <p class="font-semibold text-lg">Promo Menarik Publikasi Jurnal</p>
                            <p class="text-slate-600 text-sm">Kami selalu menawarkan promo menarik tiap bulannya.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3 justify-center lg:justify-start">
                        <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756096658/icpro_b3jrq4.webp"
                            class="w-10 h-10" alt="Promo">
                        <div>
                            <p class="font-semibold text-lg">Layanan Profesional</p>
                            <p class="text-slate-600 text-sm">Pelayanan profesional untuk publikasi jurnal, tepat waktu.
                            </p>
                        </div>
                    </li>

                    <li class="flex items-start gap-3 justify-center lg:justify-start">
                        <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756096659/icbook_fnvhfn.webp"
                            class="w-10 h-10" alt="Pilihan">
                        <div>
                            <p class="font-semibold text-lg">Banyak Pilihan Jurnal</p>
                            <p class="text-slate-600 text-sm">Tidak perlu khawatir soal ketersediaan; tanya admin kami,
                                lengkap!</p>
                        </div>
                    </li>
                </ul>

                <!-- CTA -->
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center lg:justify-start">
                    <a href="https://wa.me/6282297881480?text=Hallo%20admin%20ACI%2C%20saya%20ingin%20konsultasi%20Publisher%20Jurnal."
                        target="_blank" rel="noopener"
                        class="conversion inline-flex items-center justify-center gap-2 px-6 py-3 rounded-lg bg-amber-500 text-rose-900 font-semibold hover:bg-amber-400 w-full sm:w-auto">
                        Konsultasi Publikasi Jurnal Sekarang
                    </a>
                </div>
            </div>

            <!-- KANAN -->
            <div class="lg:col-span-5 flex justify-center lg:justify-start" data-aos="fade-left">
                <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1759394566/Group_1876_sxuhoe.png"
                    srcset="
    https://res.cloudinary.com/dhjqjn2hn/image/upload/f_auto,q_auto,w_480/v1756699852/v1759394566/Group_1876_sxuhoe.png 480w,
    https://res.cloudinary.com/dhjqjn2hn/image/upload/v1759394566/Group_1876_sxuhoe.png 768w,
    https://res.cloudinary.com/dhjqjn2hn/image/upload/f_auto,q_auto,w_1200/v1756699852/v1759394566/Group_1876_sxuhoe.png 1200w"
                    sizes="(max-width:1024px) 90vw, 40vw" width="768" height="768" alt="Brand Ambassador"
                    class="w-full max-w-[360px] sm:max-w-[340px] md:max-w-[420px] h-auto object-contain lg:-ml-6 xl:-ml-10"
                    fetchpriority="high" decoding="async" />

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

    <!-- PILIHAN LAYANAN PUBLIKASI -->
    <svg aria-hidden="true" class="hidden">
        <symbol id="icon-check" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="9" fill="none" stroke="currentColor" stroke-width="1.6"></circle>
            <path d="M8.5 12.5l2.3 2.2 4.7-5.2" fill="none" stroke="currentColor" stroke-linecap="round"
                stroke-linejoin="round" stroke-width="1.8" />
        </symbol>
    </svg>

    <section id="paket" class="relative bg-gradient-to-br from-rose-900 to-rose-600 py-16">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <!-- Heading -->
            <header class="text-center text-white">
                <h2 class="text-3xl md:text-4xl font-extrabold"
                    style="font-family:'Madani', ui-sans-serif, system-ui; font-weight:700;" data-aos="fade-up">
                    Pilihan Layanan Publikasi
                </h2>
                <p class="mt-2 text-white/80" data-aos="fade-up" data-aos-delay="100">
                    ACI menyediakan layanan pendampingan publikasi jurnal dari mulai templating sampai dengan naskah
                    berhasil terbit.
                </p>
            </header>

            <!-- Cards -->
            <div class="mt-10 grid grid-cols-1 gap-7 md:grid-cols-2 lg:grid-cols-3">
                <!-- Card helper classes -->
                <!-- .card : wrapper artikel -->
                <!-- .li   : item list dengan ikon -->
                <style>
                .li {
                    display: flex;
                    gap: .75rem
                }

                .li .i {
                    width: 1.25rem;
                    height: 1.25rem;
                    margin-top: .125rem;
                    color: #f59e0b
                }

                /* text-amber-500 */
                </style>

                <!-- KARTU 1 – NASIONAL -->
                <article class="card bg-white rounded-[26px] p-6 md:p-8 shadow-xl ring-1 ring-black/5"
                    data-aos="zoom-in" data-aos-delay="0">
                    <div class="flex items-center justify-center">
                        <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756097045/sinta_tm0lxu.webp"
                            alt="Sinta" class="h-24 object-contain" loading="lazy">
                    </div>

                    <h3 class="mt-5 text-xl md:text-[22px] font-extrabold text-slate-900">
                        Publikasi Jurnal Nasional
                    </h3>

                    <ul class="mt-4 space-y-3 text-slate-700">
                        <li class="li"><svg class="i">
                                <use href="#icon-check" />
                            </svg><span>Penyesuaian Template Jurnal</span></li>
                        <li class="li"><svg class="i">
                                <use href="#icon-check" />
                            </svg><span>Translate</span></li>
                        <li class="li"><svg class="i">
                                <use href="#icon-check" />
                            </svg><span>Gratis Proofreading</span></li>
                        <li class="li"><svg class="i">
                                <use href="#icon-check" />
                            </svg><span>Gratis Mendeley</span></li>
                        <li class="li"><svg class="i">
                                <use href="#icon-check" />
                            </svg><span>Plagiarisme Checker (Turnitin.id)</span></li>
                        <li class="li"><svg class="i">
                                <use href="#icon-check" />
                            </svg><span>Revisi Minor &amp; Mayor</span></li>
                        <li class="li"><svg class="i">
                                <use href="#icon-check" />
                            </svg><span>Fast track Review</span></li>
                        <li class="li"><svg class="i">
                                <use href="#icon-check" />
                            </svg><span>Fast track LoA Resmi</span></li>
                        <li class="li"><svg class="i">
                                <use href="#icon-check" />
                            </svg><span>Alur Jurnal</span></li>
                        <li class="li"><svg class="i">
                                <use href="#icon-check" />
                            </svg><span>Jaminan Publish</span></li>
                        <li class="li"><svg class="i">
                                <use href="#icon-check" />
                            </svg><span>Garansi 100%</span></li>
                        <li class="li"><svg class="i">
                                <use href="#icon-check" />
                            </svg><span>Translate</span></li>
                    </ul>

                    <a href="https://wa.me/6282297881480?text=Hallo%20admin%20ACI%2C%20saya%20ingin%20submit%20artikel%20untuk%20Publikasi%20Jurnal%20Nasional%20(Sinta)."
                        target="_blank" rel="noopener"
                        class="conversion mt-6 inline-flex w-full items-center justify-center rounded-lg bg-amber-500 py-3 font-semibold text-rose-900 hover:bg-amber-400">
                        Submit Artikel Sekarang
                    </a>
                </article>

                <!-- KARTU 2 – INTERNASIONAL -->
                <article class="card bg-white rounded-[26px] p-6 md:p-8 shadow-xl ring-1 ring-black/5"
                    data-aos="zoom-in" data-aos-delay="100">
                    <div class="flex items-center justify-center">
                        <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756097046/scopus_gbrxcb.webp"
                            alt="Scopus" class="h-24 object-contain" loading="lazy">
                    </div>

                    <h3 class="mt-5 text-xl md:text-[22px] font-extrabold text-slate-900 text-nowrap">
                        Publikasi Jurnal Internasional
                    </h3>

                    <ul class="mt-4 space-y-3 text-slate-700">
                        <li class="li"><svg class="i">
                                <use href="#icon-check" />
                            </svg><span>Penyesuaian Template Jurnal</span></li>
                        <li class="li"><svg class="i">
                                <use href="#icon-check" />
                            </svg><span>Translate</span></li>
                        <li class="li"><svg class="i">
                                <use href="#icon-check" />
                            </svg><span>Gratis Proofreading</span></li>
                        <li class="li"><svg class="i">
                                <use href="#icon-check" />
                            </svg><span>Gratis Mendeley</span></li>
                        <li class="li"><svg class="i">
                                <use href="#icon-check" />
                            </svg><span>Plagiarisme Checker (Turnitin.id)</span></li>
                        <li class="li"><svg class="i">
                                <use href="#icon-check" />
                            </svg><span>Revisi Minor &amp; Mayor</span></li>
                        <li class="li"><svg class="i">
                                <use href="#icon-check" />
                            </svg><span>Fast track Review</span></li>
                        <li class="li"><svg class="i">
                                <use href="#icon-check" />
                            </svg><span>Fast track LoA Resmi</span></li>
                        <li class="li"><svg class="i">
                                <use href="#icon-check" />
                            </svg><span>Alur Jurnal</span></li>
                        <li class="li"><svg class="i">
                                <use href="#icon-check" />
                            </svg><span>Jaminan Publish</span></li>
                        <li class="li"><svg class="i">
                                <use href="#icon-check" />
                            </svg><span>Garansi 100%</span></li>
                        <li class="li"><svg class="i">
                                <use href="#icon-check" />
                            </svg><span>Translate</span></li>
                    </ul>

                    <a href="https://wa.me/6282297881480?text=Hallo%20admin%20ACI%2C%20saya%20ingin%20submit%20artikel%20untuk%20Publikasi%20Jurnal%20Internasional%20(Scopus%2FDOAJ%2FIndex%20Copernicus)."
                        target="_blank" rel="noopener"
                        class="conversion mt-6 inline-flex w-full items-center justify-center rounded-lg bg-amber-500 py-3 font-semibold text-rose-900 hover:bg-amber-400">
                        Submit Artikel Sekarang
                    </a>
                </article>

                <!-- KARTU 3 – NON SINTA -->
                <article class="card bg-white rounded-[26px] p-6 md:p-8 shadow-xl ring-1 ring-black/5"
                    data-aos="zoom-in" data-aos-delay="200">
                    <div class="flex items-center justify-center">
                        <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756097045/issni_pg4dak.webp"
                            alt="ISSN" class="h-24 object-contain" loading="lazy">
                    </div>

                    <h3 class="mt-5 text-xl md:text-[22px] font-extrabold text-slate-900">
                        Publikasi Jurnal Non Sinta
                    </h3>

                    <ul class="mt-4 space-y-3 text-slate-700">
                        <li class="li"><svg class="i">
                                <use href="#icon-check" />
                            </svg><span>Penyesuaian Template Jurnal</span></li>
                        <li class="li"><svg class="i">
                                <use href="#icon-check" />
                            </svg><span>Translate</span></li>
                        <li class="li"><svg class="i">
                                <use href="#icon-check" />
                            </svg><span>Gratis Proofreading</span></li>
                        <li class="li"><svg class="i">
                                <use href="#icon-check" />
                            </svg><span>Gratis Mendeley</span></li>
                        <li class="li"><svg class="i">
                                <use href="#icon-check" />
                            </svg><span>Plagiarisme Checker (Turnitin.id)</span></li>
                        <li class="li"><svg class="i">
                                <use href="#icon-check" />
                            </svg><span>Revisi Minor &amp; Mayor</span></li>
                        <li class="li"><svg class="i">
                                <use href="#icon-check" />
                            </svg><span>Fast track Review</span></li>
                        <li class="li"><svg class="i">
                                <use href="#icon-check" />
                            </svg><span>Fast track LoA Resmi</span></li>
                        <li class="li"><svg class="i">
                                <use href="#icon-check" />
                            </svg><span>Alur Jurnal</span></li>
                        <li class="li"><svg class="i">
                                <use href="#icon-check" />
                            </svg><span>Jaminan Publish</span></li>
                        <li class="li"><svg class="i">
                                <use href="#icon-check" />
                            </svg><span>Garansi 100%</span></li>
                        <li class="li"><svg class="i">
                                <use href="#icon-check" />
                            </svg><span>Translate</span></li>
                    </ul>

                    <a href="https://wa.me/6282297881480?text=Hallo%20admin%20ACI%2C%20saya%20ingin%20submit%20artikel%20untuk%20Publikasi%20Jurnal%20Non%20Sinta%20(ISSN%2FGoogle%20Scholar%2FBASE)."
                        target="_blank" rel="noopener"
                        class="conversion mt-6 inline-flex w-full items-center justify-center rounded-lg bg-amber-500 py-3 font-semibold text-rose-900 hover:bg-amber-400">
                        Submit Artikel Sekarang
                    </a>
                </article>
            </div>
        </div>
    </section>

    <!-- ALASAN ACI -->
    <section id="why" class="py-16">
        <div class="max-w-7xl mx-auto px-6 mb-16 lg:px-8">
            <h2 class="text-3xl md:text-4xl font-extrabold leading-snug text-center"
                style="font-family:'Madani', ui-sans-serif, system-ui; font-weight:700;">
                Publikasi Jurnal Di ACI <span class="text-rose-700">Gak Perlu Ragu....</span>
            </h2>
        </div>

        <div class=" max-w-7xl mx-auto px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <!-- KIRI: pakai frame aspect agar shape & image selalu klop -->
            <div class="lg:col-span-5" data-aos="fade-right">
                <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756093672/legal_xpjmpn.webp"
                    alt="Legalitas ACI" class="mx-auto w-full max-w-[480px] h-auto object-contain drop-shadow-xl"
                    loading="lazy">
            </div>


            <!-- KANAN -->
            <div class="lg:col-span-7 space-y-8 text-justify" data-aos="fade-left">
                <div class="flex gap-4 justify-center lg:justify-start" data-aos="fade-up" data-aos-delay="50">
                    <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756094060/emblem_oletef.webp"
                        class="w-12 h-12 md:w-14 md:h-14" alt="">
                    <div>
                        <h3 class="text-lg md:text-xl font-extrabold text-slate-900">ACI adalah Publisher Resmi
                            Berlegalitas</h3>
                        <p class="text-slate-700">
                            Asad Corporation Indonesia merupakan lembaga profesional dalam publikasi jurnal
                            yang memiliki legalitas perusahaan resmi dengan NIB
                            <span class="underline decoration-dotted">1103220012668</span>.
                        </p>
                    </div>
                </div>

                <div class="flex gap-4 justify-center lg:justify-start" data-aos="fade-up" data-aos-delay="150">
                    <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756094063/hand_x0w3b7.webp"
                        class="w-12 h-12 md:w-14 md:h-14" alt="">
                    <div>
                        <h3 class="text-lg md:text-xl font-extrabold text-slate-900">Garansi Uang Kembali</h3>
                        <p class="text-slate-700">Jika perjanjian di MoU tidak terpenuhi maka customer berhak menerima
                            refund hingga 100%.</p>
                    </div>
                </div>

                <div class="flex gap-4 justify-center lg:justify-start" data-aos="fade-up" data-aos-delay="250">
                    <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756094058/person_u9e6l3.webp"
                        class="w-12 h-12 md:w-14 md:h-14" alt="">
                    <div>
                        <h3 class="text-lg md:text-xl font-extrabold text-slate-900">Banyak Author telah Publish Jurnal
                            di ACI</h3>
                        <p class="text-slate-700">Ribuan penulis telah mempercayakan artikelnya untuk publish di ACI —
                            ulasan positif sudah diterima dari banyak klien.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BUKTI KEPUASAN CUSTOMER -->
    <section id="testimoni" class=" bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">

            <!-- Judul -->
            <header class="text-center mb-8">
                <h2 class="text-3xl md:text-4xl font-extrabold"
                    style="font-family:'Madani', ui-sans-serif, system-ui; font-weight:700;" data-aos="fade-up">
                    Bukti <span class="text-rose-900">Kepuasan Customer</span>
                </h2>
                <p class="mt-2 text-slate-600" data-aos="fade-up" data-aos-delay="100">
                    Lihat betapa puasnya pelanggan dengan pelayanan profesional dari tim ACI
                </p>
            </header>

            <!-- Carousel -->
            <div class="relative" data-aos="fade-up" data-aos-delay="150">
                <!-- tombol kiri -->
                <button id="tst-prev"
                    class="absolute -left-4 sm:-left-6 top-1/2 -translate-y-1/2 w-12 h-12 rounded-full ring-2 ring-rose-900 text-rose-900 bg-white flex items-center justify-center hover:bg-rose-900/10 z-20"
                    aria-label="Sebelumnya">
                    <svg viewBox="0 0 24 24" class="w-6 h-6" fill="none">
                        <path d="M15 6 9 12l6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>

                <!-- track -->
                <div id="tst-track"
                    class="flex gap-6 overflow-x-auto snap-x snap-mandatory scroll-smooth px-4 sm:px-1 pb-2 -mx-4 sm:-mx-1 scrollbar-none">
                    <!-- slide akan di-inject JS -->
                </div>

                <!-- tombol kanan -->
                <button id="tst-next"
                    class="absolute -right-4 sm:-right-6 top-1/2 -translate-y-1/2 w-12 h-12 rounded-full ring-2 ring-rose-900 text-rose-900 bg-white flex items-center justify-center hover:bg-rose-900/10 z-20"
                    aria-label="Berikutnya">
                    <svg viewBox="0 0 24 24" class="w-6 h-6" fill="none">
                        <path d="M9 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>

            <!-- STAT -->
            <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                <!-- 1 -->
                <div class="rounded-2xl bg-white border-[3px] border-amber-400 amber-glow px-8 py-6 text-center">
                    <div class="text-3xl md:text-4xl font-extrabold text-rose-900">
                        <span class="js-count" data-target="4760">0</span><span>+</span>
                    </div>
                    <p class="mt-1 text-slate-700">Author</p>
                </div>

                <!-- 2 -->
                <div class="rounded-2xl bg-white border-[3px] border-amber-400 amber-glow px-8 py-6 text-center">
                    <div class="text-3xl md:text-4xl font-extrabold text-rose-900">
                        <span class="js-count" data-target="4800">0</span><span>+</span>
                    </div>
                    <p class="mt-1 text-slate-700">Artikel Terbit</p>
                </div>

                <!-- 3 -->
                <div class="rounded-2xl bg-white border-[3px] border-amber-400 amber-glow px-8 py-6 text-center">
                    <div class="text-3xl md:text-4xl font-extrabold text-rose-900">
                        <span class="js-count" data-target="5">0</span><span>+ Tahun</span>
                    </div>
                    <p class="mt-1 text-slate-700">Dipercaya selama</p>
                </div>

                <!-- 4 -->
                <div class="rounded-2xl bg-white border-[3px] border-amber-400 amber-glow px-8 py-6 text-center">
                    <div class="text-3xl md:text-4xl font-extrabold text-rose-900">
                        <span class="js-count" data-target="293">0</span><span>+</span>
                    </div>
                    <p class="mt-1 text-slate-700">Jurnal Ilmiah</p>
                </div>
            </div>

        </div>
    </section>

    <!-- PRODUK KAMI -->
    <section id="produk" class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <header class="text-center my-10">
                <h2 class="text-3xl md:text-4xl font-extrabold"
                    style="font-family:'Madani', ui-sans-serif, system-ui; font-weight:700;" data-aos="fade-up">Produk
                    Kami</h2>
            </header>

            <!-- WRAPPER -->
            <div class="relative" data-aos="fade-up" data-aos-delay="100">
                <!-- tombol kiri -->
                <button id="prod-prev"
                    class="absolute -left-4 sm:-left-6 top-1/2 -translate-y-1/2 w-11 h-11 rounded-full ring-2 ring-rose-900 text-rose-900 bg-white flex items-center justify-center hover:bg-rose-900/10 z-20"
                    aria-label="Sebelumnya">
                    <svg viewBox="0 0 24 24" class="w-6 h-6" fill="none">
                        <path d="M15 6 9 12l6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>

                <!-- TRACK -->
                <div id="prod-track"
                    class="flex gap-6 overflow-x-auto snap-x snap-mandatory scroll-smooth pb-2 -mx-2 px-2 lg:px-0 scrollbar-none"
                    aria-label="Daftar produk">
                    <!-- slide akan di-inject via JS -->
                </div>

                <!-- tombol kanan -->
                <button id="prod-next"
                    class="absolute -right-4 sm:-right-6 top-1/2 -translate-y-1/2 w-11 h-11 rounded-full ring-2 ring-rose-900 text-rose-900 bg-white flex items-center justify-center hover:bg-rose-900/10 z-20"
                    aria-label="Berikutnya">
                    <svg viewBox="0 0 24 24" class="w-6 h-6" fill="none">
                        <path d="M9 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>

            <!-- DOTS -->
            <div id="prod-dots" class="mt-6 flex justify-center gap-2"></div>
        </div>
    </section>

    <!-- (Opsional) sembunyikan scrollbar horizontal -->
    <style>
    .scrollbar-none {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    .scrollbar-none::-webkit-scrollbar {
        display: none;
    }
    </style>




    <!-- ===================== FAQ ===================== -->
    <section id="faq" class="bg-neutral-100 py-16">
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
            target="_blank" rel="noopener" class="conversion conversion relative block">
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

    <script src="assets/js/toogle.js" defer></script>
    <script src="assets/js/popup.js" defer></script>
    <script src="assets/js/clients-marquee.js" defer></script>
    <script src="assets/js/testimonials-t2.js" defer></script>
    <script src="assets/js/products-slider.js" defer></script>
    <script src="assets/js/faq.js" defer></script>
    <script src="assets/js/wa.js" defer></script>
    <script src="assets/js/order-notify.js" defer></script>


</body>