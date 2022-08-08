<?php $this->load->view('web/template/head') ?>
<?php $this->load->view('web/template/header') ?>
<main>
    <!-- About US Start -->
    <div class="about-area">
        <div class="container">
            <!-- Hot Aimated News Tittle-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="trending-tittle">
                        <strong>Trending now</strong>
                        <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                        <div class="trending-animated">
                            <ul id="js-news" class="js-hidden">
                                <?php

                                foreach ($berita as $row) : ?>
                                    <li class="news-item"><?= $row->judul ?></li>

                                <?php endforeach ?>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <?php

                        foreach ($berita_bea as $row) : ?>
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

            
                    </div>
                </div>
                <div class="col-lg-4">

                    <div class="news-poster d-none d-lg-block">
                        <img src="<?= base_url() ?>assets/web/assets/img/23.png" alt="">
                    </div>

                </div>

            </div>

        </div>
    </div>
    <!-- About US End -->
</main><br>
<?php $this->load->view('web/template/footer') ?>