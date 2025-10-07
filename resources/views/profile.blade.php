<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .profile {
            display: inline-block;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
        }
        .profile img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 2px solid #ccc;
            margin-bottom: 20px;
        }
        .info {
            background-color: #e0e0e0;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            font-size: 18px;
        }
        .label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="profile">
        <!-- Gambar profil default -->
        <img src="{{ asset('andini.jpg') }}" alt="Profile Picture">
        <!-- Data -->
        <div class="info"><span class="label">Nama:</span> {{ $Nama }}</div>
        <div class="info"><span class="label">NPM:</span> {{ $NPM }}</div>
        <div class="info"><span class="label">Kelas:</span> {{ $Kelas }}</div>
    </div>
</body>
</html><!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <style>
        body {
            background: #1a1a1a;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Trebuchet MS', sans-serif;
            color: #fff;
        }
        .profile {
            background: #2a2a2a;
            border-radius: 20px;
            padding: 30px;
            width: 320px;
            text-align: center;
            box-shadow: 0 0 20px rgba(255, 77, 166, 0.5); /* Pink glow */
        }
        .profile img {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            border: 3px solid #ff4da6; /* Pink border */
            margin-bottom: 20px;
            box-shadow: 0 0 15px #ff4da6; /* Pink glow */
        }
        .info {
            background: rgba(255,255,255,0.05);
            padding: 12px;
            margin: 10px 0;
            border-radius: 8px;
            font-size: 17px;
            text-align: left;
        }
        .label {
            color: #ff4da6; /* Pink text */
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="profile">
        <img src="{{ asset('images/dindaa.jpg') }}" alt="Profile Picture">
        <div class="info"><span class="label">NAMA:</span> {{ $NAMA }}</div>
        <div class="info"><span class="label">KELAS:</span> {{ $KELAS }}</div>
        <div class="info"><span class="label">NPM:</span> {{ $NPM }}</div>
    </div>
</body>
</html>