<?php
// Memeriksa apakah cookie email, company, dan Role tersedia dengan nilai yang sesuai
if (!isset($_COOKIE['Email']) || $_COOKIE['Role'] !== 'User' && $_COOKIE['Role'] !== 'Super Admin' && $_COOKIE['Role'] !== 'Admin') {
    // Jika salah satu cookie tidak ada atau Role bukan 'super admin', maka arahkan pengguna ke halaman lain atau tampilkan pesan error
    $pesan = "Anda tidak memiliki izin untuk mengakses halaman ini.";
    $redirect_url = "/Login.php";

    echo "<script>alert('$pesan'); setTimeout(function() { window.location.href = '$redirect_url'; }, 1000);</script>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/MOCASH/siteUser/User.css">
    <title>Document</title>
</head>
<body>
    <!--===== HEADER STRAT =====-->
    <div class="header">
        <div class="company">
            <img src="/MOCASH/assets/logo_title.png" alt="logo">
            <h1>BURGER KING</h1>
        </div>
        <div class="Kasir">
            
        </div>
    </div>
    <!--===== HEADER STRAT =====-->
    <!--===== HEADER STRAT =====-->
    <!--===== HEADER STRAT =====-->
    <!--===== HEADER STRAT =====-->
    <!--===== HEADER STRAT =====-->
</body>
</html>