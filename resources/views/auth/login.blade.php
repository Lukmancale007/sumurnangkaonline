<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="card shadow p-4" style="width: 25rem;">
        <h3 class="mb-4 text-center">Login</h3>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" name="email" required autofocus>
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>

            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Masuk</button>
            </div>
        </form>
    </div>
</body>

</html>
