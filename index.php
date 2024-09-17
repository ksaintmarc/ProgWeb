<?php include_once "./include/gestLang.php";?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <title><?= $lang['Galerie'];?></title>
        <link rel="stylesheet" type="text/css" href="./style/index.css"/>
        <?php include_once "./include/nav.php";?>

            <ul>
                
                <a href="./creations.php"><li> <h1><?= $lang['mesCreations'];?></h1></li></a>
                <a href="./projets.php"><li><h1><?= $lang['Projets'];?></h1></li></a>
                <a href="./presentation.php"><li><h1><?= $lang['presentation'];?></h1></li></a>
                <a href="./contact.php"><li><h1>Contact</li></h1></a>
            </ul>
        
        <?php include_once "./include/footer.php";?>
</html>