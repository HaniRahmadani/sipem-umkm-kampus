@extends('layouts.app')

@section('title', 'UMKM Kampus')

@section('content')

<div class="d-flex justify-content-end mb-3">
    <a href="/" class="btn btn-outline-secondary btn-sm">
        Kembali ke Beranda
    </a>
</div>

<h3 class="mb-4 text-center">Sistem Informasi Pendataan UMKM Kampus</h3>

<div class="row">
    @forelse($umkms as $u)
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
                        <strong>Alamat:</strong><br>
                        {{ $u->alamat ?? '-' }}
                    </p>

                    <p class="mb-3">
                        <span class="badge {{ strtolower($u->status) === 'aktif' ? 'bg-success' : 'bg-secondary' }}">
                            {{ ucfirst($u->status) }}
                        </span>
                    </p>

                    <a href="{{ url('/user/umkm/'.$u->id) }}" class="btn btn-primary mt-auto">
                        Lihat Detail
                    </a>

                </div>
            </div>
        </div>
    @empty
        <div class="col-12">
            <div class="alert alert-warning text-center">
                Data UMKM belum tersedia
            </div>
        </div>
    @endforelse
</div>

@endsection