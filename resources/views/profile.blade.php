<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Profil Pengguna</title>
    <style>
      body {
        font-family: 'Comic Sans MS', cursive, sans-serif;
        background-color: #fff5e1;
        background-image: radial-gradient(#ffd6a5 1.5px, transparent 1.5px);
        background-size: 30px 30px;
        margin: 0;
        padding: 0;
        color: #333;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
      }

      .profile-container {
        max-width: 400px;
        background-color: #fff5e1;
        border-radius: 20px;
        box-shadow: 0 8px 15px rgba(0,0,0,0.1);
        padding: 25px;
        width: 100%;
      }

      .profile-header {
        text-align: center;
        margin-bottom: 20px;
      }

      .profile-image img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        border: 5px solid #ffcc70;
        background-color: white;
        object-fit: cover;
      }

      .profile-name {
        margin-top: 10px;
        font-size: 1.8rem;
        color: #d94f4f;
      }

      .profile-details {
        background-color: #fff;
        border-radius: 15px;
        padding: 15px;
        box-shadow: inset 0 0 5px rgba(0,0,0,0.05);
      }

      .detail-item {
        margin-bottom: 15px;
      }

      .detail-label {
        font-weight: bold;
        color: #ff7070;
        font-size: 1rem;
      }

      .detail-value {
        font-size: 1rem;
        margin-top: 5px;
        color: #444;
      }

      .separator {
        height: 2px;
        background-color: #ffcc70;
        margin-top: 10px;
        border-radius: 2px;
      }
    </style>
</head>
<body>
    <div class="profile-container">
        <div class="profile-header">
            <div class="profile-image">
                <img src="{{ asset('img/profile.png') }}" alt="Foto Profil">
            </div>
            <h1 class="profile-name">{{ $user->username }}</h1>
        </div>
        
        <div class="profile-details">
            <div class="detail-item">
                <div class="detail-label">Username</div>
                <div class="detail-value">{{ $user->username }}</div>
                <div class="separator"></div>
            </div>
            
            <div class="detail-item">
                <div class="detail-label">Email</div>
                <div class="detail-value">{{ $user->email }}</div>
                <div class="separator"></div>
            </div>
            
            <div class="detail-item">
                <div class="detail-label">Telepon</div>
                <div class="detail-value">{{ $user->phone }}</div>
                <div class="separator"></div>
            </div>
        </div>
    </div>
</body>
</html>
