<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Daily Adventure</title>
  <style>
    body {
      margin: 0;
      font-family: 'Comic Sans MS', cursive, sans-serif;
      background: url("{{ asset('img/bg-daily.png') }}") no-repeat center center fixed;
        background-size: cover;
    }
    
    .container {
      position: relative;
      width: 100%;
      height: 100vh;
      padding-top: 20px;
    }
    
    .back-button {
      position: absolute;
      top: 20px;
      left: 20px;
      width: 160px;
      cursor: pointer;
    }
    
    .page-title {
      text-align: center;
      font-size: 28px;
      color: #1d3557;
      margin-top: 60px;
      margin-bottom: 20px;
    }
    
    .adventure-box {
      background-color: #fff6eb;
      border-radius: 40px;
      width: 90%;
      max-width: 1000px;
      margin: 40px auto 0 auto;
      padding: 40px;
      text-align: center;
      box-shadow: 0 8px 16px rgba(0,0,0,0.15);
    }
    
    .sub-title {
      font-size: 24px;
      font-weight: bold;
      color: #1d3557;
      margin: 10px 0;
    }
    
    .instruction {
      font-size: 18px;
      color: #1d3557;
      margin-bottom: 30px;
    }
    
    .flowers {
      display: flex;
      justify-content: center;
      gap: 40px;
      margin-bottom: 30px;
    }
    
    .flowers img {
      width: 100px;
      height: auto;
    }
    
    .mission-button {
  background-color: #ffa07a;
  color: #1d3557;
  border-radius: 25px;
  padding: 15px 40px;
  font-size: 18px;
  font-family: 'Comic Sans MS', cursive, sans-serif;
  cursor: default; /* atau hapus aja baris ini */
  display: inline-block;
  user-select: none; /* supaya teks gak bisa diseleksi juga, opsional */
}

    
  </style>
</head>
<body>
  <div class="container">
    <h1 class="page-title">Daily Adventure</h1>

    <div class="adventure-box">
      <h2 class="sub-title">Petualangan Hari Ini</h2>
      <p class="instruction">Kenali nama bunga!</p>

      <div class="flowers">
        <img src="{{ asset('img/flower1.png') }}" alt="Bunga 1" />
        <img src="{{ asset('img/flower2.png') }}" alt="Bunga 2" />
        <img src="{{ asset('img/flower3.png') }}" alt="Bunga 3" />
      </div>

      <p class="mission-button">Selesaikan Misi Ini Yaaaa</p>
    </div>
  </div>
</body>
</html>
