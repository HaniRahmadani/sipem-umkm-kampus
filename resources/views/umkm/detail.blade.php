@extends('layouts.app')

@section('title', 'Detail UMKM')

@section('content')
<div class="container">
    <h3>{{ $data->nama_umkm }}</h3>

    <p><strong>Kategori:</strong> {{ $data->kategori }}</p>
    <p>
        <strong>Status:</strong>
        <span class="badge bg-success">{{ $data->status }}</span>
    </p>

    <hr>

    <h5>Monitoring UMKM</h5>

    @if($data->monitoring->count())
        <table class="table table-bordered">
            <tr>
                <th>Tanggal</th>
                <th>Catatan</th>
            </tr>

            @foreach($data->monitoring as $m)
            <tr>
                <td>{{ $m->tanggal }}</td>
                <td>{{ $m->catatan }}</td>
            </tr>
            @endforeach
        </table>
    @else
        <p class="text-muted">Belum ada data monitoring.</p>
    @endif

    <a href="/" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
