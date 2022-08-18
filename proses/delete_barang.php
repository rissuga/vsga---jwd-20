<?php
include('..\utils\koneksi.php');

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $nomor = $_GET['id'];
  $query = "DELETE FROM barang  WHERE nomor = '$nomor'";
  mysqli_query($conn, $query);
  header('location:../listbarang.php');
}
