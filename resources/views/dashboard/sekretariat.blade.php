<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SI-ATAN - Upload Surat</title>
    <link rel="stylesheet" href="/css/sekretariat.css">
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
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
                <button>Sekretariat</button>
                <a href="#">Upload Surat</a>
                <a href="{{route('lihatSurat')}}">Lihat Surat</a> <!-- Link mengarah ke halaman "Lihat Surat" -->
            </div>
            <button class="logout" onclick="window.location.href='{{route('bidang')}}'">Logout</button>
        </div>
        <div class="main-content">
            <h2>UPLOAD SURAT</h2>
            <form method="post" enctype="multipart/form-data" id="uploadForm" action="{{ route('sekretariatPost') }}">
                @csrf
                <label for="sub-bagian">Sub Bagian</label>
                <select id="sub-bagian" name="sub-bagian">
                    <option value="" selected disabled>Pilih sub bagian</option>
                    <option value="Umum dan Kepengawaian">Umum dan Kepengawaian</option>
                    <option value="Koordinator, Perencanaan dan Evaluasi">Koordinator, Perencanaan dan Evaluasi</option>
                    <option value="Keuangan dan Aset">Keuangan dan Aset</option>
                </select>
                
                </select>

                <label for="jenis-surat">Jenis Surat</label>
                <input type="text" id="jenis-surat" name="jenis-surat">

                <label for="nama-surat">Judul Surat</label>
                <input type="text" id="nama-surat" name="judul_surat"
                @error('judul_surat') is-invalid @enderror">
                @error('judul_surat')
                    <p >{{ $message }}</p>
                @enderror

                <label for="tanggal-upload">Tanggal Upload Surat</label>
                <input type="date" id="tanggal-upload" name="tanggal_surat" 
                @error('tanggal_surat') is-invalid @enderror">
                @error('tanggal_surat')
                    <p >{{ $message }}</p>
                @enderror

                <label for="file-upload">File Upload</label>
                <input type="file" id="file-upload" name="file">
                
                <div class="buttons">
                    <button type="submit">Upload</button>
                </div>
            </form>
        </div>
    </div>
    @if (session('berhasil'))
        <script>
            alert("{{ session('berhasil') }}");
        </script>
    @endif
</body>
</html>
