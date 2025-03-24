<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WARUNG KENZ</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        h1 {
            background-color: #ff9800;
            color: white;
            padding: 20px;
            text-align: center;
            margin: 0;
        }
        .menu-container {
            max-width: 900px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .menu {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            padding: 0;
        }
        .item {
            background: #fff;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            text-align: center;
        }
        .item:hover {
            transform: scale(1.05);
        }
        img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <h1>WARUNG KENZ</h1>
    <div class="menu-container">
        <h2>Menu Makanan</h2>
        <div class="menu">
            <div class="item">
                <img src="https://i.imgur.com/B5Y6FQq.jpg" alt="Seblak">
                <p><strong>Seblak</strong></p>
                <p>Rp. 6.000</p>
            </div>
            <div class="item">
                <img src="https://i.imgur.com/s4KsU2v.jpg" alt="Bakso Aci">
                <p><strong>Bakso Aci</strong></p>
                <p>Rp. 7.000</p>
            </div>
            <div class="item">
                <img src="https://i.imgur.com/4RxddHK.jpg" alt="Kwetiau Goreng">
                <p><strong>Kwetiau Goreng</strong></p>
                <p>Rp. 6.000</p>
            </div>
            <div class="item">
                <img src="https://i.imgur.com/J5ptvVQ.jpg" alt="Burger">
                <p><strong>Burger</strong></p>
                <p>Rp. 4.000</p>
            </div>
            <div class="item">
                <img src="https://i.imgur.com/ThRReUt.jpg" alt="Roti Goreng">
                <p><strong>Roti Goreng</strong></p>
                <p>Rp. 5.000</p>
            </div>
            <div class="item">
                <img src="https://i.imgur.com/m7C8ok5.jpg" alt="Roti Bakar">
                <p><strong>Roti Bakar</strong></p>
                <p>Rp. 5.000</p>
            </div>
            <div class="item">
                <img src="https://i.imgur.com/5zUK7jx.jpg" alt="Cilor dan Maklor">
                <p><strong>Cilor dan Maklor</strong></p>
                <p>Rp. 2.000</p>
            </div>
            <div class="item">
                <img src="https://i.imgur.com/0Okt7PN.jpg" alt="Papeda">
                <p><strong>Papeda</strong></p>
                <p>Rp. 2.000</p>
            </div>
            <div class="item">
                <img src="https://i.imgur.com/DR9WNN1.jpg" alt="Indomie Goreng dan Kuah">
                <p><strong>Indomie Goreng dan Kuah</strong></p>
                <p>Rp. 9.000</p>
            </div>
        </div>
        <h2>Menu Minuman</h2>
        <div class="menu">
            <div class="item">
                <img src="https://i.imgur.com/u5TcXjA.jpg" alt="Es Cekek">
                <p><strong>Es Cekek</strong></p>
                <p>Rp. 2.000</p>
            </div>
            <div class="item">
                <img src="https://i.imgur.com/wcP5ACh.jpg" alt="Kopi Es/Panas">
                <p><strong>Kopi Es/Panas</strong></p>
                <p>Rp. 5.000 / Rp. 4.000</p>
            </div>
        </div>
    </div>
</body>
</html>
