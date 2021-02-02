<?php
include("connect.php");
$query = mysqli_query($conn, "SELECT * FROM bacaanku WHERE kode_buku='$_GET[kode_buku]'");
$data = mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="edit_crud.css">
  <title>Edit Buku Bacaanku</title>
</head>

<body>
  <div class="container">
    <h3> <b>Form Edit Bacaanku</b> </h3>

    <form action="editsimpan_crud.php" method="post">
      <div class="form-group">
        <label for="kode_buku">Kode Buku</label>
        <div class="input-group">
          <input type="text" name="kode_buku" id="kode_buku" value="<?php echo $data['kode_buku'] ?>" readonly class="form-control">
        </div>

        <label for="judul_buku">Judul Buku</label>
        <div class="input-group">
          <input type="text" name="judul_buku" id="judul_buku" value="<?php echo $data['judul_buku'] ?>" autofocus class="form-control">
        </div>

        <label for="nama_penulis">Nama Penulis</label>
        <div class="input-group">
          <input type="text" name="nama_penulis" id="nama_penulis" value="<?php echo $data['nama_penulis'] ?>" class="form-control">
        </div>

        <label for="link_buku">link_buku</label>
        <div class="input-group">
          <input type="text" name="link_buku" id="link_buku" value="<?php echo $data['link_buku'] ?>" class="form-control">
        </div>
      </div>

      <button type="submit" class="simpan" name="btnSubmit"></i><b>Simpan</b> </button>
  </div>
</body>

</html>