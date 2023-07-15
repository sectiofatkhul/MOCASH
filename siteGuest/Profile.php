<?php
// Memeriksa apakah cookie email, company, dan Role tersedia dengan nilai yang sesuai
if (!isset($_COOKIE['Email']) || $_COOKIE['Role'] !== 'Guest' && $_COOKIE['Role'] !== 'Super Admin' && $_COOKIE['Role'] !== 'Admin') {
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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--========== BOX ICONS ==========-->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>
    <!--========== CSS ==========-->
    <link rel="shortcut icon" href="/assets/logo_title.png" type="image/x-icon">
    <link rel="stylesheet" href="/CSS/Profile.css"/>
    <title>MOCASH</title>
  </head>
  <body>
    <!--========== SCROLL TOP ==========-->
    <a href="#" class="scrolltop" id="scroll-top"
      ><i class="bx bx-chevron-up scrolltop__icon"></i
    ></a>

    <!--========== HEADER START ==========-->
    <header class="l-header" id="header">
      <nav class="nav bd-container">
        <a href="/siteGuest/home.php" class="nav__logo"
          >MO<span>CASH</span></a
        >
        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="/siteGuest/About.php" class="nav__link">Tentang</a>
            </li>
            <li class="nav__item">
              <a href="/siteGuest/Product.php" class="nav__link">Produk</a>
            </li>
            <li class="nav__item">
              <a href="/siteGuest/Profile.php" class="nav__link">Profil</a>
            </li>
            <li class="nav__item">
              <a href="/siteGuest/Contact.php" class="nav__link">Kontak</a>
            </li>
            <li class="nav__item">
              <a href="/siteGuest/Editprofile.php" class="nav__link">Setting</a>
            </li>
            <li><i class="bx bx-moon change-theme" id="theme-button"></i></li>
            <li><a href="/Logout.php" class="bx bx-log-out login-theme" id="theme-button"></a></li>
            <div class="search-box">
                <input type="text" placeholder="Search...">
                <div class="search-icon">
                  <i class="bx bx-search-alt-2"></i>
                </div>
          <div class="cancel-icon">
                  <i class="bx bx-x-circle"></i>
                </div>
          <div class="search-data">
        </ul>
        </div>
        <div class="nav__toggle" id="nav-toggle">
          <i class="bx bx-menu"></i>
        </div>
      </nav>
    </header>
    <!--========== HEADER END ==========-->
    <!--========== HERO START ==========-->
    <section class="hero-section">
      <img
        src="/assets/Kasir Modern.jpg"
        class="hero-img"
        alt="Boots - Autumn Collection"
      />
      <div class="cta">
        <div class="cta-text">
          <h1>PROFIL</h1>
        </div>
      </div>
      <div class="cta-clip">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis autem minima porro numquam. Incidunt, expedita amet aut illum iure debitis temporibus possimus. Suscipit quo maxime cumque ad! Obcaecati officiis sit atque delectus asperiores laboriosam magni, molestiae ipsum, quod sequi distinctio.</p>
      </div>
    </section>
    <!--========== HERO END ==========-->
    <!--========== CONTENT 1 ==========-->
    <div class="Content1">
      <div class="data">
        <h1>SECTIO FATKHUL AMRULLOH HAQ</h1>
        <div class="cio">
            <img src="/assets/foto cio.png" alt="fotocio">
            <div class="teks">
              <p>Lahir di Jakarta, 3 Agustus 2002. Sejauh ini untuk pergaulan, aku bisa bergaul dengan siapa saja, jadi bisa dibilang aku anaknya easy going. Role modelku selama ini adalah ayahku sendiri karena beliau telah menginspirasiku dengan berbagai kemampuan yang dimilikinya. Minat dan bakat saya yang terus berkembang dari kecil hingga sekarang. Dimulai dari rasa penasaran dan suka terhadap teknologi. Minat tersebut kemudian berkembang seiring waktu hingga menjadi bakat dalam diri saya, yaitu menguasai bidang IT. Dengan berjalannya waktu, tanpa disadari bakat saya di bidang IT menjadi passion saya untuk mencapai segala sesuatu termasuk prestasi.</p>
            </div>
        </div>
        <h1>SALSABILA</h1>
        <div class="caca">
          <div class="teks">
            <p>Saya adalah Salsabila, lahir di Padang Panjang pada tanggal 06 Oktober 2001. Saya bersemangat untuk mengembangkan keterampilan dan pengetahuan saya di bidang ini dan berkontribusi dalam dunia teknologi. Kedepannya, saya bermotivasi untuk terus belajar dan mengembangkan diri di bidang teknik elektro dan network engineering. Saya ingin menjadi seorang profesional yang kompeten dan mampu memberikan kontribusi yang signifikan di industri teknologi informasi.</p>
          </div>
            <img src="/assets/foto caca.png" alt="fotocio">
        </div>
      </div>
    </div>

    <!--========== FOOTER START ==========-->
    <footer class="footer section bd-container">
      <div class="footer__container bd-grid">
        <div class="footer__content">
          <a href="#" class="footer__logo">MO<span>CASH</span></a>
          <span class="footer__description">Modern Cashier</span>
          <div>
            <a href="https://id-id.facebook.com/" class="footer__social"
              ><i class="bx bxl-facebook"></i
            ></a>
            <a href="https://www.instagram.com/telkomc20" class="footer__social"
              ><i class="bx bxl-instagram"></i
            ></a>
            <a href="https://twitter.com" class="footer__social"
              ><i class="bx bxl-twitter"></i
            ></a>
            <a href="https://www.youtube.com/@TELKOMC" class="footer__social"
              ><i class="bx bxl-youtube"></i
            ></a>
          </div>
        </div>

        <div class="footer__content">
          <h3 class="footer__title">Services</h3>
          <ul>
            <li><a href="#" class="footer__link">Maintenance</a></li>
            <li><a href="#" class="footer__link">Update</a></li>
            <li><a href="#" class="footer__link">Cooperation</a></li>
            <li><a href="#" class="footer__link">Disturbance Handling</a></li>
          </ul>
        </div>

        <div class="footer__content">
          <h3 class="footer__title">Information</h3>
          <ul>
            <li><a href="#" class="footer__link">Event</a></li>
            <li><a href="#" class="footer__link">Contact us</a></li>
            <li><a href="#" class="footer__link">Privacy policy</a></li>
            <li><a href="#" class="footer__link">Terms of services</a></li>
          </ul>
        </div>

        <div class="footer__content">
          <h3 class="footer__title">Address</h3>
          <ul>
            <li class="footer__link">Depok - Jawa Barat</li>
            <li class="footer__link">Kampus UI #16425</li>
            <li class="footer__link">+62 851 5652 6905</li>
            <li class="footer__link">moderncash2023@gmail.com</li>
          </ul>
        </div>
      </div>

      <p class="footer__copy">&#169; 2023 SectioFatkhulAmrullohHaq&Salsabila. All right reserved</p>
    </footer>
    <!--========== FOOTER END ==========-->
    <!--========== SCROLL REVEAL ==========-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--========== MAIN JS ==========-->
    <script src="/JS/main.js"></script>
  </body>
</html>
