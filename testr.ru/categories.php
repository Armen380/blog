<?php  require_once "./setings/db.php";
    require_once "./setings/tips.php";
    $tip = new Tip();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="categories.css">
    <title>Document</title>
</head>
<body>
<div class="category"> 
        <?php 
            $tips = $tip->getTips();
            foreach($tips as $name){
                ?>
                <div class="cart" >
                   <a href=""> <?= $name["name"] ?></a>
                </div>
                <?php
            }
        
        ?>
    </div>
</body>
</html>