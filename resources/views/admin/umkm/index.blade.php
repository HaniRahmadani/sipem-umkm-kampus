@extends('layouts.app')

@section('title', 'Data UMKM')

@section('content')
<h3>Data UMKM Kampus</h3>

{{-- FORM SEARCH --}}
<form method="GET" class="mb-3 d-flex" style="max-width:400px">
    <input
        type="text"
        name="search"
        value="{{ request('search') }}"
        class="form-control me-2"
        placeholder="Cari UMKM..."
    >
    <button class="btn btn-secondary">
        Cari
    </button>
</form>

<a href="/admin/umkm/create" class="btn btn-primary mb-3">
    Tambah UMKM
</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($umkm as $u)
        <tr>
            <td>{{ $u->nama_umkm }}</td>
            <td>{{ $u->kategori }}</td>
            <td>{{ $u->status }}</td>
            <td>
                <a href="/admin/monitoring/create/{{ $u->id }}" class="btn btn-info btn-sm">
                    Monitoring
                </a>

                <a href="/admin/umkm/{{ $u->id }}/edit" class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="/admin/umkm/{{ $u->id }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $umkm->appends(request()->query())->links() }}
@endsection
