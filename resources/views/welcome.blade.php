<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Selamat Datang | SI PemUMKM Kampus</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            background: linear-gradient(
                to right,
                rgba(0,0,0,0.45),
                rgba(0,0,0,0.45)
            ),
            url("{{ asset('images/bgkiri.jpg') }}") left center / 50% 100% no-repeat,
            url("{{ asset('images/bgkanan.jpg') }}") right center / 50% 100% no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
        }

        .welcome-card {
            background: rgba(255, 255, 255, 0.92);
            padding: 30px;
            border-radius: 12px;
            width: 380px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.25);
        }

        .welcome-card h3 {
            font-weight: bold;
        }

        .btn {
            width: 100%;
        }

        .link-user {
            display: block;
            margin-top: 10px;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <div class="welcome-card">
        <h3>Selamat Datang</h3>
        <p class="text-muted mb-4">
            Sistem Informasi Pendataan UMKM Kampus
        </p>

        <a href="/login-umkm" class="btn btn-primary mb-2">
            Login Pemilik UMKM
        </a>

        <a href="/login" class="btn btn-outline-secondary mb-2">
            Login Admin
        </a>

        <a href="/register" class="btn btn-outline-dark mb-3">
            Register
        </a>

        <a href="{{ url('/user/umkm') }}">
    Masuk sebagai User
</a>
    </div>

    
</body>
</html>