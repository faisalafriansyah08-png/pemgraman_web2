
<?php
$conn = mysqli_connect("localhost", "root", "", "lat_dbase");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$hasil = mysqli_query($conn, "SELECT * FROM tbl_mhs");

echo "<h2>Data Mahasiswa</h2>";

while ($data = mysqli_fetch_assoc($hasil)) {
    echo "ID: " . $data['mhsID'] . " | ";
    echo $data['FirstName'] . " ";
    echo $data['LastName'] . " | ";
    echo "Umur: " . $data['Age'] . "<br>";
}

mysqli_close($conn);
?>
