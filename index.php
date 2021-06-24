<?php
require __DIR__ . './dist/db/discs.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/css/style.css">
    <title>Spotify - Dischi</title>
</head>

<body>
    <header>
        <img src="./dist/images/logo.png" alt="" id="logo">
    </header>

    <main id="root">
        <div class="discList">
            <?php
            foreach ($discs as $disc) {
            ?><div class="disc">
                <img class="poster" src="<?= $disc["poster"] ?>" alt="">
                <h2><?= $disc["title"] ?></h2>
                <h4><?= $disc["author"] ?></h4>
                <h4><?= $disc["year"] ?></h4>
            </div>
            <?php
            }
            ?>
        </div>
    </main>
</body>

</html>