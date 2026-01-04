<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data UMKM</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background:white;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background: white;
            padding: 25px;
            width: 400px;
            border-radius: 8px;
            box-shadow: black;
        }

        h2 {
            margin-top: 0;
            text-align: center;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 15px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        button {
            margin-top: 20px;
            width: 100%;
            padding: 10px;
            background:blue;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background: blue;
        }

        .back {
            text-align: center;
            margin-top: 15px;
        }

        .back a {
            text-decoration: none;
            color: #2d89ef;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Tambah Data UMKM</h2>

    <form method="POST" action="/admin/umkm">
        @csrf

        <label>Nama UMKM</label>
        <input type="text" name="nama_umkm" required>

        <label>Nama Pemilik</label>
        <input type="text" name="pemilik" required>

        <label>Kontak pemilik </label>
        <input type="text" name="kontak" required>

        <label> Deskripsi</label>
        <input type="text" name="deskripsi" required>

        <label>Kategori</label>
        <input type="text" name="kategori" required>

        <label>Status</label>
        <input type="text" name="status" required>

        <label>Jam Operasional</label>
        <input type="text" name="jam_operasional" required>

        <label> Alamat</label>
        <input type="text" name="alamat" required>

        <button type="submit">Simpan</button>
    </form>

    <div class="back">
        <a href="/admin/umkm">Kembali ke Daftar UMKM</a>
    </div>
</div>

</body>
</html>