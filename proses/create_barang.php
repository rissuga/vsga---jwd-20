<?php

include('..\utils\koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nomor = $_POST['nomor'];
  $nama = $_POST['nama'];
  $warna = $_POST['warna'];
  $jumlah = $_POST['umlah'];



  $query = "INSERT INTO barang SET nomor= '$nomor', nama= '$nama' , warna = '$warna' , jumlah = '$jumlah' ";

  mysqli_query(
    $conn,
    $query
  );
  header('location:../listbarang.php');

  mysqli_close($conn);
}
