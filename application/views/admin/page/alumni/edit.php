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
            <?php
            
                foreach ($siswa as $row) : ?>
            <form method="post" action="<?= base_url('Siswa/update') ?>" enctype="multipart/form-data">
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">NISN</label>
                <div class="col-sm-10">
                  <input type="hidden" name="id" value="<?= $row->id ?>"  class="form-control" id="">
                  <input type="number" name="nisn" class="form-control" value="<?= $row->nisn ?>" id="">
                </div>
              </div>
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" name="nama" class="form-control" value="<?= $row->nama ?>" id="">
                </div>
              </div>
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Tempat Lahir</label>
                <div class="col-sm-10">
                  <input type="text" name="tmp_lhr" class="form-control" value="<?= $row->tmp_lhr ?>" id="">
                </div>
              </div>
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                  <input type="date" name="tgl_lhr" class="form-control" value="<?= $row->tgl_lhr ?>" id="">
                </div>
              </div>
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                  <select name="jk" id=""  class="form-control">
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
                  <input type="text" name="nik_siswa"  value="<?= $row->nik_siswa ?>"  class="form-control" id="">
                </div>
              </div>
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Nama Ayah</label>
                <div class="col-sm-10">
                  <input type="text" name="nama_ayah"  value="<?= $row->nama_ayah ?>"  class="form-control" id="">
                </div>
              </div>

              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Tanggal Lahir Ayah</label>
                <div class="col-sm-10">
                  <input type="date" name="tgl_ayah"  value="<?= $row->tgl_ayah ?>"  class="form-control" id="">
                </div>
              </div>
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">NIK Ayah</label>
                <div class="col-sm-10">
                  <input type="text" name="nik_ayah"  value="<?= $row->nik_ayah ?>"  class="form-control" id="">
                </div>
              </div>
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Nama Ibu</label>
                <div class="col-sm-10">
                  <input type="text" name="nama_ibu"  value="<?= $row->nama_ayah ?>"  class="form-control" id="">
                </div>
              </div>
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Tanggal Lahir Ibu</label>
                <div class="col-sm-10">
                  <input type="text" name="tgl_ibu"  value="<?= $row->tgl_ibu ?>"  class="form-control" id="">
                </div>
              </div>
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">NIK Ibu</label>
                <div class="col-sm-10">
                  <input type="text" name="nik_ibu"  value="<?= $row->nik_ibu ?>"  class="form-control" id="">
                </div>
              </div>
              <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                  <input type="text" name="alamat"  value="<?= $row->alamat ?>"  class="form-control" id="">
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

              <br><br>
          <div class="text-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-secondary">Batal</button>
              </div>
            </form><!-- End Horizontal Form -->
            <?php endforeach ?>
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