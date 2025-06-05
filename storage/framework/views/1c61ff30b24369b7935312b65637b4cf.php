<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Mini Game</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Comic Sans MS', cursive, sans-serif;
      background: url("<?php echo e(asset('img/bg-minigame.png')); ?>") no-repeat center center fixed;
      background-size: cover;
    }

    .container {
      width: 100vw;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .quiz-box {
      width: 90%;
      max-width: 1000px;
      height: 500px;
      background-color: rgba(255, 255, 255, 0.85);
      border-radius: 20px;
      display: flex;
      overflow: hidden;
      box-shadow: 0 0 20px rgba(0,0,0,0.3);
      animation: slideIn 0.4s ease;
    }

    .image-area {
      width: 45%;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #f8e9d0;
    }

    .image-area img {
      width: 80%;
      max-height: 300px;
      object-fit: contain;
    }

    .back-button {
      position: absolute;
      top: 20px;
      left: 20px;
      width: 160px;
      height: 40px;
      z-index: 100;
    }

    .back-button img {
      width: 100%;
      height: auto;
    }

    .question-area {
      width: 55%;
      padding: 30px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .question-title {
      font-size: 28px;
      font-weight: bold;
      margin-bottom: 15px;
    }

    .question-text {
      font-size: 22px;
      margin-bottom: 20px;
    }

    .options {
      display: flex;
      flex-direction: column;
      gap: 12px;
    }

    .option-btn {
      font-size: 18px;
      padding: 10px 15px;
      border: none;
      border-radius: 12px;
      text-align: left;
      background-color: #fff5e5;
      cursor: pointer;
      transition: 0.3s;
      position: relative;
    }

    .option-btn:hover {
      background-color: orange;
      color: white;
    }

    .correct {
      background-color: #b4f1b4 !important;
    }

    .wrong {
      background-color: #f5b4b4 !important;
    }

    .icon {
      width: 32px;
      height: 32px;
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
    }

    .score-box {
      background-color: rgba(255,255,255,0.9);
      padding: 30px;
      border-radius: 20px;
      text-align: center;
      animation: fadeIn 0.5s ease;
    }

    .score-box h2 {
      font-size: 28px;
      font-weight: bold;
    }

    .score-box p {
      font-size: 22px;
      margin: 15px 0;
    }

    .score-box button {
      padding: 10px 20px;
      font-size: 18px;
      border-radius: 10px;
      border: none;
      background-color: orange;
      color: white;
      cursor: pointer;
    }

    @keyframes slideIn {
      from { transform: translateX(100%); opacity: 0; }
      to { transform: translateX(0); opacity: 1; }
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="quiz-box">
      <div class="image-area">
        <img id="fruit-img" src="" alt="Gambar Buah" />
      </div>
      <div class="question-area">
        <h2 class="question-title">Mini Game</h2>
        <p class="question-text" id="question-text">Soal tampil di sini</p>
        <div class="options" id="options"></div>
      </div>
    </div>
    <div class="score-box" id="score-box" style="display: none;">
      <h2>Skor Kamu</h2>
      <p id="score-text"></p>
      <button onclick="startGame()">Main Lagi</button>
    </div>
  </div>

  <a href="<?php echo e(route('beranda')); ?>" class="back-button">
    <img src="<?php echo e(asset('img/back-icon.png')); ?>" alt="Back">
  </a>

  <script>
    const questions = [
      {
        img: "<?php echo e(asset('img/apple.png')); ?>",
        question: "Apa nama buah ini?",
        options: ["Apel", "Jeruk", "Pisang", "Mangga"],
        answer: "Apel"
      },
      {
        img: "<?php echo e(asset('img/banana.png')); ?>",
        question: "Apa nama buah ini?",
        options: ["Semangka", "Pisang", "Nanas", "Jambu"],
        answer: "Pisang"
      },
      {
        img: "<?php echo e(asset('img/grape.png')); ?>",
        question: "Apa nama buah ini?",
        options: ["Anggur", "Pepaya", "Jeruk", "Leci"],
        answer: "Anggur"
      },
      {
        img: "<?php echo e(asset('img/orange.png')); ?>",
        question: "Apa nama buah ini?",
        options: ["Apel", "Melon", "Jeruk", "Pisang"],
        answer: "Jeruk"
      },
      {
        img: "<?php echo e(asset('img/mango.png')); ?>",
        question: "Apa nama buah ini?",
        options: ["Mangga", "Apel", "Strawberry", "Lemon"],
        answer: "Mangga"
      }
    ];

    let currentIndex = 0;
    let score = 0;
    let shuffled = [];

    function shuffle(array) {
      let arr = [...array];
      for (let i = arr.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [arr[i], arr[j]] = [arr[j], arr[i]];
      }
      return arr;
    }

    function startGame() {
      shuffled = shuffle(questions);
      currentIndex = 0;
      score = 0;
      document.querySelector('.quiz-box').style.display = 'flex';
      document.getElementById('score-box').style.display = 'none';
      loadQuestion();
    }

    function loadQuestion() {
      const q = shuffled[currentIndex];
      document.getElementById('fruit-img').src = q.img;
      document.getElementById('question-text').textContent = q.question;

      const optionsBox = document.getElementById('options');
      optionsBox.innerHTML = "";

      q.options.forEach(opt => {
        const btn = document.createElement('button');
        btn.textContent = opt;
        btn.className = "option-btn";
        btn.onclick = () => {
          btn.disabled = true;
          if (opt === q.answer) {
            btn.classList.add('correct');
            const icon = document.createElement('img');
            icon.src = "<?php echo e(asset('img/icon-benar.png')); ?>";
            icon.className = "icon";
            btn.appendChild(icon);
            score++;
          } else {
            btn.classList.add('wrong');
            const icon = document.createElement('img');
            icon.src = "<?php echo e(asset('img/icon-salah.png')); ?>";
            icon.className = "icon";
            btn.appendChild(icon);
          }
          setTimeout(() => {
            currentIndex++;
            if (currentIndex < shuffled.length) {
              loadQuestion();
            } else {
              showScore();
            }
          }, 800);
        };
        optionsBox.appendChild(btn);
      });
    }

    function showScore() {
      document.querySelector('.quiz-box').style.display = 'none';
      document.getElementById('score-box').style.display = 'block';
      document.getElementById('score-text').textContent = `${score} dari ${shuffled.length}`;
    }

    // Mulai game saat halaman dimuat
    startGame();
  </script>
</body>
</html>
<?php /**PATH D:\FinalReal\finalproject\resources\views/games.blade.php ENDPATH**/ ?>