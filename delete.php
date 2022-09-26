delete.php<?php
include("config.php");
if( isset($_GET['id']) ){
 // ambil id dari query string
 $siswa = $_GET['id'];
 // buat query hapus
 $sql = "DELETE FROM mahasiswa WHERE nim=$siswa";
 $query = mysqli_query($koneksi, $sql);
 // apakah query hapus berhasil?
 if( $query ){
 header('Location: index.php');
 } else {
 die("gagal menghapus...");
 }
} else {
 die("akses dilarang...");
}
?>