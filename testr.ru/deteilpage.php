<?php
    include_once "./setings/detail.php";
    include_once "./setings/PostComent.php";
    $deteil = new Detail();
    $carts =  $deteil->GetId();
    $deteil->UpdateView();
    $com = new Post();
    $com->Coment($_POST["name"],$_POST["text"]);
    $coments = $com->getComent();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="detale.css">
    <title>Document</title>
</head>
<body >
    <header>
        <?php include_once "./header.php" ?>
    </header>
    <div class="wraper">
        <div class="deteilbox">
            <div class="boxes">
                <?php
                    foreach($carts as $item){
                        ?>
                        <div class="detail">
                            <h1><?php echo $item["name"] ?></h1>
                            <img src="<?php echo $item["img"] ?>" alt="">
                            <p><?php  echo $item["text"] ?></p>
                        </div>
                        
                        <?php
                    }
                ?>
            </div>
            
            <div class="coments">
                <h1>Comments</h1>
                <?php
                        foreach($coments as $item){
                            ?>
                                
                                <div style="border:1px solid black;text-align:center;width: 300px;margin-top:5px">
                                    <h4><?php echo $item["name"] ?></h4>
                                    <p><?php echo $item["text"] ?></p>
                                </div>
                            <?php
                        }
                    ?>
            </div>
        </div>
        
        <form style="text-align:center ;" action="" method="post">
            <h2>Add Comment For This Post</h2>
            <input style="width:170px" type="name" placeholder="name" name="name">
            <textarea style="width:470px" name="text" id="" cols="30" rows="10" placeholder="Your Comment" ></textarea>
            <input style="width:170px" type="submit">
        </form>
    </div>
    
</body>
</html>