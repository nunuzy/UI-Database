<!DOCTYPE html>
<html>
<head>
    <title>Page - View</title>
</head>
<body style=" background: rgb(29,169,253); background: linear-gradient(90deg, rgba(29,169,253,1) 0%, rgba(123,29,253,1) 51%, rgba(204,69,252,1) 100%);">
    <h1 style="color: white; border:1px solid #E9E9E9;text-align:center;">Welldone Store Product</h1>
    <div style="display: flex;align-items: center;flex-wrap: wrap;  padding: 10px 70px;justify-content: start;">
    
    <?php
        include 'connect.php';
        $getProduct = $connection -> query("SELECT * FROM product");
        while($fetchProduct = $getProduct->fetch_assoc()){
    ?>
        <table style="width:250px; border:1px solid #E9E9E9; box-shadow: 0px 0px 4px  grey; padding:10px;border-radius: 15px;background-color:#E9E9E9;text-align:center;margin:20px"> 
            <tr>
                <td><img style="width:100%" src="img/<?=$fetchProduct["productImage"]?>"></td>
            </tr>
            <tr>
                <td>
                    <strong><?=$fetchProduct["productName"]?></strong><br/>
                     IDR <?=number_format($fetchProduct["productPrice"])?><br><br/>
                    <?=$fetchProduct["productDescription"]?><br> 
                </td>
            </tr>
            <tr>
                <td>
                   <a href="update.php?id=<?=$fetchProduct["productID"]?>"><button>Update</button></a>
                   <a href="delete.php?id=<?=$fetchProduct["productID"]?>"><button>Delete</button></a>
                </td>
            </tr>
        </table>
    <?php 
        }
    ?>
    </div>
</body>
</html>