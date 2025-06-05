<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <style>
    body {
      font-family: 'Comic Sans MS', cursive;
      background-color: #fff5e1;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background-image: radial-gradient(#f7c6b9 1px, transparent 1px);
      background-size: 20px 20px;
    }

    .container {
      background-color: #ffe4c9;
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      width: 300px;
      text-align: center;
    }

    h2 {
      color: #d94f4f;
      margin-bottom: 20px;
    }

    input {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border: none;
      border-radius: 10px;
      background-color: #fff;
    }

    button {
      background-color: #ff9a8b;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 15px;
      margin-top: 10px;
      cursor: pointer;
      width: 100%;
      font-weight: bold;
    }

    button:hover {
      background-color: #ffb3a7;
    }

    a {
      display: block;
      margin-top: 10px;
      font-size: 0.9rem;
      color: #333;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }

    .error-list {
      color: red;
      text-align: left;
      margin-bottom: 15px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Register</h2>

    {{-- Tampilkan error validasi --}}
    @if ($errors->any())
      <div class="error-list">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    {{-- Tampilkan notifikasi sukses --}}
    @if (session('success'))
      <p style="color: green">{{ session('success') }}</p>
    @endif

    <form method="POST" action="{{ route('register.submit') }}">
      @csrf
      <input type="text" name="username" placeholder="Username" value="{{ old('username') }}" required>
      <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="tel" name="phone" placeholder="Nomor Telepon" value="{{ old('phone') }}" required>
      <button type="submit">Daftar</button>
    </form>
    <a href="{{ route('login.form') }}">Sudah punya akun? Login</a>
  </div>
</body>
</html>
