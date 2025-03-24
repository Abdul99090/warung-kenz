<?php
header('Content-Type: application/json');

$updates = [
    "Fitur AI diperbarui untuk memberikan rekomendasi menu harian!",
    "Sekarang pelanggan bisa melihat promo langsung di halaman utama!",
    "Menu dan harga telah diperbarui berdasarkan stok terbaru!",
    "Tampilan navigasi lebih interaktif dengan animasi hover yang lebih halus!",
    "AI bot kini bisa memberikan saran makanan berdasarkan cuaca!"
];

$response = [
    "status" => "success",
    "message" => $updates[array_rand($updates)]
];

echo json_encode($response);
?>
