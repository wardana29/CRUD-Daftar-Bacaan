<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="edit_crud.css">
  <title>Registrasi</title>
</head>

<body>
  <div class="container">
    <h3> <b>Form Registrasi</b> </h3>

    <form action="simpan_register.php" method="post">
      <div class="form-group">
        <label for="username">Username</label>
        <div class="input-group">
          <input type="text" name="username" id="username" placeholder="Masukkan Username" class="form-control">
        </div>

        <label for="nama">Nama Lengkap</label>
        <div class="input-group">
          <input type="text" name="nama" id="nama" placeholder="Masukkan Nama Lengkap Anda" class="form-control">
        </div>

        <label for="jenis_kelamin">Jenis Kelamin</label>
        <div class="input-group">
          <select name="jenis_kelamin" id="jenis_kelamin">
            <option value="">Pilih Salah Satu</option>
            <option value="Perempuan">Perempuan</option>
            <option value="Laki-Laki">Laki-Laki</option>
          </select>
          <input type="text" name="jenis_kelamin" id="jenis_kelamin" placeholder="Masukkan Jenis Kelamin" class="form-control">
        </div>

        <label for="no_telp">No. Telp</label>
        <div class="input-group">
          <input type="text" name="no_telp" id="no_telp" placeholder="+62" class="form-control">
        </div>

        <label for="password">Password</label>
        <div class="input-group">
          <input type="password" name="password" id="password" placeholder="Masukkan Password Anda" class="form-control">
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