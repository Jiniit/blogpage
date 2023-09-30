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
  <?php
  if (session()->getFlashdata('status')) {
    echo '<h4>' . session()->getFlashdata('status') . '</h4>';
  }
  ?>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <?php include "includes/sidebar.php"; ?>

    <header class="app-header">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
          <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
            <a href="<?php echo base_url('/addauthor'); ?>" target="_blank" class="btn btn-primary">Add Author</a>
          </ul>
        </div>
      </nav>
    </header>

    <!--  Header End -->
    <div class="container-fluid">
      <div class="card-body">
        <div class="card">
          <div class="table-responsive">
            <table class="table text-nowrap mb-0 align-middle">
              <thead class="text-dark fs-4">
                <tr>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Id</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Name</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Email</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Actions</h6>
                  </th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($authors as $row) : ?>
                  <tr>
                    <td><?= $row['author_id'] ?></td>
                    <td><?= $row['author_name'] ?></td>
                    <td><?= $row['author_email'] ?></td>
                    <td>
                      <a class="btn btn-success" href="<?= base_url('editAuthor/' . $row['author_id']) ?>">Edit</a>
                      <a class="btn btn-danger" href="<?= base_url('deleteAuthor/' . $row['author_id']) ?>">Delete</a>
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