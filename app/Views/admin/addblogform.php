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
                                <form action="<?php echo base_url('/submitBlog'); ?> " method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="title1" class="form-label">Blog Title</label>
                                        <input type="text" name="blog_title" class="form-control" id="title1" aria-describedby="emailHelp">
                                        <div id="emailHelp" class="form-text"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="description1" class="form-label">Blog Description</label>
                                        <input type="text" name="blog_description" class="form-control" id="description1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="content1" class="form-label">Blog Content</label>
                                        <textarea name="blog_content" class="form-control" id="content1"></textarea>
                                        <script>
                                            CKEDITOR.replace('blog_content');
                                        </script>
                                    </div>
                                    <div class="mb-3">
                                        Select image to upload:
                                        <input type="file" name="blog_image" id="fileToUpload">
                                    </div>
                                    <div class="mb-3">
                                        <label for="author" class="form-label">Blog Author</label>
                                        <select name="author_id" class="form-control" id="author1">
                                            <option value="">Select an author</option>
                                            <?php foreach ($authors as $author) : ?>
                                                <option value="<?= $author['author_id'] ?>"><?= $author['author_name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="category" class="form-label">Blog Category</label>
                                        <select name="category_id" class="form-control" id="category1">
                                            <option value="">Select a Category</option>
                                            <?php foreach ($categories as $category) : ?>
                                                <option value="<?= $category['category_id'] ?>"><?= $category['category_name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
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