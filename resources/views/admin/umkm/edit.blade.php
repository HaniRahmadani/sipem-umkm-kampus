@extends('layouts.app')

@section('content')
<div style="max-width:600px;margin:auto;">
    <h3>Edit Data UMKM</h3>

    <form method="POST" action="/admin/umkm/{{ $umkm->id }}">
        @csrf
        @method('PUT')

        <div style="margin-bottom:10px;">
            <label>Nama UMKM</label>
            <input type="text" name="nama_umkm"
                   value="{{ $umkm->nama_umkm }}"
                   style="width:100%;padding:8px;">
        </div>

        <div style="margin-bottom:10px;">
            <label>Kategori</label>
            <input type="text" name="kategori"
                   value="{{ $umkm->kategori }}"
                   style="width:100%;padding:8px;">
        </div>

        <div style="margin-bottom:10px;">
            <label>Status</label>
            <select name="status" style="width:100%;padding:8px;">
                <option value="AKTIF" {{ $umkm->status == 'AKTIF' ? 'selected' : '' }}>AKTIF</option>
                <option value="NONAKTIF" {{ $umkm->status == 'NONAKTIF' ? 'selected' : '' }}>NONAKTIF</option>
            </select>
        </div>

        <div style="margin-bottom:10px;">
            <label>Jam Operasional</label>
            <input type="text" name="jam_operasional"
                   value="{{ $umkm->jam_operasional }}"
                   style="width:100%;padding:8px;">
        </div>

        <div style="margin-bottom:15px;">
            <label>Alamat</label>
            <input type="text" name="alamat"
                   value="{{ $umkm->alamat }}"
                   style="width:100%;padding:8px;">
        </div>

        <button type="submit" style="padding:10px 20px;">
            Update
        </button>

        <a href="/admin/umkm" style="margin-left:10px;">
            Batal
        </a>
    </form>
</div>
@endsection