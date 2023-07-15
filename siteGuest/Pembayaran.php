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
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $Langganan = $row['masa_berlangganan'];
        $company = $row['company'];
        $alamat = $row['alamat'];
    }
        // Menentukan harga berdasarkan kata yang dikirim
        switch ($Langganan) {
            case '3 Bulan':
                $harga = 300000;
                break;
            case '6 Bulan':
                $harga = 600000;
                break;
            case '12 Bulan':
                $harga = 900000;
                break;
        }
        // Menambahkan pengguna ke database
         $insert_query = "INSERT INTO tb_user (role) VALUES ('Super Admin')";
}

// Menutup koneksi database
mysqli_close($conn);

// Mengarahkan ke halaman home setelah klik submit
if (isset($_POST['submit'])) {
    header('Location: /siteSuperadmin/Dashboard.php');
    setcookie("Email", $email, time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari
    setcookie("Company", $company, time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari
    setcookie("Role", 'Super Admin', time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pesan.css">
    <link rel="shortcut icon" href="/assets/logo_title.png" type="image/x-icon">
    <title>Pembayaran</title>
</head>
<body class="bg-login">
    <form class="box-login" method="POST" action="Pembayaran.php">
        <h1>MO<span>CASH</span></h1>
        <h3>Nama Perusahaan : <?php echo $company ?></h3>
        <h3>Alamat Perusahaan : <?php echo $alamat ?></h3>
        <h3>Langganan : <?php echo $Langganan ?></h3>
        <h3>Harga : <?php echo $harga ?></h3>
        <h2>Pastikan data dengan benar sebelum melakukan pembayaran.</h2>
        <input type="submit" name="submit" value="Bayar" class="btn">
    </form>
</body>
</html>
