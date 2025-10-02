<header class="fixed top-0 inset-x-0 z-50 border-white bg-white md:bg-white/80 md:backdrop-blur">
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
                <li class="relative">
                    <button id="services-btn" class="inline-flex items-center gap-1 hover:text-rose-800" type="button"
                        aria-haspopup="true" aria-expanded="false" aria-controls="services-menu">
                        Layanan
                        <svg class="w-4 h-4 text-amber-500" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                            <path d="M5.25 7.5 10 12.25 14.75 7.5" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>

                    <!-- WRAPPER: jembatani hover dengan pt-3 -->
                    <div class="absolute left-0 top-full pt-3 z-30">
                        <div id="services-menu" role="menu" class="w-56 bg-white border rounded-xl shadow p-3
               hidden opacity-0 translate-y-2 pointer-events-none
               transition duration-150">
                            <a href="/publikasi" class="block px-3 py-2 rounded-lg hover:bg-gray-100">Publikasi
                                Jurnal</a>
                            <a href="/penerbit" class="block px-3 py-2 rounded-lg hover:bg-gray-100">Penerbitan Buku</a>
                            <a href="/ojs" class="block px-3 py-2 rounded-lg hover:bg-gray-100">OJS & Indexing</a>
                            <a href="/kursus" class="block px-3 py-2 rounded-lg hover:bg-gray-100">Pelatihan &
                                Sertifikasi</a>
                            <a href="/pelatihan" class="block px-3 py-2 rounded-lg hover:bg-gray-100">Pelatihan Kerja
                                Jepang</a>
                            <a href="/virtualoffice" class="block px-3 py-2 rounded-lg hover:bg-gray-100">Virtual
                                Office</a>
                            <a href="/legalitas" class="block px-3 py-2 rounded-lg hover:bg-gray-100">Legalitas</a>
                        </div>
                    </div>
                </li>

                <li><a href="#paket" class="hover:text-rose-800">Paket Kami</a></li>
                <li><a href="#why" class="hover:text-rose-800">Mengapa Kami</a></li>
                <li><a href="#testimoni" class="hover:text-rose-800">Testimoni</a></li>
                <li><a href="#produk" class="hover:text-rose-800">Produk</a></li>
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
            <li><a href="/" class="block px-4 py-3 rounded-lg hover:bg-gray-50">Beranda</a></li>
            <li><a href="/publikasi" class="block px-4 py-3 rounded-lg hover:bg-gray-50">Publikasi Jurnal</a></li>
            <li><a href="/penerbit" class="block px-4 py-3 rounded-lg hover:bg-gray-50">Penerbitan Buku</a></li>
            <li><a href="/ojs" class="block px-4 py-3 rounded-lg hover:bg-gray-50">OJS & Indexing</a></li>
            <li><a href="/kursus" class="block px-4 py-3 rounded-lg hover:bg-gray-50">Pelatihan &
                    Sertifikasi</a></li>
            <a href="/pelatihan" class="block px-3 py-2 rounded-lg hover:bg-gray-100">Pelatihan Kerja Jepang</a>
            <a href="/virtualoffice" class="block px-3 py-2 rounded-lg hover:bg-gray-100">Virtual Office</a>
            <a href="/legalitas" class="block px-3 py-2 rounded-lg hover:bg-gray-100">Legalitas</a>
            <li><a href="https://wa.me/6282297881480?text=Halo%20admin%20ACI%2C%20saya%20dari%20website%20ingin%20bertanya%20tentang%20layanan%3A%20terbit%20buku%2C%20publish%20jurnal%2C%20percetakan%2C%20dll"
                    class="conversion block px-4 py-3 rounded-lg bg-rose-900 text-white text-center hover:opacity-90">Hubungi
                    Kami</a></li>
        </ul>
    </div>
</nav>

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
                    const open = btn.getAttribute('aria-expanded') === 'true';
                    setOpen(!open);
                });

                // klik luar = tutup
                document.addEventListener('click', (e) => {
                    if (!menu.contains(e.target) && !btn.contains(e.target)) setOpen(false);
                });

                // Esc = tutup
                document.addEventListener('keydown', (e) => {
                    if (e.key === 'Escape') setOpen(false);
                });
            })();
            </script>