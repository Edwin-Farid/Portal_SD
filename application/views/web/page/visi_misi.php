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
                        <div class="col-lg-8">
                            <!-- Trending Tittle -->
                                    <div class="about-right mb-90">
                                        <div class="about-img">
                                            <img src="<?= base_url() ?>assets/web/assets/img/post/mts.png" alt="">
                                        </div>
                                        <div class="section-tittle mb-30 pt-30">
                                            <h3>Visi Misi MTS NWDI Pancor</h3>
                                        </div>
                                        <div class="about-prea">
                                                 <p class="about-pera1 mb-25">
                                                 <?php

foreach ($visi_misi as $row) : ?>
<h3>Visi</h3>
<p><?= $row->visi ?></p>
<h3>Misi</h3>
<p><?= $row->misi ?></p>
  <?php endforeach ?>
                                              </p>
                                        </div>
                                    </div>
                        </div>
                      <div class="col-lg-4">
                  
                    <div class="news-poster d-none d-lg-block">
                        <img src="<?=  base_url() ?>assets/web/assets/img/23.png" alt="">
                    </div>

                </div>
                
                   </div>
                   
            </div>
        </div>
        <!-- About US End -->
    </main><br>
<?php $this->load->view('web/template/footer') ?>
