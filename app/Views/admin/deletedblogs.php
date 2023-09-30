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
        <!-- <?php //include "/includes/sidebar.php"; 
                ?> -->

        <!--  Header End -->
        <div class="container-fluid">
            <div class="card-body">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table mb-0 align-middle">
                            <thead class="text-dark fs-4">
                                <tr>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Title</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Actions</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody> 
                                <?php foreach ($blogs as $row) : ?>
                                    <tr>
                                        <td><?= $row['blog_title'] ?></td>
                                        <td>
                                                <a class="btn btn-success" href="<?= base_url('restoreBlog/' . $row['blog_id']) ?>">Restore</a>
                                            <a class="btn btn-danger" href="<?= base_url('perDeletedblogs/' . $row['blog_id']) ?>" onclick="return confirmDelete();">Delete</a>
                                            <script>
                                                function confirmDelete() {
                                                    return confirm("Are you sure you want to delete this blog?");
                                                }
                                            </script>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
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