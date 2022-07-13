<?php 
include_once "./setings/db.php";
include_once "./setings/carts.php";
$_SESSION["favcoloro"] = "green";
$cart = new Carts();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stati.css">
    <title>Document</title>
</head>
<body>
    <div class="stati">
        <?php
        $carts = $cart->getCart();
        foreach($carts as $item){
            ?>
                <div class="box">
                    <img style="width:75px;height:75px;padding-left: 7px;" src="<?php echo $item["img"] ?>" alt="">  
                    <div>
                        <a href="./deteilpage.php?id=<?php echo $item["id"] ?>"><?php echo $item["name"] ?></a>
                        <p><?php echo $item["text"] ?></p>
                    </div>
                    <div class="icons">
                        <img src="./photo/eye.png" alt="">
                        <p><?php echo $item["view"] ?></p>
                    </div>
                </div>
            <?php
        }
        ?>
    </div>
</body>
</html>