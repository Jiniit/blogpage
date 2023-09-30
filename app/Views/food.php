<?php include "include/header.php" ?>

<body>
    <section id="posts" class="posts">
        <div class="container" data-aos="fade-up">
            <div class="row g-5">
                <div class="row mt-5 pt-5">
                    <?php $limit = 1; ?>
                    <?php foreach ($blogs as $blog) : ?>
                        <?php if ($limit < 5) { ?>
                            <div class="col-md-9" data-aos="fade-up">
                                <h3 class="category-title">
                                </h3>
                                <div class="d-md-flex post-entry-2 half">
                                    <a href="single-post.html" class="me-4 thumbnail">
                                        <img src="<?php echo base_url('/assets/img/') . $blog->blog_image ?>" alt="" class="img-fluid">
                                    </a>
                                    <div>
                                        <div class="post-meta"><span class="date">
                                                <?= $blog->category_name ?>
                                            </span> <span class="mx-1">&bullet;</span> <span><?= $blog->blog_posttime ?></span></div>
                                        <h3><a href="<?= base_url('singleallblogs/' . $blog->blog_id . '/' . $blog->blog_title); ?>"><?= $blog->blog_title ?></a></h3>
                                        <p><?= $blog->blog_content ?></p>
                                        <div class="d-flex align-items-center author">
                                            <div class="photo"><img src="<?php echo base_url('/assets/img/person-1.jpg') ?>" alt="" class="img-fluid"><?= $blog->author_name ?></div>
                                            <div class="name">
                                                <h3 class="m-0 p-0"></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <?php }
                                $limit++; ?> <?php endforeach; ?>
                    <div class="text-start py-4">
                        <div class="custom-pagination">
                            <a href="#" class="prev">Prevous</a>
                            <a href="#" class="active">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">5</a>
                            <a href="#" class="next">Next</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include "include/footer.php" ?>
</body>