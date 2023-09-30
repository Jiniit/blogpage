<!DOCTYPE html>
<html lang="en">

<?php include "include/header.php"; ?>

<main id="main">
  <section id="contact" class="contact mb-5">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-12 text-center mb-5">
          <h1 class="page-title">Contact us</h1>
        </div>
      </div>

      <div class="row gy-4">

        <div class="col-md-4">
          <div class="info-item">
            <i class="bi bi-geo-alt"></i>
            <h3>Address</h3>
            <address>A108 Adam Street, NY 535022, USA</address>
          </div>
        </div><!-- End Info Item -->

        <div class="col-md-4">
          <div class="info-item info-item-borders">
            <i class="bi bi-phone"></i>
            <h3>Phone Number</h3>
            <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
          </div>
        </div><!-- End Info Item -->

        <div class="col-md-4">
          <div class="info-item">
            <i class="bi bi-envelope"></i>
            <h3>Email</h3>
            <p><a href="mailto:info@example.com">info@example.com</a></p>
          </div>
        </div><!-- End Info Item -->

      </div>

      <div class="container mt-5">
        <form method="post" action="<?php echo base_url('/sendmail') ?>">
          <div class="form-group">
            <label>Receiver Email</label>
            <input type="text" name="mailTo" class="form-control">
          </div>

          <div class="form-group">
            <label>Your Subject</label>
            <input type="text" name="subject" class="form-control">
          </div>
          <div class="form-group">
            <label>Message</label>
            <textarea rows="6" type="text" name="message" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
          </div>
        </form>
      </div>

    </div>
  </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include "include/footer.php"; ?>

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/glightbox/js/glightbox.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/aos/aos.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/php-email-form/validate.js'); ?>"></script>

<!-- Template Main JS File -->
<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>

</body>

</html>