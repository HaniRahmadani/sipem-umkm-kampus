<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light">

    <div class="container">
    <div class="row justify-content-center align-items-center min-vh-100">
    <div class="col-md-5">

    <div class="card shadow-sm">
    <div class="card-body p-4">

    <h4 class="text-center mb-4 fw-bold"> Registrasi Admin </h4>

                    
        @if ($errors->any())
        <div class="alert alert-danger"><ul class="mb-0">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </ul>
        </div>
        @endif

            <form method="POST" action="/register">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                        <input
                            type="text"
                            name="name"
                            class="form-control"
                            placeholder="Masukkan nama"
                            value="{{ old('name') }}"
                            required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                placeholder="Masukkan email"
                                value="{{ old('email') }}"
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
                                required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">
                            Register
                        </button>
                    </form>

                    <div class="text-center mt-3">
                        <a href="/login" class="text-decoration-none">
                            Sudah punya akun? Login
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>