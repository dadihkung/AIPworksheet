<?php
// function untuk mengkoneksikan coding kepada database
    // koneksi ke database
    $servername = "localhost";
    $database = "pinterest";
    $username = "root";
    $password = "";
    // Create connection
    $coinn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$coinn) {
        die("Connection failed: " . mysqli_connect_error());
    }

function registrasi($data) {
    global $coinn;

    $nama_dpn       = $_POST["nama_dpn"];
    $nama_blkng     = $_POST["nama_blkng"];
    $username       = strtolower(stripslashes($_POST["username"]));
    $email          = $_POST["email"];
    $password       = mysqli_real_escape_string ( $_POST["password"] );
    $password2      = mysqli_real_escape_string ( $_POST["password2"] );


    if( $password !== $password2 ) {
        echo "<script>
                alert('konfirmasi password anda salah/tidak sesuai')
                </script>";
        return false;
    }
}