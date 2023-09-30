<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url('admin_assets/images/logos/favicon.png'); ?>" />
  <link rel="stylesheet" href="<?php echo base_url('admin_assets/css/styles.min.css'); ?>" />
</head>

<body>

  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <p class="text-center">Your Social Campaigns</p>
                <?php
                if (session()->getFlashdata('status')) {
                  echo '<h4>' . session()->getFlashdata('status') . '</h4>';
                }
                ?>
                <div class="container mt-5">
                  <form method="post" action="<?php echo base_url('/sendOtpEmail') ?>">
                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" name="mailTo" class="form-control my-2" required>
                    </div>

                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" required name="subject" class="form-control my-2">
                    </div>

                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Generate OTP</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="<?php echo base_url('admin_assets/libs/jquery/dist/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('admin_assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>