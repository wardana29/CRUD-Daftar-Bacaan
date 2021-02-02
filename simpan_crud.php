<?php
include("connect.php");
$kode_buku = $_POST["kode_buku"];
$judul_buku = $_POST["judul_buku"];
$nama_penulis = $_POST["nama_penulis"];
$link_buku = $_POST["link_buku"];

$query = mysqli_query($conn, "INSERT INTO bacaanku (kode_buku, judul_buku, nama_penulis, link_buku) VALUES ('$kode_buku', '$judul_buku', '$nama_penulis', '$link_buku');");
if (mysqli_affected_rows($conn)) {
  echo "<script>
              alert('Data Berhasil Disimpan');
              document.location.href='crud_buku.php';
          </script>      
        ";
} else {
  echo "Upss!!! Data Anda Gagal Tersimpan";
}
