@extends('layouts.app')

@section('title', 'Data UMKM')

@section('content')

<h3 class="mb-3">Data UMKM Kampus</h3>

{{-- FORM SEARCH --}}
<form method="GET" class="mb-3 d-flex" style="max-width:400px">
    <input
        type="text"
        name="search"
        value="{{ request('search') }}"
        class="form-control me-2"
        placeholder="Cari UMKM...">
    <button class="btn btn-secondary">Cari</button>
</form>

<a href="/admin/umkm/create" class="btn btn-primary mb-4">
    Tambah UMKM
</a>

<div class="row">
    @forelse($umkm as $u)
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">

                <div class="card-body d-flex flex-column">
                    <h5 class="fw-bold mb-2">
                        {{ $u->nama_umkm }}
                    </h5>

                    <p class="mb-1">
                        <strong>Kategori:</strong><br>
                        {{ $u->kategori }}
                    </p>

                    <p class="mb-1">
                        <strong>Jam Operasional:</strong><br>
                        {{ $u->jam_operasional ?? '-' }}
                    </p>

                    <p class="mb-2">
                        <strong>Alamat:</strong></br>
                        {{ $u->alamat ?? '-'}}
                    </p>

                    <p class="mb-2">
                        <strong>Status:</strong><br>
                        <span class="badge {{ strtolower($u->status) == 'aktif' ? 'bg-success' : 'bg-secondary' }}">
                            {{ ucfirst($u->status) }}
                        </span>
                    </p>

                    <div class="mt-auto d-flex flex-wrap gap-1">
                        <a href="/admin/monitoring/create/{{ $u->id }}"
                           class="btn btn-info btn-sm">
                            Monitoring
                        </a>

                        <a href="/admin/umkm/{{ $u->id }}/edit"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="/admin/umkm/{{ $u->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin hapus data UMKM ini?')">
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    @empty
        <div class="col-12">
            <div class="alert alert-warning">
                Data UMKM belum tersedia.
            </div>
        </div>
    @endforelse
</div>

<div class="mt-3">
    {{ $umkm->appends(request()->query())->links() }}
</div>

@endsection