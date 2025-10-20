<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Perpustakaan Mini</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: url("images/bgunej.webp") no-repeat center center fixed;
      background-size: cover;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      overflow: hidden;
    }

    body::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.4);
      backdrop-filter: blur(5px);
      z-index: 0;
    }

    .login-card {
      position: relative;
      z-index: 1;
      background: rgba(255, 255, 255, 0.148);
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.525);
      overflow: hidden;
      max-width: 400px;
      width: 100%;
      backdrop-filter: blur(10px);
    }

    .login-header {
      background: rgba(255, 255, 255, 0.217); /* semi transparan */
      backdrop-filter: blur(10px); /* efek kaca buram */
      color: #111111;
      padding: 2rem;
      text-align: center;
      border-bottom: 1px solid rgba(255,255,255,0.2);
    }

    .login-header h2 {
      font-weight: 700;
      text-shadow: 0 1px 3px rgba(0,0,0,0.3);
      color: #000000;
    }

    .login-header p {
      color: #090909;
    }

    .login-header img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      margin-bottom: 1rem;
      border: 3px solid rgba(255,255,255,0.6);
      background-color: rgba(255, 255, 255, 0);
      object-fit: cover;
    }

    .login-body {
      padding: 2rem;
    }

    .btn-login {
      background: linear-gradient(135deg, #27a43a 100%);
      border: none;
      padding: 0.75rem;
      font-weight: bold;
    }

    .btn-login:hover {
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(82, 209, 28, 0.4);
    }
  </style>
</head>
<body>
  <div class="login-card">
    <div class="login-header">
      <img src="images/unej.png" alt="Logo Perpustakaan">
      <h2>Perpustakaan Universitas Jember</h2>
      <p class="mb-0">Silakan masuk untuk melanjutkan</p>
    </div>

    <div class="login-body">
      <form action="{{ route('login.process') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" id="username" name="username" required placeholder="Masukkan username">
        </div>
        <div class="mb-4">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" required placeholder="Masukkan password">
        </div>
        <button type="submit" class="btn btn-primary btn-login w-100">
          LOGIN
        </button>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
