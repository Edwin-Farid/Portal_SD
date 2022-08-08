<?php $this->load->view('admin/template/head') ?>
<?php $this->load->view('admin/template/header') ?>
<?php $this->load->view('admin/template/slide') ?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Galery</h1>
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
            <h5 class="card-title">Galery</h5>
            <?php
            $this->load->view('admin/template/alert');
            ?>
            <!-- Horizontal Form -->
            <?php foreach ($galery as $row) { ?>
              <form method="post" action="<?= base_url('Galery/update') ?>" enctype="multipart/form-data">

                <div class="row mb-3">
                  <label for="" class="col-sm-2 col-form-label">Judul</label>
                  <div class="col-sm-10">
                    <input type="text" name="judul" class="form-control" value="<?= $row->judul ?>" id="">
                    <input type="hidden" name="id" class="form-control" value="<?= $row->id ?>" id="">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="" class="col-sm-2 col-form-label">Foto</label>

                  <div class="col-sm-10">

                    <input type="file" name="gambar" class="form-control" id="">
                    <p><i class="alert-danger">Max Size : 2.48MB, Width : 2807px, Height : 2433px</i></p>
                 <br>
                 <img src="<?= base_url() ?>upload/galery/<?php echo $row->gambar  ?>" width="200px" alt="">
                 
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