<?php
require 'function.php';

$kode = query("SELECT * FROM data_matkul");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matkul</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        
        Mata Kuliah Semester 5 Sistem Informasi
        </a>
    </div>
    </nav>
    <div class="container text-center pt-3">
        <h2>Data Mata Kuliah</h2>
    </div>
    <div class="container pt-4">
        <table class="table table-dark table-hover ">
            <tr class="">
                <th>Kode Mata Kuliah</th>
                <th>Mata Kuliah</th>
                <th>Nama Dosen</th>
                <th></th>
            </tr>
            <tr>
                <?php $i = 1; ?>
                <?php foreach ($kode as $row) : ?>
            </tr>
            <tr>
                <td class=""><?= $i; ?></td>
                <td><?= $row ["Kode_Matkul"];?></td>
                <td><?= $row ["Mata_Kuliah"];?></td>
                <td><?= $row ["Nama_Dosen"];?></td>
                <td><a class="btn btn-secondary" href="../Latihan 6/ubah.php?no_polisi=<?=$row ["no_polisi"];?> " role="button">UBAH</a> <a class="btn btn-secondary" href="../Latihan 4/hapus.php?no_polisi=<?= $row ["no_polisi"];?> " role="button" onclick="return confirm('APAKAH ANDA YAKIN?')">HAPUS</a></td>
               

            </tr>
            <?php $i++; ?>
            <?php endforeach;?>
        </table>
    </div>
    <div class="container text-center">
        <a class="btn btn-secondary btn-lg" href="../Latihan 3/tambah.php" role="button">TAMBAH DATA</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>