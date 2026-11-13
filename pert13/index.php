
<!DOCTYPE html>
<html>
<head>
    <title>Form Input Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial;
            margin: 40px;
        }

        .container {
            width: 500px;
            margin: auto;
        }

        h2 {
            color: orange;
            text-align: center;
        }

        table {
            width: 100%;
        }

        td {
            padding: 10px;
        }

        input, select {
            padding: 7px;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="submit"],
        input[type="reset"] {
            width: auto;
            padding: 8px 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="container">

    <h2>Form Input Data Mahasiswa</h2>

    <form action="action-input-data.php" method="POST">

        <table>
            <tr>
                <td>NIM</td>
                <td>
                    <input type="text" name="id_mahasiswa"
                    maxlength="6" required>
                </td>
            </tr>

            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="nama"
                    maxlength="30" required>
                </td>
            </tr>

            <tr>
                <td>Jurusan</td>
                <td>
                    <select name="jurusan" required>
                        <option value="">Pilih Jurusan</option>
                        <option value="Teknik Komputer">Teknik Komputer</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                        <option value="Teknik Elektro">Teknik Elektro</option>
                        <option value="Komputer Akuntansi">Komputer Akuntansi</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td>
                    <input type="text" name="alamat"
                    maxlength="100" required>
                </td>
            </tr>

            <tr>
                <td>No. Telepon</td>
                <td>
                    <input type="text" name="telepon"
                    maxlength="12" required>
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" name="Submit"
                    value="Submit">

                    <input type="reset" value="Cancel">
                </td>
            </tr>

        </table>

    </form>

</div>

</body>
</html>
