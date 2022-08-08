<?php $this->load->view('admin/template/head') ?>
<?php $this->load->view('admin/template/header') ?>
<?php $this->load->view('admin/template/slide') ?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dana Bos</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Form</li>

      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Dana Bos</h5>
            <?php
            $this->load->view('admin/template/alert');
            ?>
            <!-- Horizontal Form -->
            <?php foreach ($dana_bos as $row) { ?>
              <form method="post" action="<?= base_url('dana_bos/update') ?>" enctype="multipart/form-data">
                <div class="row mb-3">
                  <label for="" class="col-sm-2 col-form-label">Tahap</label>
                  <div class="col-sm-10">
                    <input type="text" name="id" value="<?= $row->id ?>" class="form-control" id="">
                    <input type="text" name="tahap" value="<?= $row->tahap ?>" class="form-control" id="">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="" class="col-sm-2 col-form-label">Gelombang</label>
                  <div class="col-sm-10">
                    <input type="text" name="gelombang" class="form-control" value="<?= $row->gelombang ?>" id="">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="" class="col-sm-2 col-form-label">Sekolah</label>
                  <div class="col-sm-10">
                    <input type="text" name="sekolah_sesuai_kepmen" class="form-control" value="<?= $row->sekolah_sesuai_kepmen ?>" id="">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="" class="col-sm-2 col-form-label">Sudah salur</label>
                  <div class="col-sm-10">
                    <input type="text" name="sudah_salur" class="form-control" value="<?= $row->sudah_salur ?>" id="">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="" class="col-sm-2 col-form-label">Belum Salur</label>
                  <div class="col-sm-10">
                    <input type="text" name="belum_salur" class="form-control" value="<?= $row->belum_salur ?>" id="">
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <button type="reset" class="btn btn-secondary">Batal</button>
                </div>
              </form><!-- End Horizontal Form -->

            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>


</main><!-- End #main -->

<?php $this->load->view('admin/template/foot') ?>
<script>
  tinymce.init({
    selector: 'textarea#editor1',
    menubar: false
  });
</script>