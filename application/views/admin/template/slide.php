<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link " href="<?= base_url() ?>Dashboard">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Profile</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="<?= base_url('Sejarah') ?>">
            <i class="bi bi-circle"></i><span>Sejarah Singkat</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url('Visi_misi') ?>">
            <i class="bi bi-circle"></i><span>Visi Misi</span>
          </a>
        </li>

        <!-- <li>
            <a href="components-breadcrumbs.html">
              <i class="bi bi-circle"></i><span>Kemitraan</span>
            </a>
          </li>
          <li>
            <a href="components-buttons.html">
              <i class="bi bi-circle"></i><span>Beasiswa</span>
            </a>
          </li> -->

      </ul>
    </li><!-- End Components Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="<?= base_url('Dana_bos') ?>">
        <i class="bi bi-wallet"></i><span>Dana Bos</span>
      </a>
    </li><!-- End Components Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>Berita</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="<?= base_url('Kategori') ?>">
            <i class="bi bi-circle"></i><span>Kategori</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url('Berita') ?>">
            <i class="bi bi-circle"></i><span>Berita</span>
          </a>

      </ul>
    </li><!-- End Forms Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layout-text-window-reverse"></i><span>Akademik</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="<?= base_url('Guru') ?>">
            <i class="bi bi-circle"></i><span>Guru</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url('Siswa') ?>">
            <i class="bi bi-circle"></i><span>Siswa</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url('Alumni') ?>">
            <i class="bi bi-circle"></i><span>Alumni</span>
          </a>
        </li>
      </ul>
    </li><!-- End Tables Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-bar-chart"></i><span>Media</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="<?= base_url('Galery') ?>">
            <i class="bi bi-circle"></i><span>Galery</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url('Vidio') ?>">
            <i class="bi bi-circle"></i><span>Vidio</span>
          </a>
        </li>

      </ul>
    </li><!-- End Charts Nav -->

    <li class="nav-item">
      <a class="nav-link " href="<?= base_url('Modul') ?>">
        <i class="bi bi-download"></i>
        <span>Modul</span>
      </a>
    </li><!-- End Dashboard Nav -->


    <li class="nav-heading">Setting</li>

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#seting" data-bs-toggle="collapse" href="#">
        <i class="bi bi-gear"></i><span>Setting</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="seting" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <!-- <li>
            <a href="charts-chartjs.html">
              <i class="bi bi-circle"></i><span>Profile</span>
            </a>
          </li> -->
        <li>
          <a href="<?= base_url('Benner') ?>">
            <i class="bi bi-circle"></i><span>benner</span>
          </a>
        </li>
        <!-- <li>
            <a href="charts-apexcharts.html">
              <i class="bi bi-circle"></i><span>Iklan</span>
            </a>
          </li> -->

      </ul>
    </li>



  </ul>

</aside><!-- End Sidebar-->