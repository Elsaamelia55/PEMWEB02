<?php 

require_once './koneksi.php';

$sql = 'SELECT * FROM pasien';
$getPasien = $dbh->query($sql);


// Periksa apakah terdapat baris yang dikembalikan dari query
if ($getPasien) {
    // Ambil semua baris dari hasil query sebagai array asosiatif
    $pasiens = $getPasien->fetchAll(PDO::FETCH_ASSOC);
} else {
    // Tangani jika query gagal
    $pasiens = []; // Inisialisasi array kosong
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <h2>Data Pasien Puskesmas Sukahati</h2>
    <table class="table table-bordered">
        <tr class="table-warning">
            <th>No</th>
            <th>Kode Pasien</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tempat lahir</th>
            <th>Tanggal Lahir</th>
            <th>Kelurahan</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
         foreach($pasiens as $pasien){ ?>
            <tr>
               <td><?= $no++; ?></td>
               <td><?= $pasien['kode']; ?></td>
               <td><?= $pasien['nama']; ?></td>
               <td><?= $pasien['gender']; ?></td>
               <td><?= $pasien['tmp_lahir']; ?></td>
               <td><?= $pasien['tgl_lahir']; ?></td>
               <td><?= $pasien['kelurahan_id']; ?></td>
               <td><a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Hapus</a></td>
            </tr>
         <?php } ?>
        </table>
    </div>
</body>
</html>