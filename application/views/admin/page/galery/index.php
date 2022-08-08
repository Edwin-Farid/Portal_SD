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
            <form method="post" action="<?= base_url('Galery/simpan') ?>" enctype="multipart/form-data">
      
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                  <input type="text" name="judul" class="form-control" id="">
                </div>
              </div>
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Foto</label>

                <div class="col-sm-10">

                  <input type="file" name="gambar" class="form-control" id="">
                  <p><i class="alert-danger">Max Size : 2.48MB, Width : 2807px, Height : 2433px</i></p>
                </div>
              </div>
              
              <div class="text-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-secondary">Batal</button>
              </div>
            </form><!-- End Horizontal Form -->

          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Data Galery</h5>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Judul</th>
                  <th scope="col">Gambar</th>
            
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($galery as $row) : ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row->judul ?></td>
                    <td><img src="<?= base_url() ?>upload/galery/<?php echo $row->gambar  ?>" width="100px" alt=""></td>
               
                    <td>
                      <a href="<?= base_url() ?>Galery/edit/<?= $row->id ?>"><i class="bi bi-pencil-square"></i></a>
                      <a href="<?= base_url() ?>Galery/hapus/<?= $row->id ?>"><i class="bi bi-trash-fill"></i></a>
                    </td>
                  </tr>


                <?php endforeach ?>

              </tbody>
            </table>
            <!-- End Table with stripped rows -->

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