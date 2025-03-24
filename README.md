<?php
$gallery_images = [
    '9d402923b048c65c2f4cbb972534bbad.jpg',
    '67235eed6bcb1.jpg',
    '6160e9828a4a3.jpeg',
    '5fce3837c4f6d.jpg',
    '5f61f240a56e8.jpg',
    'download (1).jpg'
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
            
            $("#send-btn").click(function() {
                let userMessage = $("#user-input").val();
                if (userMessage.trim() !== "") {
                    $("#chat-content").append("<p><strong>Anda:</strong> " + userMessage + "</p>");
                    $("#user-input").val("");
                    setTimeout(() => respondAI(userMessage), 1000);
                }
            });
        });

        function respondAI(message) {
            let response = "Maaf, saya belum mengerti pertanyaan Anda.";
            
            const responses = {
                "menu": "Silakan pilih: \n1. Menu Makanan \n2. Menu Minuman",
                "1": "Berikut menu makanan kami: Seblak, Bakso Aci, Burger, dll.",
                "2": "Berikut menu minuman kami: Es Teh, Kopi, Susu, dll.",
                "harga": "Silakan kunjungi halaman menu untuk melihat harga.",
                "alamat": "Jl. HR. Basorun No.11,Bojong Pd. Terong, Kec. Cipayung, Kota Depok, Jawa Barat 16436."
            };
            
            for (let key in responses) {
                if (message.toLowerCase().includes(key)) {
                    response = responses[key];
                    break;
                }
            }
            
            $("#chat-content").append("<p><strong>Bot:</strong> " + response + "</p>");
        }
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
        footer {
            margin-top: 20px;
            padding: 15px;
            background-color: rgba(255, 69, 0, 0.9);
            color: white;
            font-size: 16px;
        }
        #wa-button {
            position: fixed;
            bottom: 20px;
            left: 20px;
            background: #25d366;
            color: white;
            padding: 10px 15px;
            border-radius: 50px;
            font-size: 18px;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s;
        }
        #wa-button:hover {
            transform: scale(1.1);
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
    <a id="wa-button" href="https://wa.me/6281234567890" target="_blank">
        📞 Hubungi via WhatsApp
    </a>
    <div id="ai-bot">🤖</div>
    <div id="chat-box">
        <div id="chat-content"></div>
        <input type="text" id="user-input" placeholder="Ketik pertanyaan...">
        <button id="send-btn">Kirim</button>
    </div>
    <footer>
        <p>&copy; 2025 WARUNG KENZ. Semua Hak Dilindungi.</p>
    </footer>
</body>
</html>
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
            
            $("#send-btn").click(function() {
                let userMessage = $("#user-input").val();
                if (userMessage.trim() !== "") {
                    $("#chat-content").append("<p><strong>Anda:</strong> " + userMessage + "</p>");
                    $("#user-input").val("");
                    setTimeout(() => respondAI(userMessage), 1000);
                }
            });
        });

        function respondAI(message) {
            let response = "Maaf, saya belum mengerti pertanyaan Anda.";
            if (message.toLowerCase().includes("menu")) {
                response = "Silakan pilih: \n1. Menu Makanan \n2. Menu Minuman";
            } else if (message.includes("1")) {
                response = "Berikut menu makanan kami: Seblak, Bakso Aci, Burger, dll.";
            } else if (message.includes("2")) {
                response = "Berikut menu minuman kami: Es Teh, Kopi, Susu, dll.";
            }
            $("#chat-content").append("<p><strong>Bot:</strong> " + response + "</p>");
        }
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
        footer {
            margin-top: 20px;
            padding: 15px;
            background-color: rgba(255, 69, 0, 0.9);
            color: white;
            font-size: 16px;
        }
        #wa-button {
            position: fixed;
            bottom: 20px;
            left: 20px;
            background: #25d366;
            color: white;
            padding: 10px 15px;
            border-radius: 50px;
            font-size: 18px;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s;
        }
        #wa-button:hover {
            transform: scale(1.1);
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
    <a id="wa-button" href="https://wa.me/6281234567890" target="_blank">
        📞 Hubungi via WhatsApp
    </a>
    <div id="ai-bot">🤖</div>
    <div id="chat-box">
        <div id="chat-content"></div>
        <input type="text" id="user-input" placeholder="Ketik pertanyaan...">
        <button id="send-btn">Kirim</button>
    </div>
    <footer>
        <p>&copy; 2025 WARUNG KENZ. Semua Hak Dilindungi.</p>
    </footer>
</body>
</html>
