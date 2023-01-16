<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data User Creation - Index</title>
  </head>

  <body>

    <div class="continer shadow-lg p-3 mb-5 bg-body-tertiary rounded" style="height: 600px; width: 1000px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
             DATA USER CREATION
            </div>
            <div class="card-body">
              <a href="tambah.php" class="btn btn-md" style="margin-bottom: 10px; background-color: black; color: gray; border-color: black;">REGISTER</a>
              <div class="container">
                <table class="table table-striped col-l" >
                <thead>
                  <tr>
                    <th scope="col">id.</th>
                    <th scope="col">Nama Depan</th>
                    <th scope="col">Nama Belakang</th>
                    <th scope="col">Email</th>
                    <th scope="col">Kelamin</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Hapus</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('koneksi.php');
                    $no = 1;
                      $id = 987654;
                      $query = mysqli_query($coinn,"SELECT * FROM table_usercreation");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no ?></td>
                      <td><?php echo $row['nama_dpn'] ?></td>
                      <td><?php echo $row['nama_blkng'] ?></td>
                      <td><?php echo $row['email'] ?></td>
                      <td><?php echo $row['kelamin'] ?></td>
                      <td class="text-center">
                        <a href="ubah.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary" style="width: 70px; background-color: gray; color: black; border-color: grey;">EDIT</a>  
                      </td>
                      <td class="text-center">
                        <a href="hapus.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger" style="width: 70px; background-color: black; color: gray; border-color: black;">DELETE</a>
                      </td>
                  </tr>

                <?php $no++;}
                  ?>
                </tbody>
              </table>
              </div>
              
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>