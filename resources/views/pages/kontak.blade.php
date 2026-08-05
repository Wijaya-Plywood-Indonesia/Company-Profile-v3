<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami - PT Wijaya Plywood Indonesia</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    {{-- Boostsrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/kontak.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- ==================== HEADER / NAVIGASI ==================== -->
    <nav class="navbar navbar-light navbar-custom fixed-top">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand d-flex align-items-center" href="{{ route('beranda') }}">
                <img src="{{ asset('images/logo2.png') }}"
                    alt="Logo"
                    width="55"
                    class="me-2">
                <span class="fw-bold">
                    PT WIJAYA PLYWOOD<br>
                    INDONESIA
                </span>
            </a>
            <!-- Tombol Hamburger -->
            <button
                class="navbar-toggler border-0 shadow-none"
                type="button"
                data-bs-toggle="offcanvas"
                data-bs-target="#navbarMenu"
                aria-controls="navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Menu -->
            <div
                class="offcanvas offcanvas-end"
                tabindex="-1"
                id="navbarMenu">
                <div class="offcanvas-header">
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="offcanvas">
                    </button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('beranda') ? 'active' : '' }}"
                                href="{{ route('beranda') }}">
                                Beranda
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('tentang-kami') ? 'active' : '' }}"
                                href="{{ route('tentang-kami') }}">
                                Tentang Kami
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('produk') ? 'active' : '' }}"
                                href="{{ route('produk') }}">
                                Produk
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('kontak') ? 'active' : '' }}"
                                href="{{ route('kontak') }}">
                                Kontak
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Overlay -->
    <div class="overlay" id="overlay"></div>

    <main>
        <!-- ==================== KARTU INFORMASI KONTAK ==================== -->
        <!-- Hero -->
        <section class="kontak-hero py-5">
            <div class="container text-center">
                <h1 class="kontak-hero__judul">
                    Hubungi Kami
                </h1>
                <p class="kontak-hero__subjudul">
                    Silakan hubungi kami untuk informasi lebih lanjut.
                </p>
            </div>
        </section>
        <!-- Card Kontak -->
        <section class="kontak-kartu py-5">
            <div class="container">
                <div class="row g-4 justify-content-center">
                    <!-- Alamat -->
                    <div class="col-lg-4 col-md-6">
                        <article class="kontak-kartu__item">
                            <img
                                src="{{ asset('images/komitmen.jpg') }}"
                                alt="Background Alamat"
                                class="kontak-kartu__bg">
                            <div class="kontak-kartu__content">
                                <h2 class="kontak-kartu__judul">
                                    Alamat
                                </h2>
                                <p class="kontak-kartu__teks">
                                    Lawang, Kabupaten Malang<br>
                                    Jawa Timur 65215
                                </p>
                            </div>
                        </article>
                    </div>
                    <!-- Email -->
                    <div class="col-lg-4 col-md-6">
                        <article class="kontak-kartu__item">
                            <img
                                src="{{ asset('images/komitmen.jpg') }}"
                                alt="Background Email"
                                class="kontak-kartu__bg">
                            <div class="kontak-kartu__content">
                                <h2 class="kontak-kartu__judul">
                                    Email
                                </h2>
                                <p class="kontak-kartu__teks">
                                    recruitment.wijayaplywood@gmail.com
                                </p>
                            </div>
                        </article>
                    </div>
                    <!-- WhatsApp -->
                    <div class="col-lg-4 col-md-6">
                        <article class="kontak-kartu__item">
                            <img
                                src="{{ asset('images/komitmen.jpg') }}"
                                alt="Background WhatsApp"
                                class="kontak-kartu__bg">
                            <div class="kontak-kartu__content">
                                <h2 class="kontak-kartu__judul">
                                    WhatsApp
                                </h2>
                                <a
                                    href="https://wa.me/6283846941680"
                                    target="_blank"
                                    class="kontak-kartu__link">
                                    Hubungi Sekarang
                                </a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- ==================== FOOTER ==================== -->
    <footer class="site-footer">
        <div class="container">
            <div class="row gy-4">
                <!-- Informasi Perusahaan -->
                <div class="col-lg-5 col-md-6">
                    <h3>PT WIJAYA PLYWOOD INDONESIA</h3>
                    <p>Lawang, Kabupaten Malang, Jawa Timur 65215</p>
                    <p>
                        <strong>Telepon:</strong>
                        +62 838-4694-1680
                    </p>
                    <p>
                        <strong>Email:</strong>
                        recruitment.wijayaplywood@gmail.com
                    </p>
                    <div class="footer-socials">
                        <a href="#" aria-label="Twitter">
                            <i class="bi bi-twitter-x"></i>
                        </a>
                        <a href="#" aria-label="Facebook">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="#" aria-label="Instagram">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="#" aria-label="LinkedIn">
                            <i class="bi bi-linkedin"></i>
                        </a>
                    </div>
                </div>
                <!-- Menu -->
                <div class="col-lg-2 col-md-6">
                    <h4>Menu</h4>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{ route('beranda') }}">
                                Beranda
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('tentang-kami') }}">
                                Tentang Kami
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('produk') }}">
                                Produk
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('kontak') }}">
                                Kontak
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Kebijakan -->
                <div class="col-lg-2 col-md-6">
                    <h4>Kebijakan</h4>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#">
                                Kebijakan Privasi
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Syarat dan Ketentuan
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Jam Operasional -->
                <div class="col-lg-3 col-md-6">
                    <h4>Jam Operasional</h4>
                    <p>Senin - Sabtu 06.00 - 17.00 WIB</p>
                    <p class="mt-3">
                        Minggu : Tutup
                    </p>
                </div>
            </div>
            <hr class="footer-divider">
            <div class="footer-bottom text-center">
                <p class="mb-0">
                    &copy; {{ date('Y') }} PT Wijaya Plywood Indonesia. All Rights Reserved.
                </p>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/script.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
