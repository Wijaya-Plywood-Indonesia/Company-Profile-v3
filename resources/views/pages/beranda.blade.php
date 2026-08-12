<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT Wijaya Plywood Indonesia</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    {{-- Style css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- ================= HEADER ================= -->
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
    <!-- ================= MAIN ================= -->
    <main>
        <!-- ================= HERO ================= -->
        <section class="hero position-relative overflow-hidden">
            <video class="hero__video" autoplay muted loop playsinline>
                <source src="{{ asset('video/0812.mp4') }}" type="video/mp4">
                Browser Anda tidak mendukung video.
            </video>
            <div class="hero__overlay"></div>
        </section>
        <!-- Produk -->
        <section class="produk py-5">
            <div class="container">
                <h2 class="produk__title text-center mb-5 fw-bold">Our Product Lines</h2>
                <div class="product-outline d-flex justify-content-between align-items-center flex-wrap">
                    <div class="outline-title">
                        <h3>Produk</h3>
                    </div>
                    <div class="outline-tab">
                        <button class="tab-btn active" id="btn-plywood">Plywood</button>
                        <button class="tab-btn" id="btn-veneer">Veneer</button>
                    </div>
                </div>
                <!-- Konten -->
                <div class="row align-items-start">
                    <div class="col-lg-6">
                        <div class="produk__image">
                            <img
                                id="produk-img"
                                src="{{ asset('images/gambar1.jpeg') }}"
                                class="img-fluid rounded"
                                alt="Plywood"
                                loading="lazy">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="produk__description">
                            <p id="produk-deskripsi">
                                Plywood tersusun dari beberapa lapisan kayu tipis yang direkatkan menjadi satu lembaran. Konstruksinya membuat plywood kuat dan stabil, sehingga dapat digunakan sebagai material untuk berbagai kebutuhan furniture dan produk berbahan kayu.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Tentang -->
        <section class="tentang py-5">
            <div class="container">
                <div class="row align-items-start g-5">
                    <!-- Teks -->
                    <div class="col-lg-6 order-2 order-lg-1">
                        <h2 class="tentang__title fw-bold">
                            Tentang Perusahaan
                        </h2>
                        <p class="tentang__text">
                            Kami menyediakan plywood yang dapat digunakan untuk berbagai kebutuhan furniture, mulai dari pembuatan meja, lemari, rak, hingga beragam produk furniture lainnya. Setiap produk diproses dengan memperhatikan ketepatan spesifikasi dan konsistensi kualitas agar dapat menjadi material yang sesuai dengan kebutuhan produksi.
                            Dengan proses produksi dan kontrol mutu yang dilakukan secara konsisten, kami terus menjaga kualitas plywood yang dihasilkan sehingga dapat mendukung berbagai kebutuhan furniture dengan hasil yang dapat diandalkan.
                        </p>
                    </div>
                    <!-- Gambar -->
                    <div class="col-lg-6 order-1 order-lg-2">
                        <img
                            src="{{ asset('images/pabrik3v.png') }}"
                            class="img-fluid rounded"
                            alt="Tentang Perusahaan"
                            loading="lazy">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- ================= FOOTER ================= -->
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

    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>