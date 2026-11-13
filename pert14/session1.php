
<?php
session_start();

if (isset($_POST['Login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    // Periksa username dan password
    if ($user == "rahadian" && $pass == "123") {

        // Membuat session
        $_SESSION['login'] = $user;

        echo "<h1>Anda berhasil LOGIN</h1>";
        echo "<h2>Klik <a href='session2.php'>di sini</a> untuk menuju halaman pemeriksaan session</h2>";

    } else {
        echo "Username atau Password salah!";
    }
} else {
?>

<html>
<head>
    <title>Login Here</title>
</head>
<body>
    <h2>Login Here...</h2>

    <form action="" method="post">
        Username : <input type="text" name="user"><br><br>
        Password : <input type="password" name="pass"><br><br>
        <input type="submit" name="Login" value="Log In">
    </form>
</body>
</html>

<?php
}
?>