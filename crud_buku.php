<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="boostrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
  <link rel="stylesheet" href="crud_buku.css">

  <title>Daftar Bacaanku</title>
</head>

<body>
  <?php
  session_start();
  if (!isset($_SESSION["username"])) {
    header("location:index.php");
    exit;
  }

  ?>

  <div class="isi">
    <h1 class="text-center"> "Daftar Bacaan <?php echo $_SESSION["username"]; ?>" </h1><br>
    <form action="" method="get">
      <table>
        <tr>
          <td width="1900px"><input class="form-control me-3" name="cari" type="text" placeholder="Search" aria-label="search"></td>
          <td><button class="btn btn-primary" type="submit"><i class="fas fa-search pr-2"></i>Search</button></td>
        </tr>
      </table>
    </form>
    <br>
    <table class="table table-sm" border="2">
      <thead class="table-danger text-center">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Kode Buku</th>
          <th scope="col">Judul Buku</th>
          <th scope="col">Nama Penulis</th>
          <th scope="col">Link Download Buku</th>
          <th colspan="2">Aksi</th>

        </tr>
      </thead>
      <?php
      include('connect.php');
      $query = mysqli_query($conn, 'SELECT * FROM bacaanku');
      if (isset($_GET['cari'])) {
        $cari = $_GET['cari'];
        $query = mysqli_query($conn, "SELECT * FROM bacaanku WHERE judul_buku LIKE '" . $cari . "%'");
      }

      $no = 1;
      while ($data = mysqli_fetch_array($query)) {
      ?>
        <tbody>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['kode_buku']; ?></td>
            <td><?php echo $data['judul_buku']; ?></td>
            <td><?php echo $data['nama_penulis']; ?></td>
            <td><?php echo $data['link_buku']; ?></td>
            <td><a href="edit_crud.php?kode_buku=<?php echo $data['kode_buku']; ?>"><button type="button" class="btn btn-warning"><i class="fas fa-edit pr-2"></i> Edit </button></a></td>
            <td><a href="hapus_crud.php?kode_buku=<?php echo $data['kode_buku']; ?>"><button type="button" class="btn btn-danger"><i class="fas fa-trash pr-2"></i>Hapus</button></a></td>
          </tr>
        </tbody>
      <?php
        $no++;
      }
      ?>
    </table>
    <p><b>Catatan:</b> silahkan salin link download dan buka di browser <?php echo $_SESSION["username"]; ?>, untuk mendapatkan <i> soft file </i> buku bacaanmu. </p>
    <p></p>
    <div class="tambah-keluar">
      <a href="tambah_crud.php"><button type="button" class="btn btn-success"><i class="fas fa-plus pr-2"></i>Tambah</button></a>
      <a href="logout.php"><button type="button" class="btn btn-danger"><i class="fa fa-sign-out" aria-hidden="true"></i>Keluar</button></a>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>