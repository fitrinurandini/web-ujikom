<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet"> <!-- Add this line for Bootstrap Icons -->
    <title>Login Admin</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 400px;
        }
        .login-container h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #5A2E8C;
        }
        .logo {
            display: block;
            margin: 0 auto 20px;
            width: 80px; /* Ganti ukuran logo sesuai kebutuhan */
            height: 80px;
            object-fit: contain;
        }
        .alert {
            font-size: 0.875rem;
        }
        .form-label {
            font-weight: 500;
            color: #333;
        }
        .form-control {
            border-radius: 5px;
            padding: 0.75rem;
            box-shadow: none;
        }
        .btn-primary {
            background-color: #5A2E8C;
            border-color: #5A2E8C;
            padding: 10px 15px;
            width: 100%;
            font-size: 1rem;
        }
        .btn-primary:hover {
            background-color: #4e2483;
            border-color: #4e2483;
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
            padding: 10px 15px;
            width: 100%;
            font-size: 1rem;
        }
        .btn-secondary:hover {
            background-color: #5a6368;
            border-color: #5a6368;
        }
        .footer-text {
            text-align: center;
            margin-top: 20px;
            color: #888;
            font-size: 0.875rem;
        }
        .form-check-label {
            font-weight: normal;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!-- Logo Section -->
        <img src="/asset/img/loogo1.png" alt="Logo" class="logo">
        
        <h1>Admin Login</h1>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $item)
                        <li>{{ $item }}</li>  
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="{{ old('email') }}" name="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" required>
            </div>
            <div class="mb-3 d-flex justify-content-between align-items-center">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                    <label class="form-check-label" for="remember">Remember Me</label>
                </div>
            </div>
            <div class="mb-3 d-grid">
                <button name="submit" type="submit" class="btn btn-primary">Login</button>
            </div>
            <div class="mb-3 d-grid">
                <a href="/" class="btn btn-secondary">
                    <i class="bi bi-arrow-left-circle"></i> Kembali
                </a>
            </div>
        </form>

        <div class="footer-text">
            <p>&copy; 2025 Admin Panel</p>
        </div>
    </div> 
</body>
</html>
