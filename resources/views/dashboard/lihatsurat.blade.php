<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Surat</title>
    <link rel="stylesheet" href="/css/lihatsurat.css">
</head>
<body>
    <div class="profile-container">
        <img src="/asset/profile.png" alt="Profile Picture" class="profile-picture">
    </div>
    <div class="container">
        <div class="sidebar">
            <div class="logo">
                <img src="/asset/logo.png" alt="SIATAN Logo" class="logo-img">
            </div>
            <div class="title">
                <h2>SISTEM INFORMASI ARSIP KESEHATAN</h2>
            </div>
            <div class="menu">
                <button>Sekretariat</button>
                <button>Kesehatan Masyarakat</button>
                <button>Pencegahan dan Pengendalian Penyakit</button>
                <button>Pelayanan Kesehatan</button>
                <button>Sumber Daya Kesehatan</button>
            </div>
            <div class="logout" onclick="window.location.href='{{route('bidang')}}'">
                <button>logout</button>
            </div>
        </div>
        <div class="main-content">
            <h1>Lihat Surat</h1>
            <div class="form-container">
                <div class="form-group">
                    <label for="sub-bagian">Sub Bagian</label>
                    <select id="sub-bagian">
                        <option>-- Pilih Sub Bagian --</option>
                        <option value="1">Sub Bagian 1</option>
                        <option value="2">Sub Bagian 2</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jenis-surat">Jenis Surat</label>
                    <input type="text" id="jenis-surat">
                </div>
                <div class="form-group">
                    <label for="nama-surat">Nama Surat</label>
                    <input type="text" id="nama-surat">
                </div>
                <div class="form-group">
                    <label for="tanggal-upload">Tanggal Upload</label>
                    <input type="date" id="tanggal-upload">
                </div>
                <div class="form-group">
                    <button class="search-btn">Cari</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>