Hello<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modernize Free</title>
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url('admin_assets/images/logos/favicon.png'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('admin_assets/css/styles.min.css'); ?>" />
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
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
                        <div class="card">
                            <div class="card-body">
                                <form action="<?php echo base_url('/updateAuthor'); ?> " method="post">
                                    <label for="title1" class="form-label">Author ID</label>
                                    <input type="text" readonly name="author_id" value="<?= $author['author_id'] ?>" class="form-control" id="bcid">
                            </div>
                            <div class="mb-3">
                                <label for="title1" class="form-label">Author Name</label>
                                <input type="text" name="author_name" value="<?= $author['author_name'] ?>" class="form-control" id="baid">
                            </div>
                            <div class="mb-3">
                                <label for="description1" class="form-label">Author Email</label>
                                <input type="text" name="author_email" value="<?= $author['author_email'] ?>" class="form-control" id="bdescription1">
                            </div>
                            <div class="mb-3">
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