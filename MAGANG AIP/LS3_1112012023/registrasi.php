<?php

//include koneksi database
include('function.php');

//untuk memastikan success
if ( isset($_POST["register"] ) ) {
    if (registrasi($_POST) > 0 ) {
      echo "<script>
          alert ('Registered Succesfull');
          </script>";
    } else {
        echo "<script>
        alert ('Registerd Failed');
        </script>";
    }
  }

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($koneksi->query($query)) {

    //redirect ke halaman index.php 
    header("location: login.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}
?>




<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrasi Akun UserCreation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="bg">
        <div class="continer-ld col-md-6 rounded-5 position-absolute bottom-0 start-0 bg-dark bg-gradient" style="height: 570px; width: 550px; margin-left: 80px; margin-bottom: 45px;">
            <div class="row">
<!-- INI UNTUK LOGO WOIIIIIII -->
                <!-- Text Logo Pinterestnya -->
                <div class="col align-self-start">
                    <img src="../LS3_1112012023/image/R.png" alt="" class="thumbnail" style="width: 60%; margin-left: 5%; margin-top: 5%;">
                </div>
                <!-- Logo Pinterest -->
                <div class="col align-self-end">
                    <img src="../LS3_1112012023/image/log-pintrest.png" alt="" class="thumbnail" style="width: 30%; margin-left: 70%;">
                </div>
            </div>
        <div class="content-register">
            <div>
                <p class="register">REGISTER</p>
            </div>
<!-- INI FORM REGISTERASI NYA WOIIII -->
            <!-- Untuk Input Nama Depan User -->
            <div class="container mb-none">
                <div class="row row-cols-2">
                  <div class="col mb-none">
                    <label class="mb-1-nama">Nama Depan :</label>
                    <input type="text" class="form-control" id="nama_dpn" placeholder="Nama Depan" style="height: 40px; border-radius: 15px;">
                    <div class="form-text"><p class="comment"></div>
                  </div>
                  <!-- Untuk Input Nama Belakang User -->
                  <div class="col mb-none">
                    <label class="mb-1-nama">Nama Belakang :</label>
                    <input type="text" id="nama_blkng" class="form-control" placeholder="Nama Belakang"style="height: 40px; border-radius: 15px;">
                    <div class="form-text"><p class="comment"></div>
                  </div>
                </div>
                <!-- Untuk Input Username User -->
                <div class="container-ld mt-none">
                    <div class="col-sm mb-2">
                        <label class="mb-none-username mb-none">Username :</label>
                        <input type="text" id="username" class="form-control" placeholder="username" style="height: 40px; border-radius: 15px;">
                    </div>
                </div>
                <!-- Untuk Input Email User -->
                <div class="container-ld mt-none">
                    <div class="col-sm mb-2">
                        <label class="mb-none-email mb-none">Email :</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="youremail@gmail.com" style="height: 40px; border-radius: 15px;">
                    </div>
                </div>

<!-- INI UNTUK PASSWORD DISINI WOOIIII-->
                <div class="row row-cols-2">
                    <!-- Untuk Input Password User -->
                    <div class="col mb-none">
                      <label class="password mb-3 mt-1">Password :</label>
                      <input type="password" class="form-control" id="password" name="password" placeholder="Must Have Atleast 6 Charachter" style="height: 40px; border-radius: 15px;">
                      <div class="form-text"><p class="comment"></div>
                    </div>
                    <!-- Untuk Input Konfirmasi Password User -->
                    <div class="col mb-none">
                      <label class="konpass mb-3 mt-1">Konfirmasi Password :</label>
                      <input type="password" class="form-control" id="password2" name="password2" placeholder="Repeat Password"style="height: 40px; border-radius: 15px;">
                      <div class="form-text"><p class="comment"></div>
                    </div>
                  </div>
<!-- INI BUTTON NYA WOIIIII -->
                <div class="button-save mt-4">
                    <!-- Button Untuk Save Register -->
                    <button type="submit" id="save" name="save" style="width: 100px; background-color: white; color: black; border-color: white;" class="btn btn-primary active/.,mb-3" data-bs-toggle="button" aria-pressed="true">Register</button>
                    <!-- Button Untuk Cancle Register -->
                    <button type="button" id="save" name="save" style="width: 100px; background-color: red; color: white; border-color: red;" class="btn btn-primary active/.,mb-3" data-bs-toggle="button" aria-pressed="true">Cancel</button>
                </div>
            </div>
        </div>
            
            
        </div>
    </div>
      



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>