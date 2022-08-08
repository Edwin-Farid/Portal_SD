<?php $this->load->view('admin/template/head') ?>
<?php $this->load->view('admin/template/header') ?>
<?php $this->load->view('admin/template/slide') ?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Guru</h1>
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
            <h5 class="card-title">Guru</h5>
            <?php
            $this->load->view('admin/template/alert');
            ?>
            <!-- Horizontal Form -->
            <?php foreach($guru as $row){ ?>
              <form method="post" action="<?= base_url('guru/update') ?>" enctype="multipart/form-data">
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" name="id" value="<?= $row->id ?>" class="form-control" id="">
                  <input type="text" name="nama"  value="<?= $row->nama ?>" class="form-control" id="">
                </div>
              </div>
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">NIP</label>
                <div class="col-sm-10">
                  <input type="text" name="nip" class="form-control"  value="<?= $row->nip ?>" id="">
                </div>
              </div>
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">NUPTK</label>
                <div class="col-sm-10">
                  <input type="text" name="nuptk" class="form-control"  value="<?= $row->nuptk ?>" id="">
                </div>
              </div>
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Gambar</label>
                <div class="col-sm-10">
                  <input type="file" name="gambar" class="form-control" id="">
                </div>
              </div>

              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                  <select name="jk" id="" class="form-control">
                    <option value="">No Selected</option>
                    <option value="Laki-laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
              </div>


              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Tempat lahir</label>
                <div class="col-sm-10">
              <input type="text" name="tmp_lhr" placeholder="Selong, 05-09-1885"  value="<?= $row->tmp_lhr ?>" class="form-control" id="">
                </div>
              </div>


              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Pelajaran</label>
                <div class="col-sm-10">
              <input type="text" name="pelajaran"  class="form-control"  value="<?= $row->pelajaran ?>" id="">
                </div>
              </div>

              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Pangkat</label>
                <div class="col-sm-10">
              <input type="text" name="pangkat"  class="form-control"  value="<?= $row->pangkat ?>" id="">
                </div>
              </div>

              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Tugas</label>
                <div class="col-sm-10">
              <input type="text" name="tugas"  class="form-control"  value="<?= $row->tugas ?>" id="">
                </div>
              </div>

              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">email</label>
                <div class="col-sm-10">
              <input type="email" name="email" placeholder="yoyo@gmail.com"  value="<?= $row->email ?>" class="form-control" id="">
                </div>
              </div>

              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
              <input type="text" name="alamat"  class="form-control"  value="<?= $row->alamat ?>" id="">
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
    selector: 'textarea#editor1',
    menubar: false
  });
</script>