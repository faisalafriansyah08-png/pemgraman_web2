
<?php

include "koneksi.php";

// Mengecek tombol Submit
if (isset($_POST['Submit'])) {

    // Mengambil data dari form
    $id_mahasiswa = $_POST['id_mahasiswa'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];

    // Validasi data kosong
    if (
        empty($id_mahasiswa) ||
        empty($nama) ||
        empty($jurusan) ||
        empty($alamat) ||
        empty($telepon)
    ) {
        echo "<script>
            alert('Data Harap Dilengkapi!');
            window.location='index.php';
        </script>";
        exit;
    }

    // Mengecek apakah NIM sudah digunakan
    $cek = mysqli_prepare(
        $Open,
        "SELECT id_mahasiswa FROM mahasiswa WHERE id_mahasiswa = ?"
    );

    mysqli_stmt_bind_param($cek, "s", $id_mahasiswa);
    mysqli_stmt_execute($cek);
    mysqli_stmt_store_result($cek);

    if (mysqli_stmt_num_rows($cek) > 0) {

        echo "<script>
            alert('NIM sudah dipakai! Silahkan ganti NIM lain.');
            window.location='index.php';
        </script>";

        mysqli_stmt_close($cek);
        mysqli_close($Open);
        exit;
    }

    mysqli_stmt_close($cek);

    // Memasukkan data ke tabel mahasiswa
    $input = mysqli_prepare(
        $Open,
        "INSERT INTO mahasiswa
        (id_mahasiswa, nama, jurusan, alamat, telepon)
        VALUES (?, ?, ?, ?, ?)"
    );

    mysqli_stmt_bind_param(
        $input,
        "sssss",
        $id_mahasiswa,
        $nama,
        $jurusan,
        $alamat,
        $telepon
    );

    if (mysqli_stmt_execute($input)) {

        echo "<script>
            alert('Input Data Mahasiswa Berhasil!');
            window.location='index.php';
        </script>";

    } else {

        echo "Input Data Mahasiswa Gagal! " .
        mysqli_stmt_error($input);

    }

    mysqli_stmt_close($input);
    mysqli_close($Open);

}

?>
