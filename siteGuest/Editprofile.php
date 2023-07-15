<?php
// Memeriksa apakah cookie email, company, dan Role tersedia dengan nilai yang sesuai
if (!isset($_COOKIE['Email']) || $_COOKIE['Role'] !== 'Guest' && $_COOKIE['Role'] !== 'Super Admin' && $_COOKIE['Role'] !== 'Admin') {
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
        $fullname = $row['fullname'];
        $password = $row['password'];
        $role = $row['role'];
    } else {
        echo '<div class="pesan">Data pengguna tidak ditemukan.</div>';
        exit();
    }
} else {
    echo '<div class="pesan">Anda belum login.</div>';
    exit();
}

// Memeriksa apakah formulir edit profile dikirimkan
if (isset($_POST['submit'])) {
    $newfullname = $_POST['fullname'];
    $newPassword = $_POST['password'];

    // Memperbarui data pengguna di database
    $update_query = "UPDATE tb_user SET fullname = '$newfullname', password = '$newPassword' WHERE email = '$email'";
    if (mysqli_query($conn, $update_query)) {

        // Refresh halaman
        header("Location: ".$_SERVER['PHP_SELF']);
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
    <link rel="stylesheet" href="editprofile.css">
    <title>Edit Profile</title>
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
    <form class="box-login" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h1>MO<span>CASH</span></h1>
        <h3>Full Name</h3>
        <input type="text" id="nama" name="fullname" class="box-email" placeholder="<?php echo $fullname; ?>">
        <h3>Email</h3>
        <input type="email" id="email" name="email" class="box-email" placeholder="<?php echo $email; ?>" readonly>
        <h3>Password</h3>
        <input type="password" id="password" name="password" class="box-email" placeholder="<?php echo $password; ?>">
        <h3>Role</h3>
        <input type="text" id="role" name="role" class="box-pass" placeholder="<?php echo $role; ?>" readonly>
        <h2>*Email dan Role tidak bisa diubah</h2>
        <input type="submit" name="submit" value="Update" class="btn">
    </form>
</body>
</html>
