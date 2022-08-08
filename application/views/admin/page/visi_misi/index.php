

<?php $this->load->view('admin/template/head') ?>
<?php $this->load->view('admin/template/header') ?>
<?php $this->load->view('admin/template/slide') ?>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Visi Misi</h1>
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
              <h5 class="card-title">Visi Misi</h5>
              <?php
            $this->load->view('admin/template/alert');
            ?>
              <!-- Horizontal Form -->
              <?php foreach($visi_misi as $row){ ?>
              <form action="<?= base_url() ?>Visi_misi/simpan" method="POST">
              <input type="hidden" name="id" value="<?= $row->id ?>" id="">
                <div class="row mb-3">
                  <label for="" class="col-sm-2 col-form-label">Visi</label>
                  <div class="col-sm-10">
                    <textarea name="visi" id="editor"><?= $row->visi ?></textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="" class="col-sm-2 col-form-label">Misi</label>
                  <div class="col-sm-10">
                    <textarea name="misi" id="editor1"><?= $row->misi ?></textarea>
                  </div>
                </div>
              
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <button type="reset" class="btn btn-secondary">Batal</button>
                </div>
              </form><!-- End Horizontal Form -->
              <?php }?>
            </div>
          </div>
          </div>
      </div>
    </section>

  </main><!-- End #main -->

<?php $this->load->view('admin/template/foot') ?>
<script>
  tinymce.init({
    selector: 'textarea#editor',
    menubar: false
  });
  tinymce.init({
    selector: 'textarea#editor1',
    menubar: false
  });
</script>