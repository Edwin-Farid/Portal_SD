<?php $this->load->view('admin/template/head') ?>
<?php $this->load->view('admin/template/header') ?>
<?php $this->load->view('admin/template/slide') ?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Kategori</h1>
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
            <h5 class="card-title">Kategori</h5>
            <?php
            $this->load->view('admin/template/alert');
            ?>
            <!-- Horizontal Form -->
            <?php foreach($kategori as $row){ ?>
            <form method="post" action="<?= base_url('kategori/update') ?>">
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Kategori</label>
                <div class="col-sm-10">
               <input type="hidden" name="id" value="<?= $row->id ?>" class="form-control" id="">
               <input type="text" name="kategori" value="<?= $row->kategori ?>" class="form-control" id="">
                </div>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary">Update</button>
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
    selector: 'textarea#editor1',
    menubar: false
  });
</script>