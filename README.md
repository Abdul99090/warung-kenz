<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WARUNG KENZ</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            color: #333;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        h1 {
            background-color: #ff9800;
            color: white;
            padding: 20px;
            margin: 0;
        }
        .menu-container {
            max-width: 800px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .menu {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 15px;
            padding: 0;
        }
        .item {
            background: #fff;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .item:hover {
            transform: scale(1.05);
        }
        img {
            width: 100px;
            height: 100px;
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
                <img src="https://example.com/seblak.jpg" alt="Seblak">
                <p>Seblak - Rp. 6.000</p>
            </div>
            <div class="item">
                <img src="https://example.com/bakso_aci.jpg" alt="Bakso Aci">
                <p>Bakso Aci - Rp. 7.000</p>
            </div>
            <div class="item">
                <img src="https://example.com/kwetiau_goreng.jpg" alt="Kwetiau Goreng">
                <p>Kwetiau Goreng - Rp. 6.000</p>
            </div>
            <div class="item">
                <img src="https://example.com/burger.jpg" alt="Burger">
                <p>Burger - Rp. 4.000</p>
            </div>
            <div class="item">
                <img src="https://example.com/roti_goreng.jpg" alt="Roti Goreng">
                <p>Roti Goreng - Rp. 5.000</p>
            </div>
            <div class="item">
                <img src="https://example.com/roti_bakar.jpg" alt="Roti Bakar">
                <p>Roti Bakar - Rp. 5.000</p>
            </div>
            <div class="item">
                <img src="https://example.com/cilor_maklor.jpg" alt="Cilor dan Maklor">
                <p>Cilor dan Maklor - Rp. 2.000</p>
            </div>
            <div class="item">
                <img src="https://example.com/papeda.jpg" alt="Papeda">
                <p>Papeda - Rp. 2.000</p>
            </div>
            <div class="item">
                <img src="https://example.com/indomie.jpg" alt="Indomie Goreng dan Kuah">
                <p>Indomie Goreng dan Kuah - Rp. 9.000</p>
            </div>
        </div>
        <h2>Menu Minuman</h2>
        <div class="menu">
            <div class="item">
                <img src="https://example.com/es_cecek.jpg" alt="Es Cekek">
                <p>Es Cekek - Rp. 2.000</p>
            </div>
            <div class="item">
                <img src="https://example.com/kopi_panas.jpg" alt="Kopi Panas">
                <p>Kopi Panas - Rp. 4.000</p>
            </div>
        </div>
    </div>
</body>
</html>
