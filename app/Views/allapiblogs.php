<?php include "include/header.php" ?>

<body>
    <section id="posts" class="posts">
        <div class="container" data-aos="fade-up">
            <div class="row g-5">
                <div class="row mt-5 pt-5">

                    <?php foreach ($api_blogs as $blog) : ?>

                        <div class="col-md-9" data-aos="fade-up">
                            <h3 class="category-title">
                            </h3>
                            <div class="d-md-flex post-entry-2 half">
                                <!-- <a href="single-post.html" class="me-4 thumbnail">
                                        <img src="<? // echo base_url('/assets/img/') . $blog->blog_image; 
                                                    ?>" alt="" class="img-fluid">
                                    </a> -->
                                <div>
                                    <h3><a href="<?= base_url('frontApiBlogs/' . $blog['id'] . '/' . $blog['title']); ?>"><?= $blog['title'] ?></a></h3>
                                    <p><?= $blog['body'] ?></p>
                                </div>
                            </div>
                        </div> <?php endforeach; ?>
                    <div class="text-start py-4">
                        <div class="custom-pagination">
                            <?= $pager->links() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include "include/footer.php" ?>
</body>