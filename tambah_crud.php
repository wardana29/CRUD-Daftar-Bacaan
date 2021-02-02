<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="edit_crud.css">
  <title>Tambah Buku Bacaanku</title>
</head>

<body>
  <div class="container">
    <h3> <b>Form Tambah Bacaanku</b> </h3>

    <form action="simpan_crud.php" method="post">
      <div class="form-group">
        <label for="kode_buku">Kode Buku</label>
        <div class="input-group">
          <input type="text" name="kode_buku" id="kode_buku" placeholder="Masukkan Kode Buku" class="form-control">
        </div>

        <label for="judul_buku">Judul Buku</label>
        <div class="input-group">
          <input type="text" name="judul_buku" id="judul_buku" placeholder="Masukkan Judul Buku" class="form-control">
        </div>

        <label for="nama_penulis">Nama Penulis</label>
        <div class="input-group">
          <input type="text" name="nama_penulis" id="nama_penulis" placeholder="Masukkan Nama Penulis Buku" class="form-control">
        </div>

        <label for="link_buku">link_buku</label>
        <div class="input-group">
          <input type="text" name="link_buku" id="link_buku" placeholder="Masukkan Link Buku" class="form-control">
        </div>
      </div>

      <button type="submit" class="simpan" name="btnSubmit"> <b>Simpan</b> </button>
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