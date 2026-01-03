<!DOCTYPE html>
<html>
<head>
    <title>SIPem UMKM Kampus</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:white;
            margin: 0;
        }
        
        header {
            background-color:black;
            color: white;
            padding: 20px;
        }
        main {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh -80px);
        }
        .card {
            background: white;
            padding: 25px;
            max-width: 400px;
            border-radius: 6px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            text-align: center;
        }
        a {
            display: block;
            margin-top: 10px;
            color: blue;
            
        }
    </style>
</head>
<body>

<header>
    <h2>SIPemUMKM Kampus</h2>
</header>

<main>
    <div class="card">
        <h3>Selamat Datang</h3>
        <p>Sistem Informasi Pendataan UMKM Kampus</p>

        <a href="/login">Login Admin</a>
        <a href="/register">Register</a>
    </div>
</main>

</body>
</html>