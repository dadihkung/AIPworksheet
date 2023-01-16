<?php 

// function untuk mengkoneksikan coding kepada database
    // koneksi ke database
    $servername = "localhost";
    $database = "pegawai";
    $username = "root";
    $password = "";
    // Create connection
    $coinn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$coinn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query | Tugas2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">No.</th>
        <th scope="col">nama_pegawai</th>
        <th scope="col">nama_pegawai</th>
        <th scope="col">jumlah_pendapatan</th>
        </tr>
    </thead>
    <?php
        // ambil table dan coloumn dari data base = array 1
        $sql = "SELECT nama_pegawai, nama_bidang, SUM(pendapatan) AS jumlah_pendapatan
        FROM master_bidang
        INNER JOIN master_pegawai
        ON master_bidang.id = master_pegawai.id
        INNER JOIN master_pendapatan
        ON master_pegawai.id = master_pendapatan.id_pegawai
		GROUP BY master_pendapatan.id_pegawai";

    $no = 1;
    //
        $call = mysqli_query($coinn, $sql);
        while($m = mysqli_fetch_array($call)) {
        $nama_pegawai = $m['nama_pegawai'];
        $nama_bidang = $m['nama_bidang'];
        $total_pendapatan = $m['jumlah_pendapatan'];
    ?>
    <tbody>
        <tr>
            <th scope="row"><?php echo $no; ?></th>
            <td><?= $nama_pegawai;?></td>
            <td><?= $nama_bidang;?></td>
            <td><?= $total_pendapatan;?></td>
        </tr>
        
    </tbody>
    <?php
    $no++;
       } 
    ?>

    </table>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>