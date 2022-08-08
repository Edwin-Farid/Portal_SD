<?php $this->load->view('admin/template/head') ?>
<?php $this->load->view('admin/template/header') ?>
<?php $this->load->view('admin/template/slide') ?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Siswa</h1>
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
            <h5 class="card-title">Siswa</h5>
            <?php
            $this->load->view('admin/template/alert');
            ?>
            <!-- Horizontal Form -->
            <form method="post" action="<?= base_url('Siswa/simpan') ?>" enctype="multipart/form-data">
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">NISN</label>
                <div class="col-sm-10">
                  <input type="number" name="nisn" class="form-control" id="">
                </div>
              </div>
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" name="nama" class="form-control" id="">
                </div>
              </div>
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Tempat Lahir</label>
                <div class="col-sm-10">
                  <input type="text" name="tmp_lhr" class="form-control" id="">
                </div>
              </div>
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                  <input type="date" name="tgl_lhr" class="form-control" id="">
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
                <label for="" class="col-sm-2 col-form-label">Kelas</label>
                <div class="col-sm-10">
                <select name="kelas" id="" class="form-control">
                    <option value="">No Selected</option>
                    <option value="I">I</option>
                    <option value="II">II</option>
                    <option value="III">III</option>
                  </select>
         
              </div>
              </div>
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">NIK Siswa</label>
                <div class="col-sm-10">
                  <input type="text" name="nik_siswa" class="form-control" id="">
                </div>
              </div>
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Nama Ayah</label>
                <div class="col-sm-10">
                  <input type="text" name="nama_ayah" class="form-control" id="">
                </div>
              </div>

              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Tanggal Lahir Ayah</label>
                <div class="col-sm-10">
                  <input type="date" name="tgl_ayah" class="form-control" id="">
                </div>
              </div>
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">NIK Ayah</label>
                <div class="col-sm-10">
                  <input type="text" name="nik_ayah" class="form-control" id="">
                </div>
              </div>
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Nama Ibu</label>
                <div class="col-sm-10">
                  <input type="text" name="nama_ibu" class="form-control" id="">
                </div>
              </div>
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Tanggal Lahir Ibu</label>
                <div class="col-sm-10">
                  <input type="date" name="tgl_ibu" class="form-control" id="">
                </div>
              </div>
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">NIK Ibu</label>
                <div class="col-sm-10">
                  <input type="text" name="nik_ibu" class="form-control" id="">
                </div>
              </div>
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                  <input type="text" name="alamat" class="form-control" id="">
                </div>
              </div>
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                <select name="status" id="" class="form-control">
                    <option value="">No Selected</option>
                    <option value="siswa">Siswa</option>
                    <option value="alumni">Alumni</option>
                
                  </select>
         
              </div>

              </div>
              
              <br>
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
            <h5 class="card-title">Data Siswa</h5>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">NISN</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Status</th>
                  <th scope="col">Aksi</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($siswa as $row) : ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row->nisn ?></td>
                    <td><?= $row->nama ?></td>
                    <td><?= $row->status ?></td>
                   
                    <td>
                     
                      <a href="<?= base_url() ?>Siswa/edit/<?= $row->id ?>"><i class="bi bi-pencil-square"></i></a>
                      <a href="<?= base_url() ?>Siswa/hapus/<?= $row->id ?>"><i class="bi bi-trash-fill"></i></a>
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