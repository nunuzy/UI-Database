<?php 
session_start();
require_once ("connect.php");

if(isset($_SESSION['username'])) {
    header("location:index.php");
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Page - Login</title>
</head>
<body style=" margin: 220px 500px; 
background: rgb(29,169,253);
background: linear-gradient(90deg, rgba(29,169,253,1) 0%, rgba(123,29,253,1) 51%, rgba(204,69,252,1) 100%); ">
<h1 style="text-align:center; color:#F0F0F0;">Login </h1>
    <center>
        <form action="proseslogin.php" method="post">
            <table>
                <tbody>
                <tr style="margin:20px;">
                <td><input name="username" type="text" placeholder='Username'></td>
                </tr>
                <tr>
                <td><input name="password" type="password" placeholder='Password'></td></tr>
                </tr> 
                <tr><td colspan ="2" align ="right"><input value="Login" type="submit"><input value="Batal" type="reset"></td></tr>
                <tr><td colspan ="2" align ="center" style="color:#F0F0F0;">Belum punya akun? <a href="daftar.php"><b>Daftar</b></a></td></tr>
                </tbody>
            </table>
        </form>
    </center>
    
</body>
</html>