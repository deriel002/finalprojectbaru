<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Pet Zoo - Eksplorasi Hewan</title>
  <style>
    body {
      font-family: 'Comic Sans MS', cursive, sans-serif;
      background-color: #fff5e1;
      margin: 0;
      padding: 0;
      color: #333;
    }
    header {
      background-color: #ffcc70;
      padding: 20px;
      text-align: center;
      border-bottom: 5px dashed #f88d70;
    }
    header h1 {
      font-size: 2.5rem;
      margin: 0;
      color: #d94f4f;
    }
    header p {
      margin-top: 10px;
      font-size: 1.3rem;
      color: #35281b;
    }
    .animal-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
      padding: 20px;
    }
    .animal-card {
      background-color: #fff;
      border-radius: 15px;
      box-shadow: 0 5px 10px rgba(0,0,0,0.1);
      text-align: center;
      padding: 15px;
      transition: transform 0.3s ease;
      cursor: pointer;
    }
    .animal-card:hover {
      transform: scale(1.05);
    }
    .animal-card img {
      width: 100px;
      height: 100px;
      object-fit: contain;
      margin-bottom: 10px;
    }
    .animal-card h2 {
      margin: 10px 0 5px;
      color: #ff7070;
    }
    .animal-card p {
      font-size: 0.95rem;
      color: #666;
    }
  </style>
</head>
<body>
  <header>
    <h1>Pet Zoo 🐾</h1>
    <p>Ayo eksplorasi hewan-hewan lucu!</p>
  </header>

  <main class="animal-grid">
    <div class="animal-card" onclick="toggleSound('kucing')">
      <img src="{{ asset('img/kucing.png') }}" alt="Kucing" />
      <h2>Kucing</h2>
      <p>Mengeong manja dan suka tidur 😸</p>
    </div>
    <div class="animal-card" onclick="toggleSound('anjing')">
      <img src="{{ asset('img/anjing.png') }}" alt="Anjing" />
      <h2>Anjing</h2>
      <p>Setia dan suka bermain bola!</p>
    </div>
    <div class="animal-card" onclick="toggleSound('kelinci')">
      <img src="{{ asset('img/kelinci.png') }}" alt="Kelinci" />
      <h2>Kelinci</h2>
      <p>Suka wortel dan lompat-lompat!</p>
    </div>
    <div class="animal-card" onclick="toggleSound('burung')">
      <img src="{{ asset('img/burung.png') }}" alt="Burung" />
      <h2>Burung</h2>
      <p>Terbang tinggi dan bernyanyi merdu~</p>
    </div>
  </main>

  <audio id="kucing" src="{{ asset('audio/kucing.mp3') }}"></audio>
  <audio id="anjing" src="{{ asset('audio/anjing.mp3') }}"></audio>
  <audio id="kelinci" src="{{ asset('audio/kelinci.mp3') }}"></audio>
  <audio id="burung" src="{{ asset('audio/burung.mp3') }}"></audio>

  <script>
    const sounds = {};

    function toggleSound(id) {
      const sound = document.getElementById(id);
      if (!sound) return;

      if (!(id in sounds)) {
        sounds[id] = false;
      }

      if (sounds[id]) {
        sound.pause();
        sounds[id] = false;
      } else {
        // Pause semua suara lain supaya gak tumpuk
        Object.keys(sounds).forEach(key => {
          if (sounds[key]) {
            document.getElementById(key).pause();
            sounds[key] = false;
          }
        });

        sound.currentTime = 0;
        sound.play();
        sounds[id] = true;

        sound.onended = () => {
          sounds[id] = false;
        };
      }
    }
  </script>
</body>
</html>
