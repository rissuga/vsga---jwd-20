<?php

include('..\utils\koneksi.php');

if (isset($_POST['save'])) {
  $nomor = $_POST['nomor'];
  $nama = $_POST['nama'];
  $jumlah = $_POST['warna'];
  $warna = $_POST['jumlah'];



  $sql = "INSERT INTO barang (nomor,nama,warna,jumlah)
	 VALUES ('$nomor','$nama','$warna','$jumlah')";

  mysqli_query($conn, $sql);
  header('location:../index.html');

  mysqli_close($conn);
}
