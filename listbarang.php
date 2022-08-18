<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>VSGA JWD 2022 Risa</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td,
    th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }

    .button-1 {
      background-color: #08CA0A;
      border-color: #08CA0A;
      border-radius: 2px;
    }

    .button-2 {
      background-color: #FD0505;
      border-color: #FB4A4A;
    }

    .a-1 {
      color: white;
    }

    .a-2 {
      color: white;
    }
  </style>
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

    <!---awal content-->
    <section class="content-holder">
      <article class="content">
        <?php
        include('utils/koneksi.php');
        $query = 'SELECT * FROM barang';
        $result = mysqli_query($conn, $query);

        ?>

        <h1>DAFTAR BARANG </h1>
        <a href="tambahbarang.php" style="float: right;"> tambah barang</a>
        <br>
        <br>
        <table>
          <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>Warna</th>
            <th>Jumlah</th>
            <th>AKSI</th>


          </tr>

          <?php
          $no = 1;
          foreach ($result as $row) :

          ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $row["nama"] ?></td>
              <td><?= $row["warna"] ?></td>
              <td><?= $row["jumlah"] ?></td>
              <td>
                <button class="button-1"> <a class="a-1" href="editbarang.php? id= <?= $row["nomor"]; ?>">edit</a></button>
                <button class="button-2"> <a class="a-2" href="proses/delete_barang.php? id= <?= $row["nomor"]; ?>">deleted</a></button>

            </tr>
          <?php endforeach; ?>
        </table>

      </article>

      <aside class="sidebar">
        <div>
          <h3>Katagori</h3>
          <ul>
            <li><a href="#">2022</a></li>
            <li><a href="#">2021</a></li>
            <li><a href="#">2020</a></li>
          </ul>
        </div>
      </aside>
      <div class="clearfix"></div>
    </section>
    <!--- akhir content-->
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