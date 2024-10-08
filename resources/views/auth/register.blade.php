<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SI-ATAN Registration</title>
    <link rel="stylesheet" href="/css/register.css">
    <script>
        function validateForm(event) {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirm-password").value;

            if (password !== confirmPassword) {
                alert("Password Tidak Sama!");
                event.preventDefault(); // Prevent form submission
                return false; // Ensure form submission is blocked
            }
            return true; // Allow form submission
        }

        function toggleBidangDropdown() {
            var adminType = document.getElementById("admin-type").value;
            var bidangSelect = document.getElementById("bidang-container");

            if (adminType === "bidang") {
                bidangSelect.style.display = "block"; // Show the Bidang dropdown
            } else {
                bidangSelect.style.display = "none"; // Hide the Bidang dropdown
            }
        }

        window.onload = function() {
            toggleBidangDropdown(); // Ensure the correct state on page load
            document.getElementById("admin-type").addEventListener("change", toggleBidangDropdown);
        };
    </script>
</head>

<body>
    <div class="container">
        <div class="logo-section">
            <img src="/asset/logo_siatan.png" alt="SI-ATAN Logo" class="logo">
            <p class="subtext">Sistem Informasi Arsip Kesehatan</p>
        </div>
        <div class="form-section">
            <form action="{{route('registerPost')}}" method="post">
                @csrf
                <h2>Daftar Akun</h2>
                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                <label for="confirm-password">Ulangi Password</label>
                <input type="password" id="confirm-password" name="confirm_password" required>

                <label>Jenis Admin</label>
                <select id="admin-type" name="admin-type" required>
                    <option value="">Pilih Jenis Admin</option>
                    <option value="pusat">Admin Pusat</option>
                    <option value="bidang">Admin Bidang</option>
                </select>

                <div id="bidang-container" style="display: none;">
                    <label>Bidang</label>
                    <select id="bidang" name="bidang_id">
                        <option value="" selected disabled>Pilih Bidang</option>
                        @foreach($bidang as $b)
                        <option value="{{ $b->bidang_id }}">{{ $b->nama_bidang }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit">Daftar</button>
                <p>Sudah punya akun? <a href="{{route('login')}}">Login sekarang</a></p>
            </form>
        </div>
    </div>
</body>

</html>