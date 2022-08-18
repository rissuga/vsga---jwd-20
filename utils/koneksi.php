<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "vsga2022";


// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, "$dbname");

// mengecek koneksi
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
} else {

  echo "Koneksi berhasil";
}
