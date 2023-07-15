<?php
// Koneksi ke database
require 'koneksi.php';

if (isset($_POST['submit'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Memeriksa kecocokan email dan password
    $query = "SELECT * FROM tb_user WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // Login berhasil
        $row = mysqli_fetch_assoc($result);
        $role = $row['role'];
        $company = $row['company'];

        // Alihkan ke dashboard berdasarkan role
        switch ($role) {
            case 'Super Admin':
                header("Location: /siteSuperadmin/Dashboard.php");
                setcookie("Email", $email, time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari
                setcookie("Company", $company, time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari
                setcookie("Role", $role, time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari
                break;
            case 'Admin':
                header("Location: /siteAdmin/admin.php");
                setcookie("Email", $email, time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari
                setcookie("Company", $company, time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari
                setcookie("Role", $role, time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari
                break;
            case 'User':
                header("Location: /siteUser/user.php");
                setcookie("Email", $email, time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari
                setcookie("Company", $company, time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari
                setcookie("Role", $role, time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari
                break;
            case 'Guest':
                header("Location: /siteGuest/Product.php");
                setcookie("Email", $email, time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari
                setcookie("Role", $role, time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari
                break;
            default:
                echo '<div class="pesan">Role tidak valid.</div>';
                break;
        }
    } else {
        // Login gagal
        echo '<div class="pesan">Login gagal. Periksa kembali email dan password Anda.</div>';
    }

    // Menutup koneksi database
    mysqli_close($conn);
}
?>

<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/logo_title.png" type="image/x-icon">
    <link rel="stylesheet" href="/CSS/Login.css">
    <title>Login MOCASH</title>
</head>
<body class="bg-login">
    <form class="box-login" method="POST" action="Login.php">
        <div><input name="back" class="back" value="Back" type="submit" onclick="goBack()"></input></div>
        <div class="data">
        <h1>MO<span>CASH</span></h1>
        <h3>Email</h3>
        <input type="email" id="email" name="email" class="box-email" required>
        <h3>Password</h3>
        <input type="password" id="password" name="password" class="box-email" required>
        <h2>Tidak Punya Akun? <a href="/Register.php">Register</a></h2>
        <input type="submit" name="submit" value="Login" class="btn">
        </div>
    </form>
    <script>
        function goBack() {
            window.location.href = "/index.php";
        }
    </script>
</body>
</html>
