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
            <h5 class="card-title">Data Alumni</h5>

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
                foreach ($alumni as $row) : ?>
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