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
            <a href="<?php echo base_url('/addblog'); ?>" target="_blank" class="btn btn-primary">Add Blog</a>
          </ul>
        </div>
      </nav>
    </header>

    <!--  Header End -->
    <div class="container-fluid">
      <div class="card-body">
        <div class="card">
          <div class="table-responsive">
            <table class="table mb-0 align-middle">
              <thead class="text-dark fs-4">
                <tr>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Id</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Author</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Category</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Title</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Description</h6>
                  </th>
                  <th class="border-bottom-0">
                    <h6 class="fw-semibold mb-0">Content</h6>
                  </th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <?php foreach ($blogs as $row) : ?>
                <tr>
                  <td><?= $row['blog_id'] ?></td>
                  <td>
                    <p><?= $row['author_name'] ?></p>
                  </td>
                  <td>
                    <p><?= $row['category_name'] ?></p>
                  </td>
                  <td style="width:200px"><?= $row['blog_title'] ?></td>
                  <td style="width:200px"><?= $row['blog_description'] ?></td>
                  <td>
                    <a class="btn btn-success" href="<?= base_url('editBlog/' . $row['blog_id']) ?>">Edit</a>
                    <a class="btn btn-danger" href="<?= base_url('deleteBlog/' . $row['blog_id']) ?>" onclick="return confirmDelete();">Delete</a>
                    <script>
                      function confirmDelete() {
                        return confirm("Are you sure you want to delete this blog?");
                      }
                    </script>

                  </td>
                </tr>
              <?php endforeach; ?>
              </tr>
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