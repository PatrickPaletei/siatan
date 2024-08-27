<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Surat</title>
    <link rel="stylesheet" href="/css/lihatsurat.css">
    <link rel="stylesheet" href="/css/datasurat.css">
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.4/css/dataTables.dataTables.min.css">

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
                @foreach(range(1, 5) as $id)
                @php
                $isActive = $bidangId === null || $bidangId == $id;
                $isSelected = $selectedMenuId == $id;
                @endphp
                <button data-id="{{ $id }}"
                    class="{{ $isSelected ? 'active' : '' }} {{ !$isActive ? 'inactive' : '' }}"
                    {{ !$isActive ? 'disabled' : '' }}>
                    @switch($id)
                    @case(1)
                    Sekretariat
                    @break
                    @case(2)
                    Kesehatan Masyarakat
                    @break
                    @case(3)
                    Pencegahan dan Pengendalian Penyakit
                    @break
                    @case(4)
                    Pelayanan Kesehatan
                    @break
                    @case(5)
                    Sumber Daya Kesehatan
                    @break
                    @endswitch
                </button>
                @endforeach
            </div>
            <div class="logout" onclick="window.location.href='{{route('bidang')}}'">
                <button>logout</button>
            </div>
        </div>
        <div class="main-content">
            <h1>Detail Surat</h1>
            <div class-"container">
                

            </div>
        </div>
    </div>


</body>

</html>