<?php
include('connect.php');
$perintah = mysqli_query($conn, "DELETE FROM bacaanku WHERE kode_buku='$_GET[kode_buku]'");

if (mysqli_affected_rows($conn)) {
   echo "
    <script>
    alert ('Data Berhasil Dihapus');
    document.location.href='crud_buku.php';
    </script>
    ";
} else {
   echo "
    <script>
    alert ('Upss!!! Data Anda Gagal Terhapus');
    </script>
    ";
}
