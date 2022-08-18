<?php
include('..\utils\koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nomor = $_POST['nomor'];
  $nama = $_POST['nama'];
  $warna = $_POST['warna'];
  $jumlah = $_POST['jumlah'];



  $query = "UPDATE barang SET nomor= '$nomor', nama= '$nama' , warna = '$warna' , jumlah = '$jumlah' WHERE nomor = '$nomor'";


  mysqli_query($conn, $query);
  header('location:../listbarang.php');

  mysqli_close($conn);
}
