@extends('layouts.app')

@section('title', 'Tambah Monitoring')

@section('content')
<div class="container">
    <h3>Tambah Monitoring - {{ $umkm->nama_umkm }}</h3>

    <form method="POST" action="/admin/monitoring">
        @csrf

        <input type="hidden" name="umkm_id" value="{{ $umkm->id }}">

        <div class="mb-3">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control">
        </div>

        <div class="mb-3">
            <label>Catatan</label>
            <textarea name="catatan" class="form-control"></textarea>
        </div>

        <button class="btn btn-primary">Simpan</button>
        <a href="/admin/umkm" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
