<?php
require_once("connect.php");
$username = $_POST['username'];
$pass = $_POST['password'];
$cekuser = mysqli_query($connection,"SELECT * FROM user WHERE userName = '$username'");
if(mysqli_num_rows($cekuser) != null) {
    echo "Username Sudah Terdaftar!";
    echo '<a href="daftar.php">Back</a>';
}else{
if(!$username || !$pass) {
    echo "Masih ada data yang kosong!";
    echo '<a href="daftar.php">Back</a>';
}else{
    $simpan = mysqli_query($connection,"INSERT INTO user(userName, userPassword) VALUES('$username','$pass')");
    if($simpan){
        echo 'Pendaftaran Sukses, Silahkan <a href="login.php">Login</a>';
    }else{
        echo "Proses Gagal!";
    }
}
}
?>
<body style= " background: rgb(29,169,253);
background: linear-gradient(90deg, rgba(29,169,253,1) 0%, rgba(123,29,253,1) 51%, rgba(204,69,252,1) 100%); 
text-align:center; font-size:160%; font-family: New Century Schoolbook; font-style:bold; color:#DDE3F3; margin-top:300px; ">
    
</body>