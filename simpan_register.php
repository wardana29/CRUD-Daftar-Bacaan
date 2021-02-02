<?php
include("connect.php");
$username = $_POST["username"];
$nama = $_POST["nama"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$no_telp = $_POST["no_telp"];
$password = $_POST["password"];

$query = mysqli_query($conn, "INSERT INTO data_diri (username, nama, jenis_kelamin, no_telp, password) VALUES ('$username', '$nama', '$jenis_kelamin', '$no_telp', '$password');");
if (mysqli_affected_rows($conn)) {
  echo "<script>
              alert('Data Berhasil Disimpan');
              document.location.href='index.php';
          </script>      
        ";
} else {
  echo "Upss!!! Data Anda Gagal Tersimpan";
}
