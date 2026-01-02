<h2>Tambah Data UMKM</h2>

<form method="POST" action="/admin/umkm">
    @csrf

    <input type="text" name="nama_umkm" placeholder="Nama UMKM"><br><br>
    <input type="text" name="kategori" placeholder="Kategori"><br><br>
    <input type="text" name="status" placeholder="Status"><br><br>

    <button type="submit">Simpan</button>
</form>
<a href="/admin/umkm">Kembali ke Daftar UMKM</a>