<?php $this->load->view('web/template/head') ?>
<?php $this->load->view('web/template/header') ?>

<main>

    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
          
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <?php

                        foreach ($berita as $row) : ?>
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="<?= base_url() ?>upload/berita/<?php echo $row->gambar  ?>" alt="">
                                    <a href="#" class="blog_item_date">
                                        <h3><?= $row->created_at ?></h3>

                                    </a>
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="<?= base_url() ?>Web/detail_berita/<?= $row->id ?>">
                                        <h2><?= $row->judul ?></h2>
                                    </a>
                                    <p><?= character_limiter($row->isi, 300) ?></p>
                                    <ul class="blog-info-link">
                                        <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                                        <li><a href="#"><i class="fa fa-calendar"></i> <?= $row->created_at ?></a></li>
                                    </ul>
                                </div>
                            </article>

                        <?php endforeach ?>

                        <nav aria-label="Page navigation">
                            <?php echo $this->pagination->create_links(); ?>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="#">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='Search Keyword' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                                        <div class="input-group-append">
                                            <button class="btns" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Search</button>
                            </form>
                        </aside>

                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Kategori</h4>
                            <ul class="list cat-list">
                                <?php

                                foreach ($kategori as $row) : ?>
                                    <li>
                                        <a href="#" class="d-flex">
                                            <p><?= $row->kategori ?></p>

                                        </a>
                                    </li>
                                <?php endforeach ?>

                            </ul>
                        </aside>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Postingan Terbaru</h3>
                            <?php

                            foreach ($post as $row) : ?>
                                <div class="media post_item">
                                    <img src="<?= base_url() ?>upload/berita/<?php echo $row->gambar  ?>" width="50px" alt="post">
                                    <div class="media-body">
                                        <a href="<?= base_url() ?>Web/detail_berita/<?= $row->id ?>">
                                            <h3><?= character_limiter($row->judul, 50) ?></h3>
                                        </a>
                                        <p><?= $row->created_at ?></p>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<?php $this->load->view('web/template/footer') ?>