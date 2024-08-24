<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SI-ATAN - Sistem Informasi Arsip Kesehatan</title>
    <link rel="stylesheet" href="/css/beranda.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">
                <img src="/asset/logo.png" alt="SI-ATAN Logo">
            </div>
            <nav>
                <ul>
                    <li><a href="home.html" class="nav-link" id="home-link">Home</a></li>
                    <li><a href="{{route('bidang')}}" class="nav-link" id="bidang-link">Beranda</a></li>
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                    <li class="profile">
                        <img src="/asset/profile.png" alt="profil login" class="profile-pic">
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="photo-section">
            <div class="si-atan-content">
                <img src="/asset/logo_siatan.png" alt="SI-ATAN" class="si-atan-photo">
                <div class="text-content">
                    <h1>Sistem Informasi</h1>
                    <h2>Arsip Kesehatan</h2>
                </div>
            </div>
            <section class="photo-section">
                <img src="/asset/arsip_foto.png" alt="Foto Arsip" class="arsip-photo">
            </section>
        </section>

        <section class="features">
            <div class="feature-box">
                <h3>Meningkatkan efisiensi pengelolaan data</h3>
                <p>Memastikan bahwa data arsip kesehatan dapat dikelola dengan lebih efektif, mulai dari penambahan, pengeditan, hingga penghapusan arsip.</p>
            </div>
            <div class="feature-box">
                <h3>Mempermudah Akses Data</h3>
                <p>Memungkinkan akses cepat dan mudah terhadap arsip kesehatan bagi pengguna yang berwenang.</p>
            </div>
            <div class="feature-box">
                <h3>Menjamin Keamanan Data</h3>
                <p>Mengimplementasikan sistem keamanan yang kuat untuk melindungi data dari akses yang tidak sah dan menjaga kerahasiaan informasi kesehatan.</p>
            </div>
        </section>

        <section class="services">
            <div class="section-title">
                <h2>Layanan SI-ATAN</h2>
            </div>
            <div class="service-box">
                <div class="image-wrapper">
                    <img src="/asset/upload.png" alt="Upload Data">
                </div>
                <p>Upload Data</p>
            </div>
            <div class="service-box">
                <div class="image-wrapper">
                    <img src="/asset/uploading.png" alt="Tambah Data">
                </div>
                <p>Tambah Data</p>
            </div>
            <div class="service-box">
                <div class="image-wrapper">
                    <img src="/asset/digital_art.png" alt="Edit Data">
                </div>
                <p>Edit</p>
            </div>
        </section>        
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-logo">
                <img src="/asset/logo.png" alt="SI-ATAN" class="footer-logo-img">
            </div>
            <p>Kepulauan Riau</p>
            <p>sebuah platform digital yang dirancang untuk mengelola, menyimpan, dan mengakses data arsip kesehatan dengan cara yang efisien dan aman. SI-ATAN dikembangkan untuk memenuhi kebutuhan Dinas Kesehatan dalam pengelolaan data arsip kesehatan yang lebih terstruktur dan terintegrasi</p>
        </div>
        <div class="footer-contact">
            <h3>Hubungi Kami</h3>
            <p>Dinas Kesehatan Provinsi Kepulauan Riau, di Dompak Komplek Perkantoran Pemerintahan Prov. Kepulauan Riau Gedung C2 Lt.2&3, Dompak, Kota Tanjung Pinang, Kepulauan Riau</p>
            <p>Email: <a href="mailto:info@siatan.com">info@siatan.com</a></p>
            <div class="social-icons">
                <a href="https://twitter.com/yourprofile" target="_blank">
                    <img src="/asset/twitter_ic.png" alt="Twitter">
                </a>
                <a href="https://facebook.com/yourprofile" target="_blank">
                    <img src="/asset/fb_ic.png" alt="Facebook">
                </a>
                <a href="https://instagram.com/yourprofile" target="_blank">
                    <img src="/asset/ig_ic.png" alt="Instagram">
                </a>
                <a href="https://youtube.com/yourprofile" target="_blank">
                    <img src="/asset/yt_ic.png" alt="YouTube">
                </a>
            </div>
        </div>
    </footer>

</body>
</html>
