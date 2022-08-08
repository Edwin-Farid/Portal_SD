<?php $this->load->view('web/template/head') ?>
<?php $this->load->view('web/template/header') ?>
<main>

    <!-- Trending Area Start -->
    <div class="trending-area fix">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?= base_url() ?>assets/web/assets/img/hed.png" alt="First slide">
                    </div>
                    <?php

foreach ($benner as $row) : ?>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?= base_url() ?>upload/benner/<?php echo $row->gambar  ?>" alt="First slide">

                    </div>
                  
                    <?php endforeach ?>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <!-- Trending Area End -->
    <!--   Weekly-News start -->
    <div class="weekly-news-area pt-50">
        <div class="container">
            <div class="weekly-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Berita Terbaru</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly-news-active dot-style d-flex dot-style">
                            <?php

                            foreach ($berita as $row) : ?>
                                <div class="weekly-single ">
                                    <div class="weekly-img">
                                        <img src="<?= base_url() ?>upload/berita/<?php echo $row->gambar  ?>" height="250px" alt="">
                                    </div>
                                    <div class="weekly-caption">
                                        <span class="color1"><?= $row->kategori ?></span>
                                        <h4><a href="<?= base_url() ?>Web/detail_berita/<?= $row->id ?>"><?= $row->judul ?></a></h4>
                                    </div>
                                </div>
                            <?php endforeach ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="trending-area fix">
        <div class="container">
            <div class="trending-main">
                <!-- Trending Tittle -->

                <div class="row">

                    <div class="col-lg-8">
                        <?php

                        foreach ($hover as $row) : ?>
                            <!-- Trending Top -->
                            <div class="trending-top mb-30">
                                <div class="trend-top-img">
                                    <img src="<?= base_url() ?>upload/berita/<?php echo $row->gambar  ?>" alt="">
                                    <div class="trend-top-cap">
                                        <span><?= $row->kategori ?></span>
                                        <h2><a href="<?= base_url() ?>Web/detail_berita/<?= $row->id ?>l"><?= $row->judul ?><br> Mts NWDI Pancor</a></h2>
                                    </div>
                                </div>

                            </div>
                        <?php endforeach ?>

                        <!-- Trending Bottom -->
                        <div class="trending-bottom">
                            <div class="row">
                                <?php

                                foreach ($artikel as $row) : ?>
                                    <div class="col-lg-4">

                                        <div class="single-bottom mb-35">
                                            <div class="trend-bottom-img mb-30">
                                                <img src="<?= base_url() ?>upload/berita/<?php echo $row->gambar  ?>" height="200px" alt="">
                                            </div>
                                            <div class="trend-bottom-cap">
                                                <span class="color1"><?= $row->kategori ?></span>
                                                <h4><a href="<?= base_url() ?>Web/detail_berita/<?= $row->id ?>"><?= $row->judul ?></a></h4>
                                            </div>
                                        </div>

                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                    <!-- Riht content -->
                    <div class="col-lg-4">
                        <?php

                        foreach ($berita as $row) : ?>
                            <div class="trand-right-single d-flex">
                                <div class="trand-right-img">
                                    <img src="<?= base_url() ?>upload/berita/<?php echo $row->gambar  ?>" width="100px" alt="">
                                </div>
                                <div class="trand-right-cap">
                                    <span class="color2"><?= $row->kategori ?></span>
                                    <h4><a href="<?= base_url() ?>Web/detail_berita/<?= $row->id ?>"><?= $row->judul ?></a></h4>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Weekly-News -->
    <!-- Whats New Start -->
    <section class="whats-news-area pt-50 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row d-flex justify-content-between">
                        <div class="col-lg-3 col-md-3">
                            <div class="section-tittle mb-30">
                                <h3>Semua Berita</h3>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="properties__button">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!-- Nav Card -->
                            <div class="tab-content" id="nav-tabContent">
                                <!-- card one -->
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="whats-news-caption">
                                        <div class="row">
                                            <?php

                                            foreach ($berita as $row) : ?>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="single-what-news mb-100">
                                                        <div class="what-img">
                                                            <img src="<?= base_url() ?>upload/berita/<?php echo $row->gambar  ?>" height="250px" alt="">
                                                        </div>
                                                        <div class="what-cap">
                                                            <span class="color1"><?= $row->kategori ?></span>
                                                            <h4><a href="<?= base_url() ?>Web/detail_berita/<?= $row->id ?>"><?= $row->judul ?></a></h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach ?>
                                        </div>
                                    </div>

                                </div>
                                <div class="pagination-area pb-45 text-center">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="single-wrap d-flex justify-content-center">
                                                    <nav aria-label="Page navigation example">
                                                        <ul class="pagination justify-content-start">
                                                            <li class="page-item"><a href="<?= base_url('web/berita') ?>" class="page-link" style="color:green; font-size:20px">Selengkapnya > ></a> </li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card two -->

                            </div>

                            <!-- End Nav Card -->
                        </div>

                    </div>

                </div>

                <br>
                <div class="col-lg-4">
                    <!-- Section Tittle -->
                    <div class="section-tittle mb-40">
                        <h3>Statistik Pengunjung</h3>
                    </div>
                    <!-- Flow Socail -->
                    <div class="single-follow mb-45">

                        <div class="single-box">
                            <div class="follow-us d-flex align-items-center">

                                <div class="follow-count">
                                    <span><?php echo $pengunjunghariini ?> orang</span>
                                    <p>Pengunjung Hari Ini</p>
                                </div>
                            </div>
                            <div class="follow-us d-flex align-items-center">

                                <div class="follow-count">
                                    <span><?php echo $totalpengunjung ?> orang</span>
                                    <p>Total Pengunjung</p>
                                </div>
                            </div>
                            <div class="follow-us d-flex align-items-center">

                                <div class="follow-count">
                                    <span><?php echo $pengunjungonline ?> orang</span>
                                    <p>Pengunjung Online</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- New Poster -->
                    <div class="news-poster d-none d-lg-block">
                        <img src="<?= base_url() ?>assets/web/assets/img/23.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Whats New End -->
    <!--   Weekly2-News start -->

    <!-- End Weekly-News -->
    <!-- Start Youtube -->
    <div class="youtube-area video-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="video-items-active">
                        <div class="video-items text-center">
                            <iframe src="https://www.youtube.com/embed/AfSl_8sg4HQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>

                    </div>
                </div>
            </div>
            <div class="video-info">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="testmonial-nav text-center">
                            <div class="single-video">
                                <iframe src="https://www.youtube.com/embed/ORVyA_LLLKI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="single-video">
                                <iframe src="https://www.youtube.com/embed/uC6V_rAqq6w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="single-video">
                                <iframe src="https://www.youtube.com/embed/TQW4bodo7wY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="single-video">
                                <iframe src="https://www.youtube.com/embed/YNeUyNgQc_A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="single-video">
                                <iframe src="https://www.youtube.com/embed/i8O7wOlyGXo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Start youtube -->
    <!--  Recent Articles start -->
    <div class="recent-articles">
        <div class="container">
            <div class="recent-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Galery</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="recent-active dot-style d-flex dot-style">
                            <?php
                            foreach ($galery as $row) : ?>
                                <div class="single-recent mb-100">
                                    <div class="what-img">
                                        <img src="<?= base_url() ?>upload/galery/<?php echo $row->gambar  ?>" width="200px" alt="">
                                    </div>
                                    <div class="what-cap">
                                        <span class="color1"><?= $row->judul ?></span>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Recent Articles End -->
    <!--Start pagination -->
    <div class="pagination-area pb-45 text-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="single-wrap d-flex justify-content-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">
                                <li class="page-item"><a href="<?= base_url('web/galery') ?>" class="page-link" style="color:green; font-size:20px">Selengkapnya > ></a> </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End pagination  -->
</main>
<?php $this->load->view('web/template/footer') ?>