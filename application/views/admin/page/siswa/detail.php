<?php $this->load->view('admin/template/head') ?>
<?php $this->load->view('admin/template/header') ?>
<?php $this->load->view('admin/template/slide') ?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Detail Guru</h1>
    <nav>
      <ol class="breadcrumb">
        
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <?php foreach($detail as $row){ ?>
  <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="<?= base_url() ?>upload/guru/<?php echo $row->gambar  ?>" alt="Profile" class="rounded-circle">
              <h2><?= $row->nama ?>,<?=$row->pangkat  ?></h2>
              <h3><?= $row->tugas ?></h3>
              <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                </li>

         

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                
                  <h5 class="card-title">Profile Details</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nama Lengkap</div>
                    <div class="col-lg-9 col-md-8"><?=$row->nama  ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">NIP</div>
                    <div class="col-lg-9 col-md-8"><?=$row->nip  ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">NUPTK</div>
                    <div class="col-lg-9 col-md-8"><?=$row->nuptk  ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                    <div class="col-lg-9 col-md-8"><?=$row->jk  ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Tempat Lahir</div>
                    <div class="col-lg-9 col-md-8"><?=$row->tmp_lhr  ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Pelajaran</div>
                    <div class="col-lg-9 col-md-8"><?=$row->pelajaran  ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Tugas</div>
                    <div class="col-lg-9 col-md-8"><?=$row->tugas  ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?=$row->email  ?></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Alamat</div>
                    <div class="col-lg-9 col-md-8"><?=$row->alamat  ?></div>
                  </div>

                </div>

             

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>






    <?php }?>
    </main><!-- End #main -->

<?php $this->load->view('admin/template/foot') ?>
<script>
  tinymce.init({
    selector: 'textarea#editor1',
    menubar: false
  });
</script>