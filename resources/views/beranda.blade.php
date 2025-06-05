<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Beranda - Little Eksplorer</title>
  <style>
    body {
      font-family: 'Comic Sans MS', cursive, sans-serif;
      background-color: #fff5e1;
      background-image: radial-gradient(#f7c6b9 1px, transparent 1px);
      background-size: 20px 20px;
      margin: 0;
      padding: 0;
      color: #333;
    }

    .header {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px 40px;
      background-color: #f27b7f;
      color: white;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      position: relative;
    }

    .header h1 {
      margin: 0;
      font-size: 32px;
      font-weight: bold;
    }

    .profile-button {
      position: absolute;
      right: 40px;
      top: 50%;
      transform: translateY(-50%);
    }

    .profile-button img {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      border: 2px solid white;
      cursor: pointer;
      transition: transform 0.3s ease;
      object-fit: cover;
      display: block;
      aspect-ratio: 1 / 1;
    }

    .profile-button img:hover {
      transform: scale(1.1);
    }

    .features {
      max-width: 1200px;
      margin: 60px auto 0 auto;
      display: flex;
      justify-content: center;
      gap: 40px;
      padding: 0 20px;
    }

    .feature-card {
      background-color: #f9938c;
      border-radius: 15px;
      text-align: center;
      padding: 30px 20px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      transition: background-color 0.3s ease, transform 0.2s ease;
      text-decoration: none;
      color: black;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      width: 250px;
      height: 280px;
      flex-shrink: 0;
    }

    .feature-card:hover {
      background-color: #ffb3a7;
      transform: translateY(-5px);
    }

    .feature-card img {
      width: 140px;
      height: auto;
      margin-bottom: 15px;
    }

    .feature-card p {
      font-weight: bold;
      font-size: 20px;
      margin: 0;
    }
  </style>
</head>
<body>
  <header class="header">
    <h1>Little Eksplorer</h1>
    <a href="{{ route('profile') }}" class="profile-button" title="Profil">
      <img src="{{ asset('img/profile.png') }}" alt="Profil" />
    </a>
  </header>

  <main class="features">
    <a href="{{ route('daily') }}" class="feature-card">
      <img src="{{ asset('img/daily.png') }}" alt="Daily Adventure" />
      <p>Daily Adventure</p>
    </a>
    <a href="{{ route('petzoo') }}" class="feature-card">
      <img src="{{ asset('img/petzoo.png') }}" alt="Pet Zoo" />
      <p>Pet Zoo</p>
    </a>
    <a href="{{ route('games') }}" class="feature-card">
      <img src="{{ asset('img/games.png') }}" alt="Mini Games" />
      <p>Mini Games</p>
    </a>
    <a href="{{ route('edu') }}" class="feature-card">
      <img src="{{ asset('img/edu.png') }}" alt="Tontonanku" />
      <p>Tontonanku</p>
    </a>
  </main>
</body>
</html>
