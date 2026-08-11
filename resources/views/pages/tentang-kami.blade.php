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
    {{-- Style CSS --}}
    <link rel="stylesheet" href="{{ asset('css/tentang-kami.css') }}">
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
    <!-- Overlay -->
    <div class="overlay" id="overlay"></div>

    <main>

    <!-- ==================== PERUSAHAAN KAMI ==================== -->
    <section class="perusahaan-kami py-5">
        <div class="container">
            <h1 class="perusahaan-kami__judul text-center mb-5">
                Perusahaan Kami
            </h1>
            <div class="row align-items-start g-5">
                <!-- Gambar -->
                <div class="col-lg-6">
                    <div class="perusahaan-kami__gambar">
                        <img
                            src="{{ asset('images/IMG_8305v1.jpg') }}"
                            alt="Lembaran veneer kayu"
                            class="img-fluid rounded"
                            loading="lazy">
                    </div>
                </div>
                <!-- Deskripsi -->
                <div class="col-lg-6">
                    <div class="perusahaan-kami__teks">
                        <p>
                            PT Wijaya Plywood Indonesia berfokus pada pengolahan kayu dengan menghasilkan plywood dan veneer yang sesuai dengan kebutuhan pelanggan. Dengan mengutamakan kualitas, ketepatan proses, dan kepuasan pelanggan, kami terus menjaga konsistensi dalam setiap proses untuk menghasilkan produk yang dapat memenuhi kebutuhan pasar.
                            
                            Dalam menjalankan setiap kegiatan, kami terus berupaya meningkatkan proses kerja dan menjaga standar yang telah ditetapkan. Pengembangan yang dilakukan secara bertahap menjadi bagian dari upaya kami untuk mempertahankan kualitas, meningkatkan keandalan, serta memberikan hasil yang sesuai dengan kebutuhan pelanggan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================== SEJARAH PERUSAHAAN ==================== -->
    <section class="sejarah-perusahaan py-5">
        <div class="container">
            <h2 class="sejarah-perusahaan__judul text-center mb-5">
                Sejarah Perusahaan
            </h2>
            <div class="row align-items-start g-5">
                <!-- Teks -->
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="sejarah-perusahaan__teks">
                        <p>
                            PT Wijaya Plywood Indonesia berdiri sejak tahun 2022 dan menjadi salah satu pelopor pengolahan kayu lapis di Lawang, Jawa Timur. Kami terus mengembangkan proses kerja untuk menghadirkan produk berkualitas dengan proses yang efisien dan terkontrol. Setiap produk kami dibuat dengan memperhatikan standar mutu dan keandalan untuk memenuhi kebutuhan furniture. Setiap lembar kayu lapis melalui proses pengawasan yang dilakukan secara cermat untuk memastikan kualitas yang tepat. 
                        </p>
                    </div>
                </div>
                <!-- Gambar -->
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="sejarah-perusahaan__gambar">
                        <img
                            src="{{ asset('images/sejarahv2.jpg') }}"
                            alt="Sejarah Perusahaan"
                            class="img-fluid rounded"
                            loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== KOMITMEN PERUSAHAAN ==================== -->
    <section class="komitmen-perusahaan py-5">
        <div class="komitmen-perusahaan__card">
            <img
                src="{{ asset('images/komitmen.jpg') }}"
                alt="Komitmen Perusahaan"
                class="komitmen-perusahaan__bg"
                loading="lazy">
            <div class="komitmen-perusahaan__overlay">
                <h2 class="komitmen-perusahaan__judul">
                    Komitmen Perusahaan
                </h2>
                <p class="komitmen-perusahaan__kutipan">
                    "Kami memberdayakan masyarakat melalui penciptaan peluang kerja dan
                    pengembangan keterampilan, sekaligus membangun perusahaan plywood
                    yang profesional dan berdaya saing lokal."
                </p>
            </div>
        </div>
    </section>

    <!-- ==================== BUDAYA KERJA ==================== -->
    <section class="budaya-kerja py-5">
        <div class="container">
            <h2 class="budaya-kerja__judul text-center mb-5">
                Budaya Kerja
            </h2>
            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="budaya-kerja__card h-100">
                        <h3>Integritas</h3>
                        <p>
                            Menjunjung tinggi kejujuran, tanggung jawab, dan etika kerja dalam setiap aktivitas perusahaan.
                        </p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="budaya-kerja__card h-100">
                        <h3>Profesional</h3>
                        <p>
                            Bekerja secara disiplin, kompeten, dan berorientasi pada kualitas terbaik.
                        </p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6 mx-md-auto">
                    <div class="budaya-kerja__card h-100">
                        <h3>Kerja Sama</h3>
                        <p>
                            Membangun kolaborasi yang baik antar karyawan demi mencapai tujuan bersama.
                        </p>
                    </div>
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