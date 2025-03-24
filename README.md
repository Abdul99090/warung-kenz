<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WARUNG KENZ</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: url('https://i.imgur.com/zl286E7.jpg') no-repeat center center fixed;
            background-size: cover;
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
        .home-gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
            margin: 20px auto;
            max-width: 90%;
        }
        .home-gallery img {
            width: 200px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .order-form {
            margin: 20px auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.15);
            width: 90%;
            max-width: 600px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }
        .order-button {
            display: inline-block;
            margin: 20px auto;
            padding: 15px 30px;
            background-color: #25D366;
            color: white;
            font-size: 20px;
            font-weight: bold;
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
        }
        .order-button:hover {
            background-color: #1da851;
            transform: scale(1.1);
        }
        footer {
            margin-top: 20px;
            padding: 15px;
            background-color: rgba(255, 69, 0, 0.9);
            color: white;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <header>
        <h1>WARUNG KENZ</h1>
    </header>
    <nav>
        <a href="menu-makanan.html">Makanan</a>
        <a href="menu-minuman.html">Minuman</a>
        <a href="#order">Pesan</a>
    </nav>
    <section class="home-gallery">
        <img src="5f61f240a56e8.jpg" alt="Gallery Image">
        <img src="5fce3837c4f6d.jpg" alt="Gallery Image">
        <img src="6160e9828a4a3.jpeg" alt="Gallery Image">
        <img src="67235eed6bcb1.jpg" alt="Gallery Image">
        <img src="9d402923b048c65c2f4cbb972534bbad.jpg" alt="Gallery Image">
        <img src="download (1).jpg" alt="Gallery Image">
        <img src="download.jpg" alt="Gallery Image">
        <img src="crispy-comte-cheeseburgers-FT-RECIPE0921.jpg" alt="Gallery Image">
        <img src="pngtree-fresh-drink-illustration-in-the-plastic.jpg" alt="Gallery Image">
    </section>
    <section class="order-form" id="order">
        <h2>Pesan Sekarang</h2>
        <a href="https://wa.me/6285777821020" class="order-button">Pesan via WhatsApp</a>
    </section>
    <footer>
        <p>&copy; 2025 WARUNG KENZ. Semua Hak Dilindungi.</p>
    </footer>
</body>
</html>
