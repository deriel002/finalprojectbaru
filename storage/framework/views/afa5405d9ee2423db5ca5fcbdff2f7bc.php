<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
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

    .error-message {
      color: red;
      margin-bottom: 15px;
      text-align: left;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Login</h2>

    
    <?php if($errors->has('loginError')): ?>
      <div class="error-message">
        <?php echo e($errors->first('loginError')); ?>

      </div>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('login.submit')); ?>">
      <?php echo csrf_field(); ?>
      <input type="text" name="username" placeholder="Username" value="<?php echo e(old('username')); ?>" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Masuk</button>
    </form>

    <a href="<?php echo e(route('register.form')); ?>">Belum punya akun? Daftar</a>
  </div>
</body>
</html>
<?php /**PATH D:\FinalReal\finalproject\resources\views/login.blade.php ENDPATH**/ ?>