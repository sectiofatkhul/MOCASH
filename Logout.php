<?php
// Menghapus cookie pengguna
if (isset($_COOKIE['Fullname'])) {
    unset($_COOKIE['Fullname']);
    setcookie('Fullname', '', time() - 3600, '/');
}

if (isset($_COOKIE['Email'])) {
    unset($_COOKIE['Email']);
    setcookie('Email', '', time() - 3600, '/');
}

if (isset($_COOKIE['Role'])) {
    unset($_COOKIE['Role']);
    setcookie('Role', '', time() - 3600, '/');
}

if (isset($_COOKIE['Password'])) {
    unset($_COOKIE['Password']);
    setcookie('Password', '', time() - 3600, '/');
}

if (isset($_COOKIE['Langganan'])) {
    unset($_COOKIE['Langganan']);
    setcookie('Langganan', '', time() - 3600, '/');
}

if (isset($_COOKIE['Company'])) {
    unset($_COOKIE['Company']);
    setcookie('Company', '', time() - 3600, '/');
}

// Redirect ke halaman login
header("Location: /Login.php");
exit();
?>
