<!DOCTYPE html>
<html>
<head>
    <title>Admin UMKM</title>
</head>
<body>

<h2>Halaman Admin - Data UMKM</h2>

<p>Login sebagai admin</p>

<a href="/admin/umkm/create">+ Tambah UMKM</a>
<br><br>

<table border="1" cellpadding="8">
    <tr>
        <th>Nama UMKM</th>
        <th>Kategori</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>

    @foreach($umkm as $u)
    <tr>
        <td>{{ $u->nama_umkm }}</td>
        <td>{{ $u->kategori }}</td>
        <td>{{ $u->status }}</td>
        <td>
            <a href="/admin/umkm/{{ $u->id }}/edit">Edit</a>
            |
            <form action="/admin/umkm/{{ $u->id }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

</body>
</html>
