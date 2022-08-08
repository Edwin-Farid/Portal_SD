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
            <form method="post" action="<?= base_url('Dana_bos/simpan') ?>" enctype="multipart/form-data">
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Tahap</label>
                <div class="col-sm-10">
                  <input type="text" name="tahap" class="form-control" id="">
                </div>
              </div>
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Gelombang</label>
                <div class="col-sm-10">
                  <input type="text" name="gelombang" class="form-control" id="">
                </div>
              </div>
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Sekolah</label>
                <div class="col-sm-10">
                  <input type="text" name="sekolah_sesuai_kepmen" class="form-control" id="">
                </div>
              </div>

              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Sudah Salur</label>
                <div class="col-sm-10">
                  <input type="text" name="sudah_salur" class="form-control" id="">
                </div>
              </div>

              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Belum Salur</label>
                <div class="col-sm-10">
                  <input type="text" name="belum_salur" class="form-control" id="">
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
            <h5 class="card-title">Data Dana Bos</h5>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Tahap</th>
                  <th scope="col">Gelombang</th>
                  <th scope="col">Sekolah</th>
                  <th scope="col">Sudah Salur</th>
                  <th scope="col">Belum Salur</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($dana_bos as $row) : ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row->tahap ?></td>
                    <td><?= $row->gelombang ?></td>
                    <td><?= $row->sekolah_sesuai_kepmen ?></td>
                    <td><?= $row->sudah_salur ?></td>
                    <td><?= $row->belum_salur ?></td>
                    <td>
                      <a href="<?= base_url() ?>Dana_bos/edit/<?= $row->id ?>"><i class="bi bi-pencil-square"></i></a>
                      <a href="<?= base_url() ?>Dana_bos/hapus/<?= $row->id ?>"><i class="bi bi-trash-fill"></i></a>
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