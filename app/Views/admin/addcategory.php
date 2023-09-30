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
        <!-- Sidebar Start -->
        <?php include "includes/sidebar.php"; ?>
        <!--  Header End -->
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold mb-4">Add Category</h5>
                        <div class="card">
                            <div class="card-body">
                                <form action="/submitCategory" method="post">
                                    <div class="mb-3">
                                        <label for="cname1" class="form-label">Category Name</label>
                                        <input type="text" name="category_name" class="form-control" id="title1" aria-describedby="emailHelp">
                                        <div id="emailHelp" class="form-text"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="description1" class="form-label">Category Description</label>
                                        <input type="text" name="category_description" class="form-control" id="cdescription1">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url('admin_assets/libs/jquery/dist/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('admin_assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('admin_assets/js/sidebarmenu.js'); ?>"></script>
    <script src="<?php echo base_url('admin_assets/js/app.min.js'); ?>"></script>
    <script src="<?php echo base_url('admin_assets/libs/simplebar/dist/simplebar.js'); ?>"></script>
</body>

</html>