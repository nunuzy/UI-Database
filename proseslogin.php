<?php
session_start();
require_once ("connect.php");
$username = $_POST['username'];
$pass = $_POST['password'];
$cekuser = mysqli_query($connection, "SELECT * FROM user WHERE userName ='$username'");
$jumlah = mysqli_num_rows($cekuser);
$hasil = mysqli_fetch_assoc($cekuser);
if($jumlah == 0) {
    echo "Username Belum Terdaftar!";
    echo '<a href="login.php">Back</a>';
}else{
    if($pass != $hasil['userPassword']) {
        echo "Password Salah!";
        echo '<a href="login.php">Back</a>';
    }else{
        $_SESSION['username'] = $hasil ['username'];
        header("location:index.php");
    }
}
?>