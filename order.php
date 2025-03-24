<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST["nama"]);
    $pesanan = htmlspecialchars($_POST["pesanan"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    
    // Format pesan WhatsApp
    $pesan = "Pesanan Baru:%0A";
    $pesan .= "Nama: $nama%0A";
    $pesan .= "Pesanan: $pesanan%0A";
    $pesan .= "Alamat: $alamat%0A";
    
    // Nomor WhatsApp penerima (ganti dengan nomor tujuan)
    $nomor_wa = "6285777821020"; // Format internasional tanpa tanda +
    
    // Redirect ke WhatsApp
    $wa_url = "https://api.whatsapp.com/send?phone=$nomor_wa&text=$pesan";
    header("Location: $wa_url");
    exit();
} else {
    echo "Metode tidak diizinkan!";
}
?>
