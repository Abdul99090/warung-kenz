<!DOCTYPE html>
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
            background: url('https://imgur.com/zl286E7') no-repeat center center fixed;
            background-size: cover;
            text-align: center;
        }
        header {
            background-color: rgba(255, 69, 0, 0.9);
            padding: 20px;
            color: white;
            font-size: 28px;
            font-weight: bold;
            text-transform: uppercase;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
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
            transition: color 0.3s;
        }
        nav a:hover {
            color: #ffd9b3;
        }
        .menu, .gallery, .order-form {
            margin: 20px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            width: 90%;
            max-width: 600px;
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }
        .menu h2, .gallery h2, .order-form h2 {
            color: #ff4500;
        }
        .menu ul {
            list-style-type: none;
            padding: 0;
        }
        .menu li {
            padding: 12px;
            font-size: 18px;
            border-bottom: 1px solid #ddd;
        }
        .gallery img {
            width: 100%;
            height: auto;
            border-radius: 15px;
            margin-top: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
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
            transition: background-color 0.3s;
            border: none;
            cursor: pointer;
        }
        .order-button:hover {
            background-color: #1da851;
        }
        footer {
            margin-top: 20px;
            padding: 15px;
            background-color: rgba(255, 69, 0, 0.9);
            color: white;
            font-size: 16px;
        }
        @media (max-width: 768px) {
            .menu, .gallery, .order-form {
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
                padding: 8px 0;
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
        <section class="gallery" id="galeri">
            <h2>Galeri Makanan & Minuman</h2>
            <img src="https://imgur.com/5auiIC0" alt="Makanan">
            <img src="https://imgur.com/by9LlZp" alt="Minuman">
        </section>
        <section class="order-form" id="order">
            <h2>Pesan Sekarang</h2>
            <a href="https://wa.me/6285777821020" class="order-button">Pesan via WhatsApp</a>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 WARUNG KENZ. Semua Hak Dilindungi.</p>
    </footer>
</body>
</html>
