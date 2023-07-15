<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/logo_title.png" type="image/x-icon">
    <link rel="stylesheet" href="/CSS/Loading.css">
    <title>MOCASH</title>
</head>
<body>
    <div class="loader-container">
      <div class="loader-line">
        <div class="loader-progress"></div>
      </div>
      <div class="loader-name">
        <img src="/assets//logo_title.png" alt="Logo Perusahaan">
      </div>
    </div>
    <script>
        // Setelah 3 detik, arahkan pengguna ke halaman indeks
        setTimeout(function() {
          window.location.href = "home.php"; // Ganti "index.html" dengan halaman indeks yang sesuai
        }, 3000); // Ubah 3000 dengan waktu dalam milidetik yang Anda inginkan
      </script>
  </body>
</html>