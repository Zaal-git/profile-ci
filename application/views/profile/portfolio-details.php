<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Portfolio Details</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets/');?>img/favicon.png" rel="icon">
  <link href="<?= base_url('assets/');?>img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/');?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/');?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url('assets/');?>vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url('assets/');?>vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/');?>vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?= base_url('assets/');?>css/main.css" rel="stylesheet">

</head>

<body class="portfolio-details-page">

  <header id="header" class="header d-flex flex-column justify-content-center">

    <i class="header-toggle d-xl-none bi bi-list"></i>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="<?= base_url('welcome');?>"><i class="bi bi-house navicon"></i><span>Home</span></a></li>
      </ul>
    </nav>

  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="container">
        <nav class="breadcrumbs">
          <ol>
            <li><a href="<?= base_url('welcome');?>">Home</a></li>
            <li class="current">Portfolio Details</li>
          </ol>
        </nav>
        <h1>Portfolio Details</h1>
      </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">

      <div class="container" data-aos="fade-up">

        <!-- Image Gallery -->
        <div class="portfolio-details-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              },
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
          <?php if (!empty($portfolio_item['images'])): ?>
              <?php foreach ($portfolio_item['images'] as $image): ?>
                  <div class="swiper-slide">
                      <img src="<?= base_url('assets/uploads/portfolio/' . $image); ?>" alt="Portfolio Image">
                  </div>
              <?php endforeach; ?>
          <?php else: ?>
              <div class="swiper-slide">
                  <img src="<?= base_url('assets/img/portfolio/default.jpg'); ?>" alt="Default Portfolio Image">
              </div>
          <?php endif; ?>

          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
          <div class="swiper-pagination"></div>
        </div>

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8" data-aos="fade-up">
            <div class="portfolio-description">
              <!-- Title and Description -->
              <h2><?= isset($portfolio_item['title']) ? $portfolio_item['title'] : 'Untitled Project'; ?></h2>
              <p>
                <?= isset($portfolio_item['description']) ? $portfolio_item['description'] : 'No description available.'; ?>
              </p>
            </div>
          </div>

          <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="portfolio-info">
              <h3>Project Information</h3>
              <ul>
                <!-- Category, Client, Project Date, Project URL -->
                <li><strong>Category</strong> <?= isset($portfolio_item['category']) ? $portfolio_item['category'] : 'N/A'; ?></li>
                <li><strong>Client</strong> <?= isset($portfolio_item['client']) ? $portfolio_item['client'] : 'No client provided'; ?></li>
                <li><strong>Project Date</strong> <?= isset($portfolio_item['project_date']) ? $portfolio_item['project_date'] : 'Unknown date'; ?></li>
                <li><strong>Project URL</strong> <a href="<?= isset($portfolio_item['project_url']) ? $portfolio_item['project_url'] : '#'; ?>" target="_blank"><?= isset($portfolio_item['project_url']) ? $portfolio_item['project_url'] : 'No URL available'; ?></a></li>
                <li><a href="<?= isset($portfolio_item['project_url']) ? $portfolio_item['project_url'] : '#'; ?>" class="btn-visit align-self-start">Visit Website</a></li>
              </ul>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Portfolio Details Section -->

  </main>

  <footer id="footer" class="footer position-relative light-background">
    <div class="container">
      <h3 class="sitename">Brandon Johnson</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class="social-links d-flex justify-content-center">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-skype"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
      <div class="container">
        <div class="copyright">
          <span>Copyright</span> <strong class="px-1 sitename">Alex Smith</strong> <span>All Rights Reserved</span>
        </div>
        <div class="credits">
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('assets/');?>vendor/purecounter/purecounter.js"></script>
  <script src="<?= base_url('assets/');?>vendor/aos/aos.js"></script>
  <script src="<?= base_url('assets/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/');?>vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url('assets/');?>vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url('assets/');?>vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/');?>js/main.js"></script>

</body>

</html>
