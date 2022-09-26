<?php
include("config.php");
// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){
 // ambil data dari formulir
 $nim = $_POST['id'];
 $nama_lengkap = $_POST['nama_lengkap'];
 $tempat_lahir = $_POST['tempat_lahir'];
 $alamat = $_POST['alamat'];
 $jurusan = $_POST['jurusan'];
 $no_hp = $_POST['no_hp'];
 $email = $_POST['email'];
 
 // buat query update
 $sql = "UPDATE mahasiswa SET nim='$nim', nama_lengkap='$nama_lengkap', tempat_lahir='$tempat_lahir', tanggal_lahir='',alamat='$alamat',jurusan='$jurusan', no_hp='$no_hp', email='$email' WHERE nim=$nim"; 
 $query = mysqli_query($koneksi, $sql);
 // apakah query update berhasil?
 if( $query ) {
 // kalau berhasil alihkan ke halaman list-siswa.php
 header('Location: form-edit.php?status=sukses');
 } else {
 // kalau gagal tampilkan pesan
 die("Gagal menyimpan perubahan...");
 }
} else {
 die("Akses dilarang...");
}
?>
