<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <?php

    foreach ($detail as $row) {
    ?>
    <title><?= $row->judul; ?> </title>
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="<?= $row->judul; ?>" />

        <meta property="og:site_name" content="Wisata Labuhan Burung" />
        <meta property="article:tag" content="Desa Wisata" />
        <meta property="article:section" content="Desa Wisata" />
        <meta property="og:image" content="http://mtsnwdipancor.com/upload/berita/<?= $row->gambar; ?>" />
        <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/web/assets/img/logo/logo1.png">
        <meta name="description" content="<?= $row->judul; ?>" />
    <?php
    }
    ?>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="<?= base_url() ?>assets/web/site.webmanifest">

    <!-- CSS here -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/web/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/web/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/web/assets/css/ticker-style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/web/assets/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/web/assets/css/slicknav.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/web/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/web/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/web/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/web/assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/web/assets/css/slick.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/web/assets/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/web/assets/css/style1.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/depen/thema/css/bootstrap.min.css">
    <!-- animate CSS -->
  

</head>
<?php $this->load->view('web/template/header') ?>

<main>
    <!-- About US Start -->
    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 posts-list">
                    <?php

                    foreach ($detail as $row) : ?>
                        <div class="single-post">
                            <div class="feature-img">
                                <img class="img-fluid" src="<?= base_url() ?>upload/berita/<?php echo $row->gambar  ?>" width="100%" alt="">
                            </div>
                            <div class="blog_details">
                                <h2><?php echo $row->judul  ?>
                                </h2>
                                <ul class="blog-info-link mt-3 mb-4">
                                    <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                                    <li><a href="#"><i class="fa fa-calendar"></i> <?= $row->created_at ?></a></li>
                                </ul>
                                <p class="excert">
                                    <?= $row->isi ?>
                                </p>

                            </div>
                        </div>

                    <?php endforeach ?>
                    <div class="navigation-top">
                        <div class="d-sm-flex justify-content-between text-center">
                            <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                                people like this</p>
                            <div class="col-sm-4 text-center my-2 my-sm-0">
                                <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                            </div>
                            
                            <ul class="social-icons">
                                <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                                    <a class="a2a_button_whatsapp"></a>
                                    <a class="a2a_button_facebook"></a>
                                    <a class="a2a_button_twitter"></a>
                                    <a class="a2a_button_telegram"></a>
                                    <a class="a2a_button_facebook_messenger"></a>
                                    <a class="a2a_button_copy_link"></a>

                                </div>
                                <script async src="https://static.addtoany.com/menu/page.js"></script>
                            </ul>
                        </div>

                    </div>


                    <div class="comment-form">
                        <h4>Leave a Reply</h4>
                        <form class="form-contact comment_form" action="#" id="commentForm">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                            </div>
                        </form>
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
</main><br>
<?php $this->load->view('web/template/footer') ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=61419e884ec3a20019789c43&product=image-share-buttons' async='async'></script>