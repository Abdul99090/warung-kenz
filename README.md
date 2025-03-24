<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WARUNG KENZ</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            text-align: center;
        }
        header {
            background-color: #ff6600;
            padding: 20px;
            color: white;
            font-size: 24px;
            font-weight: bold;
        }
        nav {
            background-color: #ff8533;
            padding: 10px;
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        nav a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            transition: color 0.3s;
        }
        nav a:hover {
            color: #ffd9b3;
        }
        .menu, .gallery {
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            width: 90%;
            max-width: 500px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }
        .menu:hover, .gallery:hover {
            transform: scale(1.05);
        }
        .menu h2, .gallery h2 {
            color: #ff6600;
        }
        .menu ul {
            list-style-type: none;
            padding: 0;
        }
        .menu li {
            padding: 10px;
            font-size: 18px;
            border-bottom: 1px solid #ddd;
            transition: background-color 0.3s, color 0.3s;
        }
        .menu li:hover {
            background-color: #ff6600;
            color: white;
            cursor: pointer;
        }
        .gallery img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-top: 10px;
        }
        .order-button {
            display: inline-block;
            margin: 20px auto;
            padding: 15px 30px;
            background-color: #25D366;
            color: white;
            font-size: 18px;
            font-weight: bold;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .order-button:hover {
            background-color: #1da851;
        }
        footer {
            margin-top: 20px;
            padding: 10px;
            background-color: #ff6600;
            color: white;
        }
        @media (max-width: 768px) {
            .menu, .gallery {
                width: 95%;
            }
            .order-button {
                width: 90%;
                padding: 15px;
            }
            nav {
                flex-direction: column;
                align-items: center;
            }
            nav a {
                padding: 5px 0;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>WARUNG KENZ</h1>
    </header>
    <nav>
        <a href="#menu-makanan">Makanan</a>
        <a href="#menu-minuman">Minuman</a>
        <a href="#galeri">Galeri</a>
        <a href="#order">Pesan</a>
    </nav>
    <main>
        <section class="menu" id="menu-makanan">
            <h2>Menu Makanan</h2>
            <ul>
                <li>Seblak - Rp. 6.000</li>
                <li>Bakso Aci - Rp. 7.000</li>
                <li>Kwetiau Goreng - Rp. 6.000</li>
                <li>Burger - Rp. 4.000</li>
                <li>Roti Goreng - Rp. 5.000</li>
                <li>Roti Bakar - Rp. 5.000</li>
                <li>Cilor dan Maklor - Rp. 2.000</li>
                <li>Papeda - Rp. 2.000</li>
                <li>Indomie Goreng dan Kuah - Rp. 9.000</li>
            </ul>
        </section>
        <section class="menu" id="menu-minuman">
            <h2>Menu Minuman</h2>
            <ul>
                <li>Es Cekek - Rp. 2.000</li>
                <li>Kopi Es/Panas (Indocafe, Kapal Api, Luak, dll) - Es Rp. 5.000 / Panas Rp. 4.000</li>
            </ul>
        </section>
        <section class="gallery" id="galeri">
            <h2>Galeri Makanan & Minuman</h2>
            <img src="https://upload.wikimedia.org/wikipedia/commons/4/4f/Seblak.jpg" alt="Seblak">
            <img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Bakso.jpg" alt="Bakso Aci">
            <img src="https://upload.wikimedia.org/wikipedia/commons/e/e1/Kwetiau_Goreng.jpg" alt="Kwetiau Goreng">
            <img src="https://upload.wikimedia.org/wikipedia/commons/0/0b/Burger.jpg" alt="Burger">
            <img src="https://upload.wikimedia.org/wikipedia/commons/3/3b/Roti_Goreng.jpg" alt="Roti Goreng">
            <img src="https://upload.wikimedia.org/wikipedia/commons/2/2c/Roti_Bakar.jpg" alt="Roti Bakar">
            <img src="https://upload.wikimedia.org/wikipedia/commons/d/d6/Es_Cekek.jpg" alt="Es Cekek">
            <img src="https://upload.wikimedia.org/wikipedia/commons/4/45/Kopi.jpg" alt="Kopi">
        </section>
        <a href="https://wa.me/6285777821020?text=Halo%20Warung%20Kenz,%20saya%20ingin%20memesan!" class="order-button" target="_blank" id="order">Pesan via WhatsApp</a>
    </main>
    <footer>
        <p>&copy; 2025 WARUNG KENZ. Semua Hak Dilindungi.</p>
    </footer>
</body>
</html>
