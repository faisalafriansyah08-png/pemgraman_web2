
<?php
$conn = mysqli_connect("localhost", "root", "", "lat_dbase");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$sql = "INSERT INTO tbl_mhs (FirstName, LastName, Age)
        VALUES ('Anjar', 'Prabowo', 25),
               ('Karina', 'Suwandi', 29),
               ('Glenn', 'Gandari', 32)";

if (mysqli_query($conn, $sql)) {
    echo "Data mahasiswa berhasil ditambahkan";
} else {
    echo "Gagal: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
