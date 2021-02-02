<?php
include("connect.php");
$kode_buku = $_POST["kode_buku"];
$judul_buku = $_POST["judul_buku"];
$nama_penulis = $_POST["nama_penulis"];
$link_buku = $_POST["link_buku"];

$query = mysqli_query($conn, "UPDATE bacaanku SET
                      judul_buku='$judul_buku',
                      nama_penulis='$nama_penulis',
                      link_buku='$link_buku' WHERE kode_buku='$kode_buku'");
if (mysqli_affected_rows($conn)) {
  echo "<script>
              alert('Data Berhasil Diedit');
              document.location.href='crud_buku.php';
          </script>      
        ";
} else {
  echo "Upss!!! Data Anda Gagal Teredit";
}
