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
            <form method="post" action="<?= base_url('guru/simpan') ?>" enctype="multipart/form-data">
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" name="nama" class="form-control" id="">
                </div>
              </div>
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">NIP</label>
                <div class="col-sm-10">
                  <input type="text" name="nip" class="form-control" id="">
                </div>
              </div>
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">NUPTK</label>
                <div class="col-sm-10">
                  <input type="text" name="nuptk" class="form-control" id="">
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
              <input type="text" name="tmp_lhr" placeholder="Selong, 05-09-1885" class="form-control" id="">
                </div>
              </div>


              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Pelajaran</label>
                <div class="col-sm-10">
              <input type="text" name="pelajaran"  class="form-control" id="">
                </div>
              </div>

              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Pangkat</label>
                <div class="col-sm-10">
              <input type="text" name="pangkat"  class="form-control" id="">
                </div>
              </div>

              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Tugas</label>
                <div class="col-sm-10">
              <input type="text" name="tugas"  class="form-control" id="">
                </div>
              </div>

              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">email</label>
                <div class="col-sm-10">
              <input type="email" name="email" placeholder="yoyo@gmail.com" class="form-control" id="">
                </div>
              </div>

              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
              <input type="text" name="alamat"  class="form-control" id="">
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
            <h5 class="card-title">Data Guru</h5>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">NIP</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Gambar</th>
                  <th scope="col">Aksi</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($guru as $row) : ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td style="font-size:20px"> <a href="<?= base_url() ?>Guru/detail/<?= $row->id ?>"><?= $row->nip ?></a></td>
                    <td><?= $row->nama ?></td>
                    <td><img src="<?= base_url() ?>upload/guru/<?php echo $row->gambar  ?>" width="50px" alt=""></td>
                   
                    <td>
                     
                      <a href="<?= base_url() ?>Guru/edit/<?= $row->id ?>"><i class="bi bi-pencil-square"></i></a>
                      <a href="<?= base_url() ?>Guru/hapus/<?= $row->id ?>"><i class="bi bi-trash-fill"></i></a>
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