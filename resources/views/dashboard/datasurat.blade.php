<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Surat</title>
    <link rel="stylesheet" href="/css/datasurat.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <div class="logo">
                <img src="/asset/logo.png" alt="SIATAN Logo">
            </div>
            <h1>SISTEM INFORMASI ARSIP KESEHATAN</h1>
            @foreach(range(1, 5) as $id)
            @php
            $isSelected = $selectedMenuId == $id;
            @endphp
            <button class="menu-button {{ $isSelected ? 'active' : '' }}" data-id="{{ $id }}">
                @switch($id)
                @case(1) Sekretariat @break
                @case(2) Kesehatan Masyarakat @break
                @case(3) Pencegahan dan Pengendalian Penyakit @break
                @case(4) Pelayanan Kesehatan @break
                @case(5) Sumber Daya Kesehatan @break
                @endswitch
            </button>
            @endforeach
            <button class="logout-button">Logout</button>
        </div>

        <div class="content">
            <h2>Data Surat</h2>
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @elseif(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif
            <div class="form-group">
                <label for="category" name="selectedSubBidangName">{{ $selectedSubBidangName ? $selectedSubBidangName : '' }}</label>
            </div>
            <div class="search-group">
                <input type="text" placeholder="surat masuk">
                <input type="text" placeholder="surat dinas">
                <input type="text" placeholder="10/09/2024">
                <button>Cari</button>
            </div>
            <table>
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
                    @forelse($search_results as $index => $surat)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $surat->jenis_surat }}</td>
                        <td>{{ $surat->judul_surat }}</td>
                        <td>{{ $surat->sub_bidang->nama_sub_bidang }}</td>
                        <td>{{ \Carbon\Carbon::parse($surat->tanggal_surat)->format('d/m/Y') }}</td>
                        <td>
                            <form action="{{ route('dataSuratDestroy', ['surat_id' => $surat->surat_id]) }}" method="POST" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="menuId" value="{{ $selectedMenuId }}">
                                <button type="submit" class="btn-option">Hapus</button>
                            </form>
                            <button class="btn-option">Detail</button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5">No data found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</body>
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
</script>

</html>