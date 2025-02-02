<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile App Menu</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to bottom, #2c3e50, #bdc3c7);
            font-family: Arial, sans-serif;
        }

        .phone {
            width: 300px;
            height: 600px;
            background-color: #000;
            border-radius: 30px;
            padding: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.5);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .screen {
            background-color: #1e1e1e;
            border-radius: 20px;
            padding: 15px;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 10px;
        }

        .icon {
            width: 60px;
            height: 60px;
            background-color: #fff;
            border-radius: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            font-size: 12px;
            color: #000;
            text-decoration: none;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .icon:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 8px rgba(255, 255, 255, 0.3);
        }

        .dock {
            background-color: #333;
            padding: 10px;
            border-radius: 20px;
            display: flex;
            justify-content: space-around;
        }

        .dock .icon {
            width: 50px;
            height: 50px;
        }
    </style>
</head>
<body>
    <div class="phone">
        <div class="screen">
            <a href="#" class="icon">Extras</a>
            <a href="#" class="icon">Tools</a>
            <a href="#" class="icon">Photos</a>
            <a href="#" class="icon">Finance</a>

            <a href="#" class="icon">Play Store</a>
            <a href="#" class="icon">Bible</a>
            <a href="#" class="icon">Netflix</a>
            <a href="#" class="icon">Music</a>

            <a href="#" class="icon">Facebook</a>
            <a href="#" class="icon">Instagram</a>
            <a href="#" class="icon">WhatsApp</a>
            <a href="#" class="icon">YouTube</a>

            <a href="#" class="icon">Spotify</a>
            <a href="#" class="icon">Messenger</a>
            <a href="#" class="icon">Pinterest</a>
            <a href="#" class="icon">TikTok</a>
        </div>
        
        <div class="dock">
            <a href="#" class="icon">Phone</a>
            <a href="#" class="icon">Browser</a>
            <a href="#" class="icon">Messages</a>
            <a href="#" class="icon">Camera</a>
        </div>
    </div>
</body>
</html>
