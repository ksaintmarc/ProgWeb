<?php include_once "./include/gestLang.php";?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <title>Contact</title>
        <link rel="stylesheet" type="text/css" href="./style/contact.css"/>
        
        <?php include_once "./include/nav.php";?>

        <contact><?= $lang['contactExplications'];?></contact>

        <form action="./include/form.php" method="post">
            <article><label for="email">Email</label>
            <input type="email" id="email" name="email"/></article>
            <article><label for="message">Message</label>
            <textarea id="message" name="message"></textarea></article>
            
            <button type="submit"><?= $lang['Valider'];?></button>
        </form>

        <section>
            <introMessages><?= $lang['Messages'];?></IntroMessages>
        </section>
    
        <?php include_once "./include/footer.php";?>
        <script src="./script/insert.js"></script>
        <script src="./script/extract.js"></script>
    </body>    
</html>