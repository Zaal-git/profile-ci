<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section">

  <style>
    /* Efek Hover pada Gambar Portfolio */
    .portfolio-img-wrapper {
        overflow: hidden;
        position: relative;
        transition: transform 0.3s ease-in-out;
    }

    .portfolio-img {
        width: 100%;
        transition: transform 0.3s ease-in-out;
    }

    .portfolio-img-wrapper:hover .portfolio-img {
        transform: scale(1.1); /* Memperbesar gambar saat hover */
    }

    /* Animasi untuk Info Portfolio */
    .portfolio-info {
        opacity: 0;
        transform: translateY(50px);
        transition: opacity 0.4s ease, transform 0.4s ease;
    }

    .portfolio-item:hover .portfolio-info {
        opacity: 1;
        transform: translateY(0);
    }

    /* Efek hover pada portfolio item */
    .portfolio-item {
        position: relative;
        overflow: hidden;
    }

    .portfolio-item:hover .portfolio-img-wrapper {
        transform: scale(1.05); /* Efek zoom saat hover */
        transition: transform 0.3s ease;
    }
  </style>

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Portfolio</h2>
    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
      
      <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
        <li data-filter="*" class="filter-active">All</li>
        <li data-filter=".filter-game">Game</li>
        <li data-filter=".filter-website">Website</li>
        <li data-filter=".filter-design">Design</li>
      </ul><!-- End Portfolio Filters -->

      <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

        <?php foreach ($portfolio_items as $item): ?>
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item <?= $item['category']; ?>" data-aos="zoom-in-up" data-aos-delay="100">
              <!-- Gambar dengan animasi hover -->
              <div class="portfolio-img-wrapper">
                  <img src="<?= base_url($item['image_path']); ?>" class="img-fluid portfolio-img" alt="">
              </div>
              <div class="portfolio-info">
                  <h4><?= $item['title']; ?></h4>
                  <p><?= $item['description']; ?></p>
                  <!-- Link untuk melihat gambar besar -->
                  <a href="<?= base_url($item['image_path']); ?>" title="<?= $item['title']; ?>" data-gallery="portfolio-gallery-<?= $item['category']; ?>" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <!-- Link ke halaman detail portfolio -->
                  <a href="<?= base_url('welcome/portfolio_details/' . $item['id']); ?>" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
          </div><!-- End Portfolio Item -->
        <?php endforeach; ?>

      </div><!-- End Portfolio Container -->

    </div>
  </div>

</section><!-- /Portfolio Section -->
