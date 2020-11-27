<?php
session_start();
if(isset($_SESSION['username'])) {
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body style="margin: 200px 500px; background: rgb(29,169,253);
background: linear-gradient(90deg, rgba(29,169,253,1) 0%, rgba(123,29,253,1) 51%, rgba(204,69,252,1) 100%);">
<center>
    <form action="prosesdaftar.php" method="post">
        <table>
            <tbody>
                <tr><td colspan ="2" align ="center" ><h1 style="color:#F0F0F0;">Registration</h1></td></tr>
                <tr><td style="color:#F0F0F0;">Username</td></tr> <tr>
                <td><input  placeholder='username' name="username" type="text"></td></tr>
                </tr> 
                <tr><td style="color:#F0F0F0;">Password</td></tr><td><input name="password" type="password" placeholder='Password'></td></tr>
                </tr> 
                <tr><td colspan ="2" align ="right" > <input value="Daftar" type="submit" ><input value="Batal" type="reset"></td></tr>
                <tr><td colspan ="2" align ="center" style="color:#F0F0F0;">Sudah punya akun? <a href="login.php"><b>Login</b></a></td></tr>
            </tbody>
        </table>
    </form>
</center>
</body>
</html>

