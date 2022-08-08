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
            <div class="section-top-border">
				<h3>Vidio</h3>
				<div class="row gallery-item">
                <?php

foreach ($vidio as $row) : ?>
					<div class="col-md-4">
                 
                    <iframe src="<?= $row->link ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                       
                    <h6><?= $row->judul ?></h6>
                        </a>
					</div>
                    <?php endforeach ?>
				</div>
			</div>

        </div>
    </div>
    <!-- About US End -->
</main><br>
<?php $this->load->view('web/template/footer') ?>
<script type="text/css">
  
</script>