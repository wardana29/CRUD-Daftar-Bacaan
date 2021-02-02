<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="boostrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome/css/all.min.css">
  <link rel="stylesheet" href="eksternal.css">

  <title>PerpustakaanKu</title>
</head>

<body>
  <div class="luar">
    <div class="container">
      <div class="isi">
        <div class="avatar">
          <i class="fa fa-user"></i>
        </div>

        <h2 class="text-center"> <b>LOGIN</b> </h2>

        <form action="" method="post">
          <div class="form-group">
            <label for="username">Username</label>
            <div class="input-group">
              <div class="input-group-text">
                <i class="fas fa-user"></i>
              </div>
              <input type="text" name="username" id="username" placeholder="Masukan Username" class="form-control">
            </div>

            <div class="form-group">
              <label for="password">Password</label>
              <div class="input-group">
                <div class="input-group-text">
                  <i class="fas fa-unlock"></i>
                </div>
                <input type="password" name="password" id="password" placeholder="Masukan Password" class="form-control">
              </div>

            </div>
          </div>

          <button type="submit" class="btn btn-info" name="btnSubmit"><b>Submit</b> </button>
          <button type="reset" class="btn btn-danger"><b>Reset</b> </button>

          <div class="bottom">
            <p>Not Registered?<a href="register.php"> Click Here </a>to Register</p>
            <a href="#">Forgot your password?</a>
          </div>


        </form>
      </div>
    </div>
    <footer id="footer" class="footer hidden-print">
      <span>Author: Mihra Wardana</span><br>
      <span><a href="mihrawardana@gmail.com">mihrawardana@gmail.com</a></span>
    </footer>
  </div>

</body>


</html>

<?php

session_start();
if (isset($_SESSION["username"])) {
  header("location:index.php");
  exit;
}

include("connect.php");
if (isset($_POST["btnSubmit"])) {
  $vusername = $_POST["username"];
  $password = md5($_POST["password"]);

  $hasil = mysqli_query($conn, "SELECT * FROM data_diri WHERE username='$vusername' && password='$password'");

  if (mysqli_num_rows($hasil) > 0) {
    //login sukses
    session_start();
    $_SESSION["username"] = $vusername;
    echo "<script>
               alert('Login Sukses');
               document.location.href='crud_buku.php';
               </script>";
  } else {
    //login gagal
    echo "<script>
               alert('Login Gagal');
               document.location.href='index.php';
               </script>";
  }
}
?>