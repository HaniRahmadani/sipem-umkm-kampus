<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-dark bg-dark mb-4">
    <div class="container">
        <span class="navbar-brand">SIPem UMKM Kampus</span>

        @auth
        <form action="/logout" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-sm btn-light">
                Logout
            </button>
        </form>
        @endauth
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

</body>
</html>
