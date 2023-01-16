<?php 
  
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "DELETE FROM table_usercreation WHERE id  =  $id";

  $result = mysqli_query($coinn, $query);

header("location:index.php");
?>