<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SI-ATAN - Upload Surat</title>
    <link rel="stylesheet" href="/css/sdk.css">
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
                <button>Sumber Daya Kesehatan</button>
                <a href="#">Upload Surat</a>
                <a href="{{route('lihatSurat',['menu'=>5])}}">Lihat Surat</a>
            </div>
            <button class="logout" onclick="window.location.href='{{route('bidang')}}'">Logout</button>
        </div>
        <div class="main-content">
            <h2>UPLOAD SURAT</h2>
            <form method="post" enctype="multipart/form-data" id="uploadForm" action="{{ route('sdkPost') }}">
                @csrf
                <label for="sub-bagian">Sub Bidang</label>
                <select id="sub-bagian" name="sub_bidang_id">
                    <option value="" selected disabled>Pilih sub bagian</option>
                    @foreach($sub_bidang as $b)
                    <option value="{{ $b->sub_bidang_id }}">{{ $b->nama_sub_bidang }}</option>
                    @endforeach
                </select>

                <label for="jenis-surat">Jenis Surat</label>
                <select id="sub-bagian" name="jenis_surat">
                    <option value="" selected disabled>Pilih Jenis Surat</option>
                    <option value="Surat Keluar">Surat Keluar</option>
                    <option value="Surat Masuk">Surat Masuk</option>
                </select>

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