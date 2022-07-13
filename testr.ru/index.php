<?php require_once "./setings/db.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inde.css">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <header class="class">
            <?php include "./header.php" ?>
        </header>
        <main class="main1">
            <div class="category">
                <?php include_once "./categories.php" ?>
            </div>
            <div>
                <?php include_once "./stati.php" ?>
            </div>
        </main>
    </div>

    
</body>
</html>