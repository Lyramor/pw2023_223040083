<?php 

  $conn = mysqli_connect("sql308.infinityfree.com", "if0_34398556", "7eQg4GaaMp5", "if0_34398556_kitasehat");

  if(mysqli_connect_errno()){
    echo "Gagal koneksi ke database". mysqli_connect_error();
    exit();
  }
?>