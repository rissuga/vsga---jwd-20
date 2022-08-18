<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>VSGA JWD 2022 Risa</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="container">
    <!--Header-->
    <header>
      <div class="logo">
        <a href="index.html"><img src="images/logo.png" alt="logo" /></a>
      </div>

      <div class="search">
        <form>
          <input type="search" name="search" placeholder="search site..." />
          <input type="submit" value=">" />
        </form>
      </div>

      <!--NAVBAR-->
      <div class="clearfix"></div>

      <nav class="main-menu">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Tentang Kami</a></li>
          <li>
            <a href="#">Layanan</a>
            <ul class="drop">
              <li><a href="#">Peminjaman</a></li>
              <li><a href="#">Pengadaan</a></li>
              <li><a href="#">Stock Opname</a></li>
            </ul>
          </li>

          <li><a href="#">Master Data</a></li>
          <li><a href="#">Kontak Kami</a></li>
        </ul>
      </nav>
      <!--End NAVBAR-->
    </header>
    <!--end header-->

    <section class="banner cycle-slideshow">
      <img src="images/banner1.jpg" alt="banner 1" />
      <img src="images/banner2.jpg" alt="banner 2" />
    </section>
    <!--End Banner-->

    <section class="content-holder">
      <!--content-->
      <article class="content">

        <?php

        include('utils/koneksi.php');

        ?>

        <h1>FORM TAMBAH BARANG</h1>
        <form action="proses/create_barang.php" method="POST">
          <table>
            <tr>
              <td><label for="no_barang">No</label></td>
              <td> <input type="number" name="nomor"></td>
            </tr>
            <tr>
              <td><label for="nama_barang">Nama</label></td>
              <td> <input type="text" name="nama"></td>
            </tr>
            <tr>
              <td><label for="warna_barang">Warna</label></td>
              <td> <input type="text" name="warna"></td>
            </tr>
            <tr>
              <td><label for="jumlah_barang">Jumlah</label></td>
              <td> <input type="number" name="jumlah"></td>
            </tr>

            <tr>
              <td><input type="submit" name="save" value="simpan"></td>
            </tr>




          </table>


        </form>

      </article>

      <aside class="sidebar">
        <div>
          <h3>Kategori</h3>
          <ul>
            <li><a href="#">2022</a></li>
            <li><a href="#">2021</a></li>
            <li><a href="#">2020</a></li>
        </div>
      </aside>

      <div class="clearfix"></div>
    </section>
    <!--End Content-->

    <footer class="main-footer">
      <div class="footer-box">
        <h3>Menu Footer</h3>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Tentang kami</a></li>
          <li><a href="#">Layanan</a></li>
          <li><a href="#">Master data</a></li>
          <li><a href="#">Kontak kami</a></li>
        </ul>
      </div>

      <div class="footer-box">
        <h3>Menu Footer</h3>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Tentang kami</a></li>
          <li><a href="#">Layanan</a></li>
          <li><a href="#">Master data</a></li>
          <li><a href="#">Kontak kami</a></li>
        </ul>
      </div>

      <div class="footer-box">
        <h3>Menu Footer</h3>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Tentang kami</a></li>
          <li><a href="#">Layanan</a></li>
          <li><a href="#">Master data</a></li>
          <li><a href="#">Kontak kami</a></li>
        </ul>
      </div>

      <div class="footer-box">
        <address>
          <h3>Alamat Kantor</h3>
          <p>Jln Raya Jember KM 13, Kabat</p>
          <p>Email : <a href="mailto: test@gmail.com">test@gmail.com</a></p>
          <p>Telepon : <a href="tel: 1234567890">1234567890</a></p>
        </address>
      </div>
      <div class="clearfix"></div>
    </footer>

    <div>
      <p><small>Hak Cipta &copy; 2022. Hak cipta dilindungi</small></p>
    </div>
  </div>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script src="http://malsup.github.com/jquery.cycle2.js"></script>
</body>

</html>