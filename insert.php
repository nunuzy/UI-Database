<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Page - Create</title>
</head>
<body style="
margin:200px 550px;
color:#F0F0F0;
background: rgb(29,169,253);
    background: linear-gradient(90deg, rgba(29,169,253,1) 0%, rgba(123,29,253,1) 51%, rgba(204,69,252,1) 100%);">
    <h1 style ="color:#F0F0F0;">Create Product</h1>
    <form action="doAddProduct.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Product Name</td>
                <td>:</td>
                <td><input type ="text" name="productName"></td>
            </tr>
            <tr>
                <td>Product Description</td>
                <td>:</td>
                <td><input name="productDescription"></input></td>
            </tr>
            <tr>
                <td>Product Price</td>
                <td>:</td>
                <td><input type ="number" name="productPrice"></td>
            </tr>
            <tr>
                <td>Product Image</td>
                <td>:</td>
                <td><input type ="file" name="productImage"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><button>Save Product</button></td>
            </tr>
        </table>   
    </form> 
    <?php
        if(isset($_SESSION["message"])){
            echo $_SESSION["message"];
            unset($_SESSION["message"]);
        }
    ?>
</body>
</html>

