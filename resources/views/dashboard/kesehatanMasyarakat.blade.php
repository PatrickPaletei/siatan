<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SI-ATAN - Upload Surat</title>
    <link rel="stylesheet" href="/css/kesmas.css">
</head>
<body>
    <div class="profile-container">
        <img src="/asset/profile.png" alt="Profile Picture" class="profile-picture">
    </div>
    <div class="container">
        <div class="sidebar">
            <img src="/asset/logo.png" alt="SI-ATAN Logo" class="logo">
            <p>SISTEM INFORMASI</p>
            <p>ARSIP KESEHATAN</p>
            <div class="menu">
                <button>Kesehatan Masyarakat</button>
                <a href="#">Upload Surat</a>
                <a href="{{route('lihatSurat')}}">Lihat Surat</a>
            </div>
            <button class="logout" onclick="window.location.href='{{route('bidang')}}'">Logout</button>
        </div>
        <div class="main-content">
            <h2>UPLOAD SURAT</h2>
            <form id="uploadForm" action="#" method="post" enctype="multipart/form-data">
                <label for="sub-bagian">Sub Bagian</label>
                <select id="sub-bagian" name="sub-bagian">
                    <option value="" selected disabled>Pilih sub bagian</option>
                    <option value="Promosi Kesehatan dan Pemberdayaan Masyarakat">Promosi Kesehatan dan Pemberdayaan Masyarakat</option>
                    <option value="Kesga dan Gizi Masyarakat">Kesga dan Gizi Masyarakat</option>
                    <option value="Administrator Kesehatan Ahli Muda">Administrator Kesehatan Ahli Muda</option>
                </select>

                <label for="jenis-surat">Jenis Surat</label>
                <input type="text" id="jenis-surat" name="jenis-surat">

                <label for="nama-surat">Nama Surat</label>
                <input type="text" id="nama-surat" name="nama-surat">

                <label for="tanggal-upload">Tanggal Upload</label>
                <input type="date" id="tanggal-upload" name="tanggal-upload">

                <label for="file-upload">File Upload</label>
                <input type="file" id="file-upload" name="file-upload">
                
                <div class="buttons">
                    <button type="submit">Upload</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('uploadForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Mencegah submit form secara default
            window.location.href = 'proses.html'; // Arahkan ke halaman proses upload
        });
    </script>
</body>
</html>
