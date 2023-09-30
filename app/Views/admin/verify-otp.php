<!DOCTYPE html>
<html>

<head>
    <title>OTP Verification</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url('admin_assets/images/logos/favicon.png'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('admin_assets/css/styles.min.css'); ?>" />
</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <p class="text-center">Verfiy OTP</p>
                                <div class="container mt-5">
                                    <form method="post" action="<?php echo base_url('/verifyOtp') ?>">
                                        <div id="countdown-timer">90
                                            <script>
                                                function updateCountdown() {
                                                    const timerElement = document.getElementById('countdown-timer');
                                                    let countdown = parseInt(timerElement.textContent);

                                                    if (countdown > 0) {
                                                        countdown--;
                                                        timerElement.textContent = countdown;
                                                    } else {
                                                        timerElement.textContent = 'Expired';
                                                        clearInterval(countdownInterval);
                                                    }
                                                }
                                                const countdownInterval = setInterval(updateCountdown, 1000);
                                            </script>
                                        </div>

                                        <div class="form-group">
                                            <input type="email" name="mailTo" value=<?= $email ?> class="form-control my-1" readonly>
                                            <label>Enter OTP</label>
                                            <input type="text" name="otp" class="form-control my-1">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                                        </div>
                                    </form>
                                    <form action="<?= base_url('/resendOtp'); ?>" method="post">
                                        <button type="submit" id="resend-otp">Resend OTP</button>
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
    <!-- <script>
        function resendOtp() {
            const email = '</?php echo $email; ?>';
            const url = '</?= base_url('/resendOtp') ?>';

            fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    },
                    body: 'email=' + email
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'success') {
                        alert(data.message);
                    } else {
                        alert(data.message);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }
    </script> -->

</body>

</html>