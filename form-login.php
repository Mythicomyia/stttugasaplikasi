<?php
session_start();
if (isset($_SESSION['admin_login'])) {
    header('location:admin.php');
}
if (isset($_SESSION['user_login'])) {
    header('location:user.php');
}
if (isset($_POST['btn-login'])) {

    // proses form nya

    // ambil nilai username form
    $userForm = $_POST['userForm'];
    // ambil nilai password form
    $passForm = $_POST['passForm'];

    // define user pass benar
    $adminBenar = "admin";
    $passadminBenar = "admin";
    $userBenar = "user";
    $passuserBenar = "user";
    // bandingkan data login dari form dengan login yg benar
    if (($adminBenar == $userForm) && ($passadminBenar == $passForm)) {
        // jika benar buat sesi sudah login
        $_SESSION['admin_login'] = $userForm;
        // pindah ke halaman admin
        header('location:admin.php');
    } elseif (($userBenar == $userForm) && ($passuserBenar == $passForm)) {
        // jika benar buat sesi sudah login
        $_SESSION['user_login'] = $userForm;
        // pindah ke halaman admin
        header('location:user.php');
        //notif login sala
    } else {
        echo "login gagal";
    }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Regis</title>
    <link rel="stylesheet" href="css/style-form-login.css">
</head>

<body>
    <div class="container">
        <input type="checkbox" id="check">
        <div class="login form">
            <header>Form Login</header>
            <form action="" method="POST">
                <input type="text" name="userForm" placeholder="masukkan username">
                <input type="password" name="passForm" placeholder="masukkan password">
                <a href="#">Lupa password</a>
                <input type="button" value="login" id="button" name="btn-login">
            </form>
            <div class="signup">
                <span class="signup">Belum punya akun?
                    <label for="check">Daftar</label>
                </span>
            </div>
        </div>
        <div class="registration form">
            <header>Form Registrasi</header>
            <form action="#">
                <input type="text" placeholder="masukkan username">
                <input type="password" placeholder="masukkan password">
                <input type="button" class="button" value="Daftar">
            </form>
            <div class="signup">Sudah punya akun?
                <label for="check">Login</label>
            </div>
        </div>
    </div>
</body>

</html>