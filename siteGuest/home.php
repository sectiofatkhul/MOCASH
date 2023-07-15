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
    <link rel="shortcut icon" href="/assets/logo_title.png" type="image/x-icon">
    <!--========== CSS ==========-->
    <link rel="shortcut icon" href="/assets/logo_title.png" type="image/x-icon">
    <link rel="stylesheet" href="/CSS/index.css"/>
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
          <h1>MO<span>CASH</span></h1>
        </div>
        <div class="cta-text2">
          <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quia id error atque blanditiis, iure maxime rerum autem! Sequi, fuga iste!</h2>
        </div>
        <a class="cta-btn" href="/siteGuest/Pesan.php">Beli Sekarang</a>
      </div>
    </section>
    <!--========== HERO END ==========-->
    <!--========== CONTENT 1 START ==========-->
    <section class="content1">
      <div class="judul-content">
        <h1>WHAT<span>?</span></h1>
      </div>
      <div class="what-content">
        <img class="what-img" src="/assets/Promosi.jpg" alt="what-content" />
        <div class="what-text">
          <h1>Apa itu MO<span>CASH</span>?</h1>
          <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error dolor accusamus a culpa, maxime animi velit facilis facere! Temporibus fugit ullam, repellat voluptates doloremque eum atque minus laboriosam quidem quam sed nemo reprehenderit quo accusamus voluptatum ducimus expedita vero ad exercitationem facere, voluptatem libero? Nulla ducimus dolorem tempora delectus velit fugiat commodi a nisi ipsam, sunt provident earum facere, consequuntur expedita aliquam dignissimos minus aut. Unde, veniam et. Perspiciatis impedit tempora architecto culpa, voluptas enim delectus sequi hic voluptatibus cumque.</h2>
        </div>
      </div>
    </section>
    <!--========== CONTENT 1 END ==========-->
    <!--========== CONTENT 2 START ==========-->
    <section class="content2">
      <div class="judul-content">
        <h1>WHY<span>?</span></h1>
      </div>
      <div class="why-content">
        <div class="why-text">
          <h1>Kenapa Harus Menggunakan MO<span>CASH</span>?</h1>
          <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis commodi libero magni ut animi beatae mollitia quaerat modi enim, vel ex pariatur ipsam, voluptatibus deserunt veniam doloribus non error, eligendi optio officia exercitationem. Repudiandae, accusantium odit eius maxime fugit cum, recusandae molestiae nam magni quis fuga possimus sed soluta tenetur?</h2>
        </div>
        <img class="why-img" src="/assets/Promosi.jpg" alt="what-content" />
      </div>
    </section>
    <!--========== CONTENT 2 END ==========-->
    <!--========== CONTENT 3 START ==========-->
    <section class="content3">
    <div class="judul-content">
      <h1>WHERE<span>?</span></h1>
    </div>
    <div class="where-content">
        <h1>Dimana Anda Dapat Menggunakan MO<span>CASH</span>?</h1>
        <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17943704.452408355!2d107.21265654121929!3d-2.4033659208182514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c4c07d7496404b7%3A0xe37b4de71badf485!2sIndonesia!5e1!3m2!1sid!2sid!4v1682404209879!5m2!1sid!2sid" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
    </div>
    </section>
    <!--========== CONTENT 3 END ==========-->
    <!--========== CONTENT 4 START ==========-->
    <section class="content4">
    <div class="judul-content">
      <h1>WHO<span>?</span></h1>
    </div>
    <div class="who-content">
        <h1>Siapa Saja Yang Dapat Menggunakan MO<span>CASH</span>?</h1>
        <div class="who-line">
        <img src="/assets/who-removebg-preview.png" alt="">
        <h2>Semua Orang Mampu Dapat Mengunakan MO<span>CASH</span>. Karena MO<span>CASH</span>memiliki interface yang mudah dimengerti dan digunakan.</h2>
    </div>
    </div>
    </section>
    <!--========== CONTENT 4 END ==========-->
    <!--========== CONTENT 5 START ==========-->
    <section class="content5">
    <div class="judul-content">
      <h1>WHEN<span>?</span></h1>
    </div>
    <div class="when-content">
      <h1>Kapan Anda Dapat Menggunakan MO<span>CASH</span>?</h1>
      <div class="when-line">
        <img src="/assets/Another-Clock.gif" alt="gif-jam">
        <h1>MO<span>CASH</span> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit veritatis exercitationem delectus. Magnam modi eum sunt eveniet consequatur quam veritatis sed tempora, facilis incidunt aliquam.</h1>
        <img src="/assets/Another-Clock.gif" alt="gif-jam">
      </div>
    </div>
    </section>
    <!--========== CONTENT 5 END ==========-->
    <!--========== CONTENT 6 START ==========-->
    <section class="content6">
    <div class="judul-content">
      <h1>HOW<span>?</span></h1>
    </div>
    <div class="how-content">
      <div class="box">
        <div class="box-header">
          <h1>Bagaimana Cara Menggunakan MO<span>CASH</span>?</h1>
        </div>
        <ul class="list">
          <li class="item">1. Lakukan Pendaftaran</li>
          <li class="item">2. Lakukan Pembayaran</li>
          <li class="item">3. Lengkapi Data Perusahaan</li>
          <li class="item">4. Masukan Menu dan Harga Produk</li>
          <li class="item">5. Buat Akun Kasir Sesuai Dengan Cabang</li>
          <li class="item">6  Kasir Login dan Membuka Toko</li>
        </ul>
      </div>
    </div>
  </section>
    <!--========== CONTENT 6 END ==========-->
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
