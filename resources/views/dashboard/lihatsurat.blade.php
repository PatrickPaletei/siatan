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
            <h1>Lihat Surat</h1>
            <div class-"container">
                <table id="myTable" class="display">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Surat</th>
                            <th>Nama Surat</th>
                            <th>Nama Sub Bidang</th>
                            <th>Tanggal Upload</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($all_data as $index => $surat)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $surat->jenis_surat }}</td>
                            <td>{{ $surat->judul_surat }}</td>
                            <td>{{ $surat->sub_bidang->nama_sub_bidang }}</td>
                            <td>{{ \Carbon\Carbon::parse($surat->tanggal_surat)->format('d/m/Y') }}</td>
                            <td>
                                <a href="{{route('detailSurat',$surat->surat_id)}}" class="a-option">Detail</a>
                                <form action="{{ route('dataSuratDestroy', ['surat_id' => $surat->surat_id]) }}" method="POST" class="delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="menuId" value="{{ $selectedMenuId }}">
                                    <button type="submit" class="btn-option">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty

                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.delete-form').forEach(form => {
                form.addEventListener('submit', function(event) {
                    event.preventDefault();
                    const form = this;
                    Swal.fire({
                        title: 'Are you sure?',
                        text: 'You won\'t be able to revert this!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                });
            });
        });
        $(document).ready(function() {
            $('#myTable').DataTable();

        });
    </script>
</body>

</html>