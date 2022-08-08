<?php $this->load->view('web/template/head') ?>
<?php $this->load->view('web/template/header') ?>

   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	
<main>

    <section class="sample-text-area">
        <div class="container box_1170">
            <h3 class="text-heading">Data Guru</h3>

            <table id="modul" class="table table-striped table-bordered data"  style="width:100%">
                <thead>
                    <tr>
                        <th >#</th>
                        <th>ID</th>
                        <th>NIP</th>
                        <th>Nama Lengkap</th>
                        <th>Tugas</th>
                       
                    </tr>
                </thead>
               
                    <?php
                    $no=1;
                    foreach ($guru as $row) : ?>
                        <tr>
                            <td align="center">
                                <a href="" style="color: darkolivegreen;" class="fa fa-eye"></a>
                            </td>
                            <td><?= $no++ ?></td>
                            <td><?= $row->nip ?></td>
                            <td><?= $row->nama ?></td>
                            <td><?= $row->tugas ?></td>
                        

                        </tr>
                    <?php endforeach ?>
                
            </table>
        </div>
    </section>

</main>
<?php $this->load->view('web/template/footer') ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js"></script>
  
<script type="text/javascript">
  $(document).ready(function() {
      $('#modul').DataTable();
  });
  </script>