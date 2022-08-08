<?php $this->load->view('admin/template/head') ?>
<?php $this->load->view('admin/template/header') ?>
<?php $this->load->view('admin/template/slide') ?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">
          <!-- <div class="col-xxl-4 col-xl-12">

            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Data PPDB Online <span></span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people-fill"></i>
                  </div>
                  <div class="ps-3">
                    <h6>1244  / Siswa Baru</h6>
                    <span class="text-success small pt-1 fw-bold"><a href="" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i> Detail Data</a></span>

                  </div>
                </div>

              </div>
            </div>

          </div> -->
          <!-- Sales Card -->
          <div class="col-xxl-4 col-md-4">
            <div class="card info-card sales-card">



              <div class="card-body">
                <h5 class="card-title">Siswa </h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person-square"></i>
                  </div>
                  <div class="ps-3">
                    <h6><?= $siswa; ?></h6>
                    <span class="text-success small pt-1 fw-bold">Jumlah Semua Siswa</span>

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Sales Card -->

          <!-- Revenue Card -->
          <div class="col-xxl-4 col-md-4">
            <div class="card info-card revenue-card">
              <div class="card-body">
                <h5 class="card-title">Guru</h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-person-workspace"></i>
                  </div>
                  <div class="ps-3">
                    <h6><?= $guru; ?></h6>
                    <span class="text-success small pt-1 fw-bold">Jumlah Semua Siswa</span>

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Revenue Card -->
          
        
          <div class="col-xxl-4 col-xl-6">

            <div class="card info-card customers-card">
              <div class="card-body">
                <h5 class="card-title">News <span></span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-newspaper"></i>
                  </div>
                  <div class="ps-3">
                    <h6><?= $berita; ?></h6>
                    <span class="text-success small pt-1 fw-bold">Jumlah Semua Berita</span>

                  </div>
                </div>

              </div>
            </div>

          </div><!-- End Customers Card -->
          <div class="col-xxl-4 col-xl-6">

            <div class="card info-card sales-card">
              <div class="card-body">
                <h5 class="card-title">Modul <span></span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-file"></i>
                  </div>
                  <div class="ps-3">
                    <h6><?= $modul; ?></h6>
                    <span class="text-success small pt-1 fw-bold">Jumlah Semua Modul</span>

                  </div>
                </div>

              </div>
            </div>

          </div>



        </div>
      </div><!-- End Left side columns -->

      <!-- Right side columns -->
      <div class="col-lg-4">

        <!-- Recent Activity -->

      </div><!-- End Right side columns -->

    </div>
  </section>

</main><!-- End #main -->

<?php $this->load->view('admin/template/foot') ?>