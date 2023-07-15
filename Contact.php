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
    <link rel="stylesheet" href="/CSS/Contact.css"/>
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
        <a href="/index.php" class="nav__logo"
          >MO<span>CASH</span></a
        >
        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="/About.php" class="nav__link">Tentang</a>
            </li>
            <li class="nav__item">
              <a href="/Product.php" class="nav__link">Produk</a>
            </li>
            <li class="nav__item">
              <a href="/Profile.php" class="nav__link">Profil</a>
            </li>
            <li class="nav__item">
              <a href="/Contact.php" class="nav__link">Kontak</a>
            </li>
            <li><i class="bx bx-moon change-theme" id="theme-button"></i></li>
            <li><a href="Login.php" class="bx bx-user login-theme" id="theme-button"></a></li>
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
          <h1>KONTAK</h1>
        </div>
      </div>
      <div class="cta-clip">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis autem minima porro numquam. Incidunt, expedita amet aut illum iure debitis temporibus possimus. Suscipit quo maxime cumque ad! Obcaecati officiis sit atque delectus asperiores laboriosam magni, molestiae ipsum, quod sequi distinctio.</p>
      </div>
    </section>
    <!--========== HERO END ==========-->
    <!--========== CONTENT START ==========-->
    <div class="content">
      <div class="peta">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.1797750485835!2d106.8210956754032!3d-6.37077619361941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec1cabb59bdf%3A0x28b4f84e4677f329!2sPoliteknik%20Negeri%20Jakarta!5e0!3m2!1sid!2sid!4v1689349573605!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="mail">
        <h1>Hubungi Kami</h1>
        <form method="post" action="#" enctype="multipart/form-data" class="form">
          <input type="email" id="email" name="email" placeholder="Email" class="data" required><br><br>         
          <input type="text" id="subjek" name="subjek" placeholder="Subjek" class="data" required><br><br>
          <textarea id="isi" name="isi" rows="4" cols="50" class="isi" required></textarea><br><br>
          <input type="file" id="file" name="file" class="data"><br><br>
          <input type="submit" value="Kirim" class="btn">
        </form>
      </div>
    </div>
    <!--========== CONTENT END ==========-->
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
