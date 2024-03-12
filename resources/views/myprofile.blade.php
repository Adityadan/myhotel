<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myProfile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://daftar.ubaya.ac.id/2024/assets/gambar/slider_01.webp'); /* Ganti 'background.jpg' dengan URL atau path latar belakang Anda */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.8);
        }
        .profile-info {
            margin-bottom: 20px;
        }
        .profile-info label {
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container">
        <h1>Profil Singkat</h1>
        <div class="profile-info">
            <label>Nama:</label>
            <?php echo "hendra dami"; ?>
        </div>
        <div class="profile-info">
            <label>Umur:</label>
            <?php echo "24 tahun"; ?>
        </div>
        <div class="profile-info">
            <label>NRP:</label>
            <?php echo "160718038"; ?>
        </div>
        <div class="profile-info">
            <label>Alamat:</label>
            <?php echo "San Antonio Pakuwon City"; ?>
        </div>
    </div>
</body>
</html>