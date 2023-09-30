<!doctype html>
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
                        <h5 class="card-title fw-semibold mb-4">Add Blog</h5>
                        <div class="card">
                            <div class="card-body">
                                <form action="<?php echo base_url('/updateBlog'); ?> " method="post">
                                    <div class="mb-3">
                                        <label for="title1" class="form-label">Blog ID</label>
                                        <input type="text" readonly name="blog_id" value="<?= $blog['blog_id'] ?>" class="form-control" id="bid1">
                                        <div id="emailHelp" class="form-text"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="title1" class="form-label">Blog Title</label>
                                        <input type="text" name="blog_title" value="<?= $blog['blog_title'] ?>" class="form-control" id="btitle1">
                                        <div id="emailHelp" class="form-text"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="description1" class="form-label">Blog Description</label>
                                        <input type="text" name="blog_description" value="<?= $blog['blog_description'] ?>" class="form-control" id="bdescription1">

                                    </div>
                                    <div class="mb-3">
                                        <label for="blog_content" class="form-label">Blog Content</label>
                                        <textarea name="blog_content" rows="4" cols="50" class="form-control" id="bcontent1"><?= $blog['blog_content'] ?></textarea>
                                        <script>
                                            CKEDITOR.replace('blog_content');
                                        </script>
                                    </div>
                                    <div class="mb-3">
                                        <label for="title1" class="form-label">Author ID</label>
                                        <input type="text" name="author_id" value="<?= $blog['author_id'] ?>" class="form-control" id="baid">
                                        <div id="emailHelp" class="form-text"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="title1" class="form-label">Author Name</label>
                                        <input type="text" name="author_id" value="<?= $blog['author_name'] ?>" class="form-control" id="baid">
                                        <div id="emailHelp" class="form-text"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="title1" class="form-label">Category ID</label>
                                        <input type="text" name="category_id" value="<?= $blog['category_id'] ?>" class="form-control" id="bcid">
                                        <div id="emailHelp" class="form-text"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="title1" class="form-label">Author Name</label>
                                        <input type="text" name="author_id" value="<?= $blog['category_name'] ?>" class="form-control" id="baid">
                                        <div id="emailHelp" class="form-text"></div>
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