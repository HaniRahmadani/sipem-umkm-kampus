<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Pemilik UMKM</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="col-md-4">
        <div class="card shadow-lg border-0">
            <div class="card-body p-4">

                <h4 class="text-center mb-4 fw-bold">
                    Login Pemilik UMKM
                </h4>

                {{-- ERROR --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        Email atau password salah
                    </div>
                @endif

                <form action="{{ url('/login-umkm') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input 
                            type="email" 
                            name="email" 
                            class="form-control" 
                            placeholder="Masukkan email"
                            required
                        >
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input 
                            type="password" 
                            name="password" 
                            class="form-control" 
                            placeholder="Masukkan password"
                            required
                        >
                    </div>

                    <button type="submit" class="btn btn-primary w-100">
                        Login
                    </button>
                </form>

                <div class="text-center mt-3">
                    <a href="/" class="text-decoration-none">
                         Kembali ke Beranda
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

</body>
</html>