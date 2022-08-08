<?php $this->load->view('admin/template/head') ?>
<?php $this->load->view('admin/template/header') ?>
<?php $this->load->view('admin/template/slide') ?>
<main id="main" class="main">

  <div class="pagetitle">
  
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Data PPDB Online</h5>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">Kode</th>
                  <th scope="col">Nama Lengkap</th>
                  <th scope="col">Tanggal Daftar</th>
                  <th scope="col">Status</th>
                  <th scope="col">Lulus / Tidak</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
               
                  <tr>
                    <td>PPDB001</td>
                    <td>MOH.FAHRURROZI</td>
                    <td>09-09-2020</td>
                    <td>Lulus</td>
                    <td>
                      <center>
                      <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                      <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                      </center>
                    </div>
                  </td>
                    <td>
                      <a href=""><i class="bi bi-eye"></i></a>
                      <a href=""><i class="bi bi-pencil-square"></i></a>
                      <a href=""><i class="bi bi-trash-fill"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>PPDB002</td>
                    <td>Rido</td>
                    <td>09-09-2020</td>
                    <td>Tidak Lulus</td>
                    <td>
                      <center>
                      <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                      <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                      </center>
                    </div>
                  </td>
                    <td>
                      <a href=""><i class="bi bi-eye"></i></a>
                      <a href=""><i class="bi bi-pencil-square"></i></a>
                      <a href=""><i class="bi bi-trash-fill"></i></a>
                    </td>
                  </tr>


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