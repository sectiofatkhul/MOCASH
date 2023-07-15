<?php
// Koneksi ke database
require 'koneksi.php';

// Memeriksa apakah formulir registrasi dikirimkan
if (isset($_POST['submit'])) {
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $retype = $_POST["retypepassword"];

    // Memeriksa apakah pengguna sudah terdaftar sebelumnya
    $check_query = "SELECT * FROM tb_user WHERE email = '$email'";
    $result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($result) > 0) {
       $pesan = 'Email sudah terdaftar. Silakan gunakan email yang lain.';
       $redirect_url = "register.php";
    } elseif ($password != $retype) {
        $pesan = 'Password dan pengulangan password tidak cocok.';
        $redirect_url = "register.php";
    } else {
        // Menambahkan pengguna ke database
        $insert_query = "INSERT INTO tb_user (fullname, email, password, role) VALUES ('$fullname', '$email', '$password', 'Guest')";
        if (mysqli_query($conn, $insert_query)) {
            $pesan = 'Registrasi berhasil. Anda telah terdaftar sebagai Guest.';
            $redirect_url = "Login.php";
        } else {
            $pesan = "Error: " . $insert_query . "<br>" . mysqli_error($conn);
            $redirect_url = "register.php";
        }
    }

    // Menutup koneksi database
    mysqli_close($conn);

    // Menampilkan pemberitahuan dan mengarahkan pengguna kembali setelah delay 1 detik
    echo "<script>alert('$pesan'); setTimeout(function() { window.location.href = '$redirect_url'; }, 1000);</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/logo_title.png" type="image/x-icon">
    <link rel="stylesheet" href="/CSS/Register.css">
    <title>Register MOCASH</title>
    <style>
        .pesan{
            border:1px solid #000;
            position: absolute;
            margin-top: -700px;
            font-size: 1.5rem;
            font-weight: 700;
        }
    </style>
</head>
<body class="bg-login">
    <form class="box-login" method="POST" action="register.php">
        <h1>MO<span>CASH</span></h1>
        <h3>Full Name</h3>
        <input type="text" id="nama" name="fullname" class="box-email" required>
        <h3>Email</h3>
        <input type="email" id="email" name="email" class="box-email" required>
        <h3>Password</h3>
        <input type="password" id="password" name="password" class="box-email" required>
        <h3>Re-Type Password</h3>
        <input type="password" id="ulangi_password" name="retypepassword" class="box-pass" required>
        <h2>Sudah Punya Akun? <a href="/Login.php">Log In</a></h2>
        <input type="submit" name="submit" value="Register" class="btn">
    </form>
</body>
</html>

