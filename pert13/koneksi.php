
<?php
$Open = mysqli_connect("localhost", "root", "", "db_mahasiswa");

if (!$Open) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
