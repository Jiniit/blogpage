<!DOCTYPE html>
<html lang="en">

<?php include "include/header.php"; ?>

<main id="main">

  <!-- ======= Hero Slider Section ======= -->
  <section id="hero-slider" class="hero-slider">
    <div class="container-md" data-aos="fade-in">
      <div class="row">
        <div class="col-12">
          <div class="swiper sliderFeaturedPosts">
            <div class="swiper-wrapper">
              <?php $limit = 1; ?>
              <?php foreach ($blogs as $blog) : ?>
                <?php if ($limit < 2) { ?>
                  <div class="swiper-slide">
                    <a href="#" class="img-bg d-flex align-items-end" style="background-image: url('<?php echo base_url('assets/img/post-slide-1.jpg'); ?>');">
                      <div class="img-bg-inner">
                        <h2><?= $blog['blog_title'] ?></h2>
                        <p><?= $blog['blog_content'] ?></p>
                      </div>
                    </a>
                  </div>
                <?php }
                $limit++; ?>
              <?php endforeach; ?>
            </div>
            <div class="custom-swiper-button-next">
              <span class="bi-chevron-right"></span>
            </div>
            <div class="custom-swiper-button-prev">
              <span class="bi-chevron-left"></span>
            </div>

            <div class="swiper-pagination"></div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero Slider Section -->

  <!-- ======= Post Grid Section ======= -->
  <section id="posts" class="posts">
    <div class="container" data-aos="fade-up">
      <div class="row g-5">
        <div class="col-lg-4">
          <div class="post-entry-1 lg">
            <?php $limit = 1; ?>
            <?php foreach ($blogs as $blog) : ?>
              <?php if ($limit < 2) { ?>
                <a href="#"><img src="<?php echo base_url('/assets/img/post-landscape-1.jpg'); ?>" alt="" class="img-fluid"></a>
                <div class="post-meta"><span class="date"></span><?= $blog['blog_title'] ?><span class="mx-1">&bullet;</span> <span><?= $blog['blog_posttime']; ?> </span></div>
                <h2><a href="#"></a></h2>
                <p class="mb-4 d-block"><?= $blog['blog_description'] ?></p>
                <div class="d-flex align-items-center author">
                  <div class="photo"><img src="<?php echo base_url('/assets/img/person-1.jpg'); ?>" alt="" class="img-fluid"></div>
                  <div class="name">
                    <h3 class="m-0 p-0"><?= $blog['author_name']; ?> </h3>
                  </div>
                </div>
              <?php }
              $limit++; ?>
            <?php endforeach; ?>
          </div>
        </div>
        <!-- Different -->
        <div class="col-lg-8">
          <div class="row g-5">
            <?php $limit2 = 1; ?>
            <?php foreach ($blogs as $blog) : ?>
              <?php if ($limit2 < 7) { ?>
                <div class="col-lg-4 border-start custom-border">
                  <div class="post-entry-1">
                    <a href="#"><img src="<?php echo base_url('/assets/img/post-landscape-2.jpg'); ?>" alt="" class="img-fluid"></a>
                    <div class="post-meta"><span class="date"><?= $blog['category_name']; ?></span> <span class="mx-1">&bullet;</span> <span><?= $blog['blog_posttime']; ?></span></div>
                    <h2><a href="<?= base_url('singleallblogs/' . $blog['blog_id'] . '/' . $blog['blog_title']); ?>"><?= $blog['blog_title'] ?></a></h2>
                  </div>
                </div>
              <?php }
              $limit2++; ?>
            <?php endforeach; ?>
          </div>
        </div> <!-- End .row -->
      </div>
  </section> <!-- End Post Grid Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include "include/footer.php"; ?>

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?php echo base_url('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?php echo base_url('/assets/vendor/swiper/swiper-bundle.min.js'); ?>"></script>
<script src="<?php echo base_url('/assets/vendor/glightbox/js/glightbox.min.js'); ?>"></script>
<script src="<?php echo base_url('/assets/vendor/aos/aos.js'); ?>"></script>
<script src="<?php echo base_url('/assets/vendor/php-email-form/validate.js'); ?>"></script>

<!-- Template Main JS File -->
<script src="<?php echo base_url('/assets/js/main.js'); ?>"></script>

</body>

</html>