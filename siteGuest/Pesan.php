<?php
// Memeriksa apakah cookie email, company, dan Role tersedia dengan nilai yang sesuai
if (!isset($_COOKIE['Email']) || $_COOKIE['Role'] !== 'Guest') {
    // Jika salah satu cookie tidak ada atau Role bukan 'super admin', maka arahkan pengguna ke halaman lain atau tampilkan pesan error
    $pesan = "Anda tidak memiliki izin untuk mengakses halaman ini.";
    $redirect_url = "/Login.php";

    echo "<script>alert('$pesan'); setTimeout(function() { window.location.href = '$redirect_url'; }, 1000);</script>";
    exit;
}

// Koneksi ke database
require '../koneksi.php';

// Memeriksa apakah pengguna sudah login dengan cookie
if (isset($_COOKIE['Email'])) {
    $email = $_COOKIE['Email'];

    // Mengambil data pengguna dari database
    $query = "SELECT * FROM tb_user WHERE email = '$email'";
}
// Memeriksa apakah formulir edit profile dikirimkan
if (isset($_POST['submit'])) {
    $company = $_POST['company'];
    $alamat = $_POST['alamat'];
    $langganan = $_POST['masa_berlangganan'];

    // Memperbarui data pengguna di database
    $update_query = "UPDATE tb_user SET company = '$company', alamat = '$alamat', masa_berlangganan = '$langganan', cabang = 'Pusat', role = 'Super Admin' WHERE email = '$email'";
    if (mysqli_query($conn, $update_query)) {

        // Refresh halaman
        header("Location: /siteGuest/Pembayaran.php");
        exit();
    } else {
        echo "Error: " . $update_query . "<br>" . mysqli_error($conn);
    }
}

// Menutup koneksi database
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/logo_title.png" type="image/x-icon">
    <link rel="stylesheet" href="pesan.css">
    <title>Pembayaran</title>
</head>
<body class="bg-login">
    <form class="box-login" method="POST" action="Pesan.php">
        <h1>MO<span>CASH</span></h1>
        <h3>Nama Perusahaan</h3>
        <input type="text" id="nama" name="company" class="box-email" required>
        <h3>Alamat Perusahaan</h3>
        <input type="text" id="email" name="alamat" class="box-email" required>
        <h3>Langganan</h3>
        <select name="masa_berlangganan" id="Langganan" class="box-email">
            <option value="3 Bulan">1 Bulan</option>
            <option value="3 Bulan">3 Bulan</option>
            <option value="6 Bulan">6 Bulan</option>
            <option value="12 Bulan">12 Bulan</option>
        </select>
        <h2>Pastikan data dengan benar sebelum melakukan pembayaran.</h2>
        <input type="submit" name="submit" value="Buat Pesanan" class="btn">
    </form>
</body>
</html>
