<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>ASAD CORPORATION — Penerbitan Buku: ISBN, Desain, Cetak</title>
    <meta name="description"
        content="Layanan end-to-end: kurasi naskah, editing, layout profesional, desain cover, pengurusan ISBN, hingga cetak & pemasaran. Buku Anda siap rilis.">
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


    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    <!-- CSS kamu (biarkan di atas Tailwind CDN tidak masalah) -->
    <link rel="preload" as="style" href="/assets/css/app.min.css">
    <link rel="stylesheet" href="/assets/css/app.min.css">

    <!-- Tailwind via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Icondy via CDN -->
    <script src="https://code.iconify.design/3/3.1.1/iconify.min.js"></script>

    <!-- AOS via CDN -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">

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
</head>h

<body data-page="<?= basename($_SERVER['PHP_SELF']); ?>">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KSLV8NPD" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

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
            <a href="https://wa.me/6282297881480?text=Halo%20Admin%20ACI%2C%20mau%20tau%20info%20promo%20penerbitan%20dengan%20cashback%2010%25."
                class="conversion" target="_blank" rel="noopener">
                <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756805763/Dapatkan_Cashback_10_ywql0g.webp"
                    alt="Popup Image"
                    class="w-full max-w-xs sm:max-w-sm aspect-[4/5] object-cover rounded-xl mb-5 shadow-md">
            </a>

            <!-- Title -->
            <h3 class="text-lg sm:text-xl font-bold text-slate-900 text-center mb-3">
                 Terbitkan Bukumu Sekarang!
            </h3>

            <!-- Button Konsultasi -->
            <a href="https://wa.me/6282297881480?text=Halo%20Admin%20ACI%2C%20mau%20tau%20info%20promo%20penerbitan%20dengan%20cashback%2010%25."
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
                <!-- Judul 2 baris seperti gambar -->
                <h1 class="leading-tight">
                    <span class="block text-[26px] sm:text-4xl md:text-[40px] font-extrabold text-rose-900"
                        style="font-family:'Madani', ui-sans-serif, system-ui; font-weight:700;">
                        PENERBIT &amp; PERCETAKAN
                    </span>

                    <!-- Jarak ke garis diatur dengan pb-2 / pb-3 -->
                    <span
                        class="relative inline-block text-[26px] sm:text-4xl md:text-[40px] font-extrabold text-slate-900 pb-2 sm:pb-3"
                        style="font-family:'Madani', ui-sans-serif, system-ui; font-weight:700;">
                        BUKU CEPAT BERGARANSI
                        <span class="absolute left-0 bottom-0 w-full h-[5px] bg-amber-500"></span>
                    </span>
                </h1>


                <!-- List sesuai gambar -->
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756097513/icbolt2_uxegcw.webp"
                            class="w-10 h-10" alt="Cepat">
                        <div>
                            <p class="font-semibold text-lg">Terbit Buku Hanya 10 Hari</p>
                            <p class="text-slate-600 text-sm">ACI Publisher menyediakan paket kilat terbit buku hanya 10
                                hari.</p>
                        </div>
                    </li>

                    <li class="flex items-start gap-3">
                        <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756097510/icpromo2_vfunxs.webp"
                            class="w-10 h-10" alt="Garansi">
                        <div>
                            <p class="font-semibold text-lg">Garansi 100% Terbit</p>
                            <p class="text-slate-600 text-sm">Jaminan buku terbit sesuai MoU, transparan dan terukur.
                            </p>
                        </div>
                    </li>

                    <li class="flex items-start gap-3">
                        <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756097507/icpro2_g5k5pa.webp"
                            class="w-10 h-10" alt="Dipercaya">
                        <div>
                            <p class="font-semibold text-lg">Dipercaya Ribuan Penulis</p>
                            <p class="text-slate-600 text-sm">Pelayanan profesional untuk proses publikasi buku yang
                                rapi dan tepat waktu.</p>
                        </div>
                    </li>

                    <li class="flex items-start gap-3">
                        <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756097507/icpersen_bsosnl.webp"
                            class="w-10 h-10" alt="Promo HKI">
                        <div>
                            <p class="font-semibold text-lg">Promo Terbit Buku Gratis HKI</p>
                            <p class="text-slate-600 text-sm">Promo khusus: pendaftaran HKI gratis sesuai periode yang
                                berlaku.</p>
                        </div>
                    </li>
                </ul>

                <!-- CTA -->
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                    <a href="https://wa.me/6282297881480?text=Halo%20admin%20ACI%2C%20saya%20ingin%20konsultasi%20penerbitan%20buku."
                        target="_blank" rel="noopener"
                        class="conversion inline-flex items-center justify-center gap-2 px-6 py-3 rounded-lg bg-amber-500 text-rose-900 font-semibold hover:bg-amber-400 w-full sm:w-auto">
                        Konsultasi Penerbitan Buku Sekarang
                    </a>

                </div>
            </div>
            <!-- KANAN (Gambar) -->
            <div class="lg:col-span-5 flex justify-center lg:justify-start" data-aos="fade-left">
                <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1759394530/Group_2329_qa4wck.png"
                    alt="Brand Ambassador" class="w-full max-w-[360px] sm:max-w-[340px] md:max-w-[420px] h-auto object-contain
             lg:-ml-6 xl:-ml-10" />
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

    <!-- ================== PAKET TERBIT BUKU ================== -->

    <!-- Sprite ikon -->
    <svg xmlns="http://www.w3.org/2000/svg" style="display:none">
        <!-- CLOSE (merah) -->
        <symbol id="icon-close" viewBox="0 0 32 32">
            <path fill="currentColor"
                d="M16 2C8.2 2 2 8.2 2 16s6.2 14 14 14s14-6.2 14-14S23.8 2 16 2m0 26C9.4 28 4 22.6 4 16S9.4 4 16 4s12 5.4 12 12s-5.4 12-12 12" />
            <path fill="currentColor"
                d="M21.4 23L16 17.6L10.6 23L9 21.4l5.4-5.4L9 10.6L10.6 9l5.4 5.4L21.4 9l1.6 1.6l-5.4 5.4l5.4 5.4z" />
        </symbol>

        <!-- CHECK (kuning) -->
        <symbol id="icon-check" viewBox="0 0 48 48">
            <g fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="4">
                <path
                    d="M24 44a19.94 19.94 0 0 0 14.142-5.858A19.94 19.94 0 0 0 44 24a19.94 19.94 0 0 0-5.858-14.142A19.94 19.94 0 0 0 24 4A19.94 19.94 0 0 0 9.858 9.858A19.94 19.94 0 0 0 4 24a19.94 19.94 0 0 0 5.858 14.142A19.94 19.94 0 0 0 24 44Z" />
                <path stroke-linecap="round" d="m16 24l6 6l12-12" />
            </g>
        </symbol>
    </svg>

    <!-- Icon (reusable) -->
    <svg aria-hidden="true" class="hidden">
        <symbol id="icon-check" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="9" fill="none" stroke="currentColor" stroke-width="1.6"></circle>
            <path d="M8.5 12.5l2.3 2.2 4.7-5.2" fill="none" stroke="currentColor" stroke-linecap="round"
                stroke-linejoin="round" stroke-width="1.8" />
        </symbol>
    </svg>

    <section id="paket" class="py-16 bg-[#FCE9C9] ">
        <div class="max-w-k7xl mx-auto px-6 lg:px-8">
            <!-- Heading -->
            <header class="text-center mb-10">
                <h2 class="text-3xl md:text-4xl font-extrabold text-rose-900"
                    style="font-family:'Madani',ui-sans-serif,system-ui;font-weight:700;" data-aos="fade-up">
                    Pilihan Paket Terbit Buku
                </h2>
                <p class="mt-2 text-[15px] text-rose-900/80" data-aos="fade-up" data-aos-delay="100">
                    ACI menyediakan layanan penerbitan buku dan percetakan yang cepat, murah dan berkualitas tinggi
                </p>
            </header>
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

            }

            .i-check {
                color: #f59e0b
            }

            .i-close {
                color: #ef4444
            }

            /* text-amber-500 */
            </style>

            <!-- Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- ===== Card 3: Paket Raja ===== -->
                <article
                    class="rounded-[26px] overflow-hidden shadow-xl ring-1 ring-black/5 bg-white flex flex-col h-full"
                    data-aos="zoom-in" data-aos-delay="0">
                    <!-- head -->
                    <div class="bg-gradient-to-b from-rose-900 to-red-700 text-white text-center py-6">
                        <h3 class="text-2xl font-extrabold">Paket Raja</h3>
                    </div>
                    <!-- body -->
                    <div class="p-6 md:p-7 flex flex-col grow">
                        <h4 class="text-2xl font-extrabold text-center text-rose-900">Gratis Revisi Unlimited</h4>

                        <ul class="mt-4 space-y-3 text-slate-700">
                            <li class="li"><svg class="i i-check" aria-hidden="true">
                                    <use href="#icon-check" />
                                </svg>25 eksemplar soft cover</li>
                            <li class="li"><svg class="i i-check" aria-hidden="true">
                                    <use href="#icon-check" />
                                </svg>ISBN cetak dan digital</li>
                            <li class="li"><svg class="i i-check" aria-hidden="true">
                                    <use href="#icon-check" />
                                </svg>Ukuran A5 (hvs)</li>
                            <li class="li"><svg class="i i-check" aria-hidden="true">
                                    <use href="#icon-check" />
                                </svg>Maksimal 150 halaman</li>
                            <li class="li"><svg class="i i-check" aria-hidden="true">
                                    <use href="#icon-check" />
                                </svg>Layout Unlimited Revisi</li>
                            <li class="li"><svg class="i i-check" aria-hidden="true">
                                    <use href="#icon-check" />
                                </svg>Design cover Unlimited Revisi</li>
                            <li class="li"><svg class="i i-check" aria-hidden="true">
                                    <use href="#icon-check" />
                                </svg>Royalti 15% buku cetak</li>
                            <li class="li"><svg class="i i-check" aria-hidden="true">
                                    <use href="#icon-check" />
                                </svg>Royalti 20% buku digital</li>
                            <li class="li"><svg class="i i-check" aria-hidden="true">
                                    <use href="#icon-check" />
                                </svg>Google Scholar</li>
                            <li class="li"><svg class="i i-check" aria-hidden="true">
                                    <use href="#icon-check" />
                                </svg>Google Playbook</li>
                            <li class="li"><svg class="i i-check" aria-hidden="true">
                                    <use href="#icon-check" />
                                </svg>Sertifikat per penulis</li>
                            <li class="li"><svg class="i i-check" aria-hidden="true">
                                    <use href="#icon-check" />
                                </svg>Free 2 pcs kaos</li>
                        </ul>

                        <div class="mt-auto pt-6">
                            <button type="button"
                                class="conversion w-full rounded-xl bg-amber-500 text-rose-900 font-semibold py-3 hover:bg-amber-400 wa-btn"
                                data-paket="Raja">
                                Kirim Naskah Sekarang
                            </button>
                        </div>
                    </div>
                </article>

                <!-- ===== Card 2: Paket Menteri ===== -->
                <article
                    class="rounded-[26px] overflow-hidden shadow-xl ring-1 ring-black/5 bg-white flex flex-col h-full"
                    data-aos="zoom-in" data-aos-delay="100">
                    <div class="bg-gradient-to-b from-rose-900 to-red-700 text-white text-center py-6">
                        <h3 class="text-2xl font-extrabold">Paket Menteri</h3>
                    </div>
                    <div class="p-6 md:p-7 flex flex-col grow">
                        <h4 class="text-2xl font-extrabold text-center text-rose-900">Gratis 3x Revisi</h4>

                        <ul class="mt-5 space-y-3 text-slate-800">
                            <li class="li"><svg class="i i-check" aria-hidden="true">
                                    <use href="#icon-check" />
                                </svg>10 eksemplar soft cover</li>
                            <li class="li"><svg class="i i-check" aria-hidden="true">
                                    <use href="#icon-check" />
                                </svg>ISBN cetak dan digital</li>
                            <li class="li"><svg class="i i-check" aria-hidden="true">
                                    <use href="#icon-check" />
                                </svg>Ukuran A5 (hvs)</li>
                            <li class="li"><svg class="i i-check" aria-hidden="true">
                                    <use href="#icon-check" />
                                </svg>Maksimal 150 halaman</li>
                            <li class="li"><svg class="i i-check" aria-hidden="true">
                                    <use href="#icon-check" />
                                </svg>Layout 3 kali revisi</li>
                            <li class="li"><svg class="i i-check" aria-hidden="true">
                                    <use href="#icon-check" />
                                </svg>Design cover 3 kali revisi</li>
                            <li class="li"><svg class="i i-check" aria-hidden="true">
                                    <use href="#icon-check" />
                                </svg>Royalti 15% buku cetak</li>
                            <li class="li"><svg class="i i-check" aria-hidden="true">
                                    <use href="#icon-check" />
                                </svg>Royalti 20% buku digital</li>
                            <li class="li"><svg class="i i-check" aria-hidden="true">
                                    <use href="#icon-check" />
                                </svg>Google Scholar</li>
                            <li class="li"><svg class="i i-check" aria-hidden="true">
                                    <use href="#icon-check" />
                                </svg>Google Playbook</li>
                            <li class="li"><svg class="i i-check" aria-hidden="true">
                                    <use href="#icon-check" />
                                </svg>Sertifikat per penulis</li>
                        </ul>

                        <div class="mt-auto pt-6">
                            <button type="button"
                                class="conversion w-full rounded-xl bg-amber-500 text-rose-900 font-semibold py-3 hover:bg-amber-400 wa-btn"
                                data-paket="Menteri">
                                Kirim Naskah Sekarang
                            </button>
                        </div>
                    </div>
                </article>

                <!-- ===== Card 1: Paket Rakyat ===== -->
                <article
                    class="rounded-[26px] overflow-hidden shadow-xl ring-1 ring-black/5 bg-white flex flex-col h-full"
                    data-aos="zoom-in" data-aos-delay="200">
                    <div class="bg-gradient-to-b from-rose-900 to-red-700 text-white text-center py-6">
                        <h3 class="text-2xl font-extrabold">Paket Rakyat</h3>
                    </div>
                    <div class="p-6 md:p-7 flex flex-col grow">
                        <h4 class="text-2xl font-extrabold text-center text-rose-900">Gratis 1x Revisi (Layout &amp; Cover)</h4>
                        <ul class="mt-5 space-y-3 text-slate-800">
                            <li class="li"><svg class="i i-check" aria-hidden="true">
                                    <use href="#icon-check" />
                                </svg>5 eksemplar soft cover</li>
                            <li class="li"><svg class="i i-check" aria-hidden="true">
                                    <use href="#icon-check" />
                                </svg>ISBN cetak/digital</li>
                            <li class="li"><svg class="i i-check" aria-hidden="true">
                                    <use href="#icon-check" />
                                </svg>Ukuran A5 (hvs)</li>
                            <li class="li"><svg class="i i-check" aria-hidden="true">
                                    <use href="#icon-check" />
                                </svg>Maksimal 150 halaman</li>
                            <li class="li"><svg class="i i-check" aria-hidden="true">
                                    <use href="#icon-check" />
                                </svg>Layout 1 kali revisi</li>
                            <li class="li"><svg class="i i-check" aria-hidden="true">
                                    <use href="#icon-check" />
                                </svg>Design cover 1 kali revisi</li>
                            <li class="li"><svg class="i i-check" aria-hidden="true">
                                    <use href="#icon-check" />
                                </svg>Royalti 15% buku cetak</li>
                            <li class="li"><svg class="i i-check" aria-hidden="true">
                                    <use href="#icon-check" />
                                </svg>Royalti 20% buku digital</li>
                            <li class="li"><svg class="i i-check" aria-hidden="true">
                                    <use href="#icon-check" />
                                </svg>Google Scholar</li>
                            <li class="li"><svg class="i i-check" aria-hidden="true">
                                    <use href="#icon-check" />
                                </svg>Google Playbook</li>
                            <li class="li"><svg class="i i-check" aria-hidden="true">
                                    <use href="#icon-check" />
                                </svg>Sertifikat 1 orang penulis</li>
                        </ul>

                        <div class="mt-auto pt-6">
                            <button type="button"
                                class="conversion w-full rounded-xl bg-amber-500 text-rose-900 font-semibold py-3 hover:bg-amber-400 wa-btn"
                                data-paket="Rakyat">
                                Kirim Naskah Sekarang
                            </button>
                        </div>
                    </div>
                </article>


            </div>
        </div>
    </section>

    <!-- =============== LAYANAN KAMI =============== -->
    <section id="produk" class="py-14 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <!-- Heading -->
            <header class="text-center mb-8">
                <h2 class="text-3xl md:text-4xl font-extrabold"
                    style="font-family:'Madani',ui-sans-serif,system-ui;font-weight:700;">
                    <span class="text-rose-900">Layanan</span> <span class="text-slate-900">Kami</span>
                </h2>
            </header>

            <!-- Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-justify">
                <!-- Card: Penerbitan Buku -->
                <article
                    class="rounded-[22px] bg-white ring-1 ring-slate-200/70 shadow-[0_6px_20px_rgba(15,23,42,.06)] p-4 sm:p-5 flex items-start gap-4"
                    data-aos="fade-up">
                    <figure class="shrink-0">
                        <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756097892/penerbit_jcsj7t.webp"
                            alt="Penerbitan Buku" class="w-32 h-24 sm:w-36 sm:h-28 object-cover rounded-lg"
                            loading="lazy" />
                    </figure>
                    <div class="min-w-0">
                        <h3 class="text-lg sm:text-xl font-extrabold text-slate-900">Penerbitan Buku</h3>
                        <p class="mt-1 text-[13px] sm:text-sm leading-relaxed text-slate-600">
                            Cetak buku cepat & rapi bersama Tim Asad Corp. Pilihan ukuran & kertas lengkap,
                            BW/warna, jilid lem/PUR/hardcover. Kualitas offset & digital printing, harga transparan,
                            MOQ fleksibel, kirim ke seluruh Indonesia.

                        </p>
                        <a href="https://wa.me/6282297881480?text=Halo%20Admin%20Asad%20Corp,%20saya%20ingin%20mendapatkan%20informasi%20lebih%20lanjut%20tentang%20penerbitan%20buku."
                            target="_blank" rel="noopener"
                            class="conversion mt-3 inline-flex items-center px-4 py-2 rounded-lg bg-amber-500 text-rose-900 text-sm font-semibold hover:bg-amber-400">
                            Info Selengkapnya
                        </a>
                    </div>
                </article>

                <!-- Card: Percetakan Buku -->
                <article
                    class="rounded-[22px] bg-white ring-1 ring-slate-200/70 shadow-[0_6px_20px_rgba(15,23,42,.06)] p-4 sm:p-5 flex items-start gap-4"
                    data-aos="fade-up" data-aos-delay="100">
                    <figure class="shrink-0">
                        <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756097886/percetakan_pw1gng.webp"
                            alt="Percetakan Buku" class="w-32 h-24 sm:w-36 sm:h-28 object-cover rounded-lg"
                            loading="lazy" />
                    </figure>
                    <div class="min-w-0">
                        <h3 class="text-lg sm:text-xl font-extrabold text-slate-900">Percetakan Buku</h3>
                        <p class="mt-1 text-[13px] sm:text-sm leading-relaxed text-slate-600">
                            Tim Asad Corp mengubah naskah Anda menjadi buku siap terbit:
                            editing, layout & cover, ISBN, hingga distribusi ke marketplace & perpustakaan.
                            Proses transparan, timeline jelas, dan pendampingan editor sampai buku terbit.
                        </p>
                        <a href="https://wa.me/6282297881480?text=Halo%20Admin%20Asad%20Corp,%20saya%20ingin%20mendapatkan%20informasi%20lebih%20lanjut%20tentang%20percetakan%20buku."
                            target="_blank" rel="noopener"
                            class="conversion mt-3 inline-flex items-center px-4 py-2 rounded-lg bg-amber-500 text-rose-900 text-sm font-semibold hover:bg-amber-400">
                            Info Selengkapnya
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- ALASAN ACI -->
    <section id="why" class="py-16">
        <div class="max-w-7xl mx-auto px-6 mb-16 lg:px-8">
            <h2 class="text-3xl md:text-4xl font-extrabold leading-snug text-center"
                style="font-family:'Madani', ui-sans-serif, system-ui; font-weight:700;">
                Terbit Buku Di ACI <span class="text-rose-700">Gak Perlu Ragu....</span>
            </h2>
        </div>

        <div class=" max-w-7xl mx-auto px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            <!-- KIRI: pakai frame aspect agar shape & image selalu klop -->
            <div class="lg:col-span-5" data-aos="fade-right">
                <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756093672/legal_xpjmpn.webp"
                    alt="Legalitas ACI" class="mx-auto w-full max-w-[420px] h-auto object-contain drop-shadow-xl"
                    loading="lazy">
            </div>


            <!-- KANAN -->
            <div class="lg:col-span-7 space-y-8 text-justify" data-aos="fade-left">
                <div class="flex gap-4 justify-center lg:justify-start" data-aos="fade-up" data-aos-delay="50">
                    <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756094060/emblem_oletef.webp"
                        class="w-12 h-12 md:w-14 md:h-14" alt="">
                    <div>
                        <h3 class="text-lg md:text-xl font-extrabold text-slate-900">ACI adalah Perusahaan Resmi
                            Berlegalitas</h3>
                        <p class="text-slate-700">
                            Asad Corporation Indonesia merupakan lembaga profesional yang menyediakan berbagai layanan
                            digital yang memiliki legalitas perusahaan resmi dengan NIB
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
                    <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1757302540/image748_hylehx.webp"
                        class="w-12 h-12 md:w-14 md:h-14" alt="">
                    <div>
                        <h3 class="text-lg md:text-xl font-extrabold text-slate-900">Banyak Penulis telah Terbit Buku di
                            ACI</h3>
                        <p class="text-slate-700">Ribuan penulis telah mempercayakan buku untuk diterbitkan di Asad
                            Corporation Indonesia, ribuan ulasan positif sudah di terimaJika perjanjian di MoU tidak
                            terpenuhi maka customer berhak menerima refund hingga 100%</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================== TESTIMONI – SINGLE ================== -->
    <section id="testimoni" class="py-14 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">

            <!-- KIRI: Teks -->
            <div class="space-y-4" data-aos="fade-right">
                <h2 class="text-3xl md:text-4xl font-extrabold ">
                    Bukti <span class="text-rose-900">Kepuasan</span> Customer
                </h2>

                <!-- quote marks -->
                <div class="flex gap-1 text-amber-500">
                    <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756103302/tiptip_fxhqkf.webp" alt="">
                </div>

                <p class="text-slate-700 text-justify leading-relaxed">
                    Proses penerbitan buku saya berjalan dengan sangat lancar dan ini yang kesekian kalinya.
                    Tim Asad Corpn sangat profesional, responsif, dan penuh perhatian terhadap setiap detail.
                    Hasil akhirnya luar biasa, dengan kualitas cetakan yang tajam dan desain yang menarik.
                    Asad Corporation bukan hanya sekadar penerbit, mereka benar-benar membantu mewujudkan karya saya
                    dengan sempurna. Terima kasih, Asad Corporation, untuk pengalaman luar biasa ini.
                </p>

                <div class="pt-1 flex flex-wrap gap-3">
                    <a href="https://wa.me/6282297881480?text=Halo%20admin%20ACI%2C%20saya%20ingin%20kirim%20naskah%20untuk%20penerbitan%20buku."
                        target="_blank" rel="noopener"
                        class="conversion inline-flex items-center px-5 py-2.5 rounded-lg bg-amber-500 text-rose-900 font-semibold hover:bg-amber-400">
                        Kirim Naskah Sekarang
                    </a>

                    <a href="#testimoni"
                        class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg border border-amber-400 text-slate-900 hover:bg-amber-50">
                        Lebih Banyak
                        <svg class="w-4 h-4 text-amber-500" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 15.5 6 9.5h12z" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- KANAN: Poster Testimoni -->
            <div class="flex justify-center lg:justify-end" data-aos="fade-left">
                <img src="https://res.cloudinary.com/dhjqjn2hn/image/upload/v1756102870/testiasadbuku00_q3ixm2.webp"
                    alt="Testimoni buku"
                    class="w-full max-w-[420px] rounded-xl shadow-lg ring-1 ring-slate-200 object-cover" loading="lazy">
            </div>
        </div>
    </section>

    <!-- BUKTI KEPUASAN CUSTOMER -->
    <section id="kepuasan" class=" bg-white">
        <div class="max-w-7xl mx-auto px-6 py-16 lg:px-8">

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
                    class="flex gap-6 overflow-x-auto snap-x snap-mandatory scroll-smooth px-4 pb-2 scrollbar-none">
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

        </div>
    </section>

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


    <?php include 'footer.php'; ?>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js" defer></script>
    <script>
    AOS.init({
        duration: 700, // durasi animasi (ms)
        easing: 'ease-out-cubic',
        offset: 80, // jarak trigger dari bawah viewport
        once: true // animasi jalan sekali saja
    });
    </script>
    <!-- Script Button Paket -->
    <script>
    (function() {
        const PHONE = '6282297881480';

        function msg(paket) {
            const teks = `
Halo admin ACI, saya ingin kirim naskah untuk *Paket ${paket}*.
`.trim();
            return encodeURIComponent(teks);
        }

        document.querySelectorAll('.wa-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                const paket = btn.dataset.paket || 'Raja';
                const url = `https://wa.me/${PHONE}?text=${msg(paket)}`;
                window.open(url, '_blank');
            });
        });
    })();
    </script>

    <script src="assets/js/toogle.js" defer></script>
    <script src="assets/js/popup.js" defer></script>
    <script src="assets/js/clients-marquee.js" defer></script>
    <script src="assets/js/testimonials-t2.js" defer></script>
    <script src="assets/js/faq.js" defer></script>
    <script src="assets/js/wa.js" defer></script>
    <script src="assets/js/order-notify.js" defer></script>

</body>