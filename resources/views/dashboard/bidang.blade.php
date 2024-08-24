<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SI-ATAN</title>
    <link rel="stylesheet" href="/css/bidang.css">
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <div class="profile-container">
                <img src="/asset/profile.png" alt="Profile Picture" class="profile-picture">
            </div>
            <div class="logo">
                <img src="/asset/logo.png" alt="SI-ATAN Logo">
                <h2>SISTEM INFORMASI ARSIP KESEHATAN</h2>
                <div class="sidebar-content">
                    <p class="beranda">Beranda</p>
                </div>
            </div>
            <button id="logout-button" class="logout-button">Logout</button>
        </div>
        <div class="main-content">
            <h2>5 BIDANG DINAS KESEHATAN</h2>
            <ul>
                @if($bidangId == 1)
                <li id="sekretariat">Sekretariat</li>
                <li id="kesmas" class="disabled">Kesehatan Masyarakat</li>
                <li id="p2p" class="disabled">Pencegahan dan Pengendalian Penyakit</li>
                <li id="pelkes" class="disabled">Pelayanan Kesehatan</li>
                <li id="sdk" class="disabled">Sumber Daya Kesehatan</li>
                @elseif($bidangId == 2)
                <li id="sekretariat" class="disabled">Sekretariat</li>
                <li id="kesmas">Kesehatan Masyarakat</li>
                <li id="p2p" class="disabled">Pencegahan dan Pengendalian Penyakit</li>
                <li id="pelkes" class="disabled">Pelayanan Kesehatan</li>
                <li id="sdk" class="disabled">Sumber Daya Kesehatan</li>
                @elseif($bidangId == 3)
                <li id="sekretariat" class="disabled">Sekretariat</li>
                <li id="kesmas" class="disabled">Kesehatan Masyarakat</li>
                <li id="p2p">Pencegahan dan Pengendalian Penyakit</li>
                <li id="pelkes" class="disabled">Pelayanan Kesehatan</li>
                <li id="sdk" class="disabled">Sumber Daya Kesehatan</li>
                @elseif($bidangId == 4)
                <li id="sekretariat" class="disabled">Sekretariat</li>
                <li id="kesmas" class="disabled">Kesehatan Masyarakat</li>
                <li id="p2p" class="disabled">Pencegahan dan Pengendalian Penyakit</li>
                <li id="pelkes">Pelayanan Kesehatan</li>
                <li id="sdk" class="disabled">Sumber Daya Kesehatan</li>
                @elseif($bidangId == 5)
                <li id="sekretariat" class="disabled">Sekretariat</li>
                <li id="kesmas" class="disabled">Kesehatan Masyarakat</li>
                <li id="p2p" class="disabled">Pencegahan dan Pengendalian Penyakit</li>
                <li id="pelkes" class="disabled">Pelayanan Kesehatan</li>
                <li id="sdk">Sumber Daya Kesehatan</li>
                @else
                <li id="sekretariat">Sekretariat</li>
                <li id="kesmas">Kesehatan Masyarakat</li>
                <li id="p2p">Pencegahan dan Pengendalian Penyakit</li>
                <li id="pelkes">Pelayanan Kesehatan</li>
                <li id="sdk">Sumber Daya Kesehatan</li>
                @endif
            </ul>
        </div>
    </div>

    <script>
        // Menambahkan event listener untuk setiap bidang
        document.getElementById('sekretariat').addEventListener('click', function() {
            window.location.href = "{{route('sekretariat')}}"; // Ganti dengan URL halaman Sekretariat
        });

        // Tambahkan event listener serupa untuk bidang lainnya jika diperlukan
        document.getElementById('kesmas').addEventListener('click', function() {
            window.location.href = "{{route('kesmas')}}"; // Ganti dengan URL halaman Kesehatan Masyarakat
        });

        document.getElementById('p2p').addEventListener('click', function() {
            window.location.href = "{{route('p2p')}}"; // Ganti dengan URL halaman Pencegahan dan Pengendalian Penyakit
        });

        document.getElementById('pelkes').addEventListener('click', function() {
            window.location.href = "{{route('pelkes')}}"; // Ganti dengan URL halaman Pelayanan Kesehatan
        });

        document.getElementById('sdk').addEventListener('click', function() {
            window.location.href = "{{route('sdk')}}"; // Ganti dengan URL halaman Sumber Daya Kesehatan
        });

        document.getElementById('logout-button').addEventListener('click', function() {
            window.location.href = "{{route('dashboard')}}"; // Ganti dengan URL halaman home Anda
        });
    </script>

</body>

</html>