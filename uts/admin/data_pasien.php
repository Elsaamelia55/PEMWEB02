<?php 

require_once './koneksi.php';

$sql = 'SELECT * FROM pasien';
$getPasien = $dbh->query($sql);


include_once './layouts/top.php';
include_once './layouts/navbar.php';
include_once './layouts/sidebar.php';

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pasien</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Pasien</h3>
        </div>
        <div class="card-body">
        <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kode</th>
                            <th>Nama Pasien</th>
                            <th>Alamat</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php foreach ($getPasien as $key => $pasien) : ?>
                       <tr>
                        <td><?= ++$key ?></td>
                        <td><?= $pasien['kode'] ?></td>
                        <td><?= $pasien['nama'] ?></td>
                        <td><?= $pasien['alamat'] ?></td>
                        <td><?= $pasien['email'] ?></td>
                       </tr> 
                       <?php endforeach ?>
                    </tbody>
                </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



    
    

</html>

<?php 
include_once './layouts/bottom.php';
?>