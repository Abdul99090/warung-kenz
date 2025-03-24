<?php
$gallery_images = [
    '5f61f240a56e8.jpg',
    '5fce3837c4f6d.jpg',
    '6160e9828a4a3.jpeg',
    '67235eed6bcb1.jpg',
    'download (1).jpg',
    'download.jpg'
];
?>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WARUNG KENZ</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/turn.js/4/turn.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#flipbook").turn({
                width: 600,
                height: 400,
                autoCenter: true
            });
            
            $("#ai-bot").click(function() {
                $("#chat-box").toggle();
            });
            
            $("#chat-box button").click(function() {
                alert("Fitur ini akan segera tersedia!");
            });
        });
    </script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            text-align: center;
            color: #fff;
        }
        header {
            background-color: rgba(255, 69, 0, 0.9);
            padding: 20px;
            color: white;
            font-size: 28px;
            font-weight: bold;
            text-transform: uppercase;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            letter-spacing: 2px;
        }
        nav {
            background-color: rgba(255, 87, 51, 0.9);
            padding: 15px;
            display: flex;
            justify-content: center;
            gap: 25px;
            border-bottom: 3px solid #ff4500;
        }
        nav a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            transition: all 0.3s;
        }
        nav a:hover {
            color: #ffd9b3;
            transform: scale(1.1);
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
            padding: 20px;
        }
        .gallery img {
            width: 200px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s;
        }
        .gallery img:hover {
            transform: scale(1.1);
        }
        .flipbook {
            margin: 50px auto;
        }
        .flipbook .page {
            width: 300px;
            height: 400px;
            background-color: white;
            border: 1px solid #ccc;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            color: black;
        }
        footer {
            margin-top: 20px;
            padding: 15px;
            background-color: rgba(255, 69, 0, 0.9);
            color: white;
            font-size: 16px;
        }
        #ai-bot {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 10px;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            text-align: center;
            cursor: pointer;
            font-size: 30px;
            line-height: 60px;
            transition: transform 0.3s;
        }
        #ai-bot:hover {
            transform: scale(1.1);
        }
        #chat-box {
            display: none;
            position: fixed;
            bottom: 90px;
            right: 20px;
            background: white;
            width: 250px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            padding: 10px;
            color: black;
        }
        .smooth-scroll {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>
    <header>
        <h1>WARUNG KENZ</h1>
    </header>
    <nav>
        <a href="menu-makanan.html">Menu Makanan</a>
        <a href="menu-minuman.html">Menu Minuman</a>
        <a href="#order">Pesan</a>
    </nav>
    <div class="gallery">
        <?php foreach ($gallery_images as $image) { ?>
            <img src="images/<?php echo $image; ?>" alt="Gallery Image">
        <?php } ?>
    </div>
    <div id="flipbook" class="flipbook">
        <div class="page">Menu Makanan & Minuman</div>
        <div class="page">Silakan pilih kategori!</div>
    </div>
    <div id="ai-bot">🤖</div>
    <div id="chat-box">Halo! Saya AI bot, siap membantu belanja Anda! Pilih kategori: <br> <button>Menu Makanan</button> <button>Menu Minuman</button></div>
    <footer>
        <p>&copy; 2025 WARUNG KENZ. Semua Hak Dilindungi.</p>
    </footer>
</body>
</html>
