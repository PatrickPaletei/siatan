<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SI-ATAN Login</title>
    <link rel="stylesheet" href="/css/login.css">
</head>
<body>
    <div class="container">
        <div class="logo-section">
            <img src="/asset/logo_siatan.png" alt="SI-ATAN Logo" class="logo">
            <p class="subtext">Sistem Informasi Arsip Kesehatan</p>
        </div>
        <div class="form-section">
            <div class="form-wrapper">
                <form id="loginForm" action="{{route('loginPost')}}" method="post">
                    @csrf
                    <h2>Masuk Akun</h2>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                    <button type="submit">Masuk</button>
                    <p>Belum punya akun? <a href="register">Daftar sekarang</a></p>
                </form>
            </div>
        </div>
    </div>
    <script src="login.js"></script>
</body>
</html>