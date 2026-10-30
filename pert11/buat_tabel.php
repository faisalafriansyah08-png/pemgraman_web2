
<?php
$conn = mysqli_connect("localhost", "root", "", "lat_dbase");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$sql = "CREATE TABLE IF NOT EXISTS tbl_mhs (
    mhsID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(15),
    LastName VARCHAR(15),
    Age INT
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabel tbl_mhs berhasil dibuat";
} else {
    echo "Gagal: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
