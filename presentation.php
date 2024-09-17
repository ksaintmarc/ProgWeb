<?php include_once "./include/gestLang.php";?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <title><?= $lang['presentation'];?></title>
        <link rel="stylesheet" type="text/css" href="./style/creations.css"/>
        <?php include_once "./include/nav.php";?> 
        <article>
                <img src="./img/pres/me.png" alt="Image représentant une femme vêtue d'une longue robe violette tenant un pinceau"/>
                <h1><?= $lang['presentation'];?></h1>
                <p><?= $lang['presentationContenu'];?></p>
        </article>

        <?php include_once "./include/footer.php";?>
</html>