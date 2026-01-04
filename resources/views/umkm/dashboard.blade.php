<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Pemilik UMKM</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            margin: 0;
            background:
                linear-gradient(to right,
                    rgba(0,0,0,0.55),
                    rgba(0,0,0,0.15)
                ),
                url("{{ asset('images/bgkiri.jpg') }}") left center / 50% 100% no-repeat,
                url("{{ asset('images/bgkanan.jpg') }}") right center / 50% 100% no-repeat;
        }

        .panel-transparan {
            background: rgba(255, 255, 255, 0.88);
            border-radius: 14px;
            padding: 25px;
        }
    </style>
</head>
<body>

<div class="container py-4">

    <!-- PANEL TRANSPARAN (SAMPAI DAFTAR UMKM) -->
    <div class="panel-transparan">

        <!-- HEADER -->
        <div class="d-flex justify-content-between align-items-start mb-4">
            <div>
                <h3 class="fw-bold">Dashboard Pemilik UMKM</h3>
                <p class="mb-2">
                    Login sebagai: <b>{{ auth()->user()->email }}</b>
                </p>

                <a href="/umkm" class="btn btn-primary">
                    Kelola UMKM Saya
                </a>
            </div>

            <!-- LOGOUT KANAN -->
            <form action="{{ route('umkm.logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">
                    Logout
                </button>
            </form>
        </div>

        <h5 class="fw-semibold mb-3">Daftar UMKM</h5>

        <div class="row">
            @forelse($umkms ?? [] as $u)
                <div class="col-md-4 mb-3">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">
                                {{ $u->nama_umkm }}
                            </h5>

                            <p class="mb-1">
                                <b>Kategori:</b> {{ $u->kategori }}
                            </p>

                            <p class="mb-1">
                                <b>Jam Operasional:</b>
                                {{ $u->jam_operasional ?? '-' }}
                            </p>

                            <p class="mb-0">
                                <b>Alamat:</b> {{ $u->alamat }}
                            </p>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-muted">
                    Belum ada UMKM yang kamu miliki.
                </p>
            @endforelse
        </div>

    </div>
    <!-- END PANEL -->

</div>

</body>
</html>