<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SI-ATAN - Upload Surat</title>
    <link rel="stylesheet" href="/css/p2p.css">
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
                <button>Pencegahan Dan Pengendalian Penyakit</button>
                <a href="#">Upload Surat</a>
                <a href="{{route('lihatSurat')}}">Lihat Surat</a>
            </div>
            <button class="logout" onclick="window.location.href='{{route('bidang')}}'">Logout</button>
        </div>
        <div class="main-content">
            <h2>UPLOAD SURAT</h2>
            <form id="uploadForm" action="{{ route('p2pPost') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="sub-bagian">Sub Bagian</label>
                <select id="sub-bagian" name="sub-bagian">
                    <option value="" selected disabled>Pilih sub bagian</option>
                    <option value="Surveilans dan Imunisasi">Surveilans dan Imunisasi</option>
                    <option value="Pengendalian Penyakit Tidak Menular">Pengendalian Penyakit Tidak Menular</option>
                    <option value="Kesehatan Lingkungan, Kesehatan Kerja dan Olahraga">Kesehatan Lingkungan, Kesehatan Kerja dan Olahraga</option>
                </select>

                <label for="jenis-surat">Jenis Surat</label>
                <input type="text" id="jenis-surat" name="jenis-surat">

                <label for="nama-surat">Judul Surat</label>
                <input type="text" id="nama-surat" name="judul_surat"
                    @error('judul_surat') is-invalid @enderror">
                @error('judul_surat')
                <p>{{ $message }}</p>
                @enderror

                <label for="tanggal-upload">Tanggal Upload Surat</label>
                <input type="date" id="tanggal-upload" name="tanggal_surat"
                    @error('tanggal_surat') is-invalid @enderror">
                @error('tanggal_surat')
                <p>{{ $message }}</p>
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