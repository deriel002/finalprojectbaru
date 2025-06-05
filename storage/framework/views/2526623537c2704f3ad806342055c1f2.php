<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tontonanku</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Comic Sans MS', cursive, sans-serif;
      background: url("<?php echo e(asset('img/bg-tontonanku.png')); ?>") no-repeat center center fixed;
      background-size: cover;
      min-height: 100vh;
    }

    .tonton-header {
      display: flex;
      align-items: center;
      justify-content: flex-start;
      margin-bottom: 30px;
      position: relative;
    }

    .back-button {
      position: absolute;
      top: 20px;
      left: 20px;
      width: 160px;
      cursor: pointer;
    }

    .tonton-title {
      flex: 1;
      text-align: center;
      font-size: 36px;
      color: #f18749;
      font-weight: bold;
      margin-right: 40px;
    }

    .video-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
    }

    .video-box {
      width: 280px;
      background-color: rgba(255, 255, 255, 0.9);
      padding: 15px;
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
      text-align: center;
      transition: transform 0.2s ease;
    }

    .video-box:hover {
      transform: scale(1.05);
    }

    .yt-thumbnail {
      width: 100%;
      border-radius: 10px;
      margin-bottom: 10px;
    }

    .video-title {
      font-size: 18px;
      font-weight: bold;
      color: #444;
    }
  </style>
</head>
<body>
  <div class="tonton-header">
    <a href="<?php echo e(url('/home')); ?>" class="back-button">
      <img src="<?php echo e(asset('img/back-icon.png')); ?>" alt="Back">
    </a>
    <h1 class="tonton-title">Tontonanku</h1>
  </div>

  <div class="video-container">
    <div class="video-box">
      <a href="https://youtu.be/e_04ZrNroTo" target="_blank" rel="noopener noreferrer">
        <img src="https://img.youtube.com/vi/e_04ZrNroTo/hqdefault.jpg" alt="Belajar Huruf dan Kata" class="yt-thumbnail">
      </a>
      <p class="video-title">Belajar Huruf dan Kata</p>
    </div>

    <div class="video-box">
      <a href="https://youtu.be/ydzMRmnPSX0" target="_blank" rel="noopener noreferrer">
        <img src="https://img.youtube.com/vi/ydzMRmnPSX0/hqdefault.jpg" alt="Lagu Anak Indonesia" class="yt-thumbnail">
      </a>
      <p class="video-title">Lagu Anak Indonesia</p>
    </div>

    <div class="video-box">
      <a href="https://youtu.be/yEZsLKZz600" target="_blank" rel="noopener noreferrer">
        <img src="https://img.youtube.com/vi/yEZsLKZz600/hqdefault.jpg" alt="Belajar Angka 1–10" class="yt-thumbnail">
      </a>
      <p class="video-title">Belajar Angka 1–10</p>
    </div>
  </div>
</body>
</html>
<?php /**PATH D:\FinalReal\finalproject\resources\views/edu.blade.php ENDPATH**/ ?>