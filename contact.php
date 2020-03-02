<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Alsa'Discovery</title>
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/pages_menu/mobile.css">
    <link rel="stylesheet" media="screen and (min-width: 1024px)" href="style/pages_menu/ordi.css">
</head>

<body>
    <header>
        <div class='menumobile'>
            <div>
                <a href="index.html" onclick="desactiver();">Présentation</a>
                <a href="actu.html" onclick="desactiver();">Actualités</a>
                <a href="contact.php" onclick="desactiver();">Contact</a>
                <img width="8%" onclick="desactiver();" src="images/croix.svg">
            </div>
        </div>
        <div>
            <img src="images/menu.svg" class="icomenu" style="cursor:pointer;" onclick="transformMENU();">
        </div>
        <div>
            <img src="images/logo.svg" onclick="location.href='index.html';" style="cursor:pointer;" class="logo">
        </div>
        <a href="index.html">Présentation</a>
        <a href="actu.html">Actualités</a>
        <a href="contact.php">Contact</a>
    </header>
    <div id="titrecontact">
        <h1>Contact</h1>
    </div>
    <form action="<?php echo $_SERVER[" PHP_SELF "] ?>" method="post" class="formulaire">
        <div>
            <label for="nom">Nom</label>
            <input type="text" id="name" name="nom">
            <label for="prenom">Prénom</label>
            <input type="text" id="name" name="prenom">
            <label for="mail">E-mail</label>
            <input type="email" id="mail" name="mail">
        </div>
        <label for="msg">Message </label>
        <textarea id="msg" name="message"></textarea>
        <input type="submit" value="envoyer" name="ok">
        <?php
        if (isset($_POST["ok"])) {
            if (empty($_POST["nom"]) || empty($_POST["prenom"]) || empty($_POST["mail"]) || empty($_POST["message"])) {
                echo "<br><strong style='color:white; font-size:110%'>Veuillez remplir tous les champs</strong>";
            } else {
                $nom = $_POST["nom"];
                $prenom = $_POST["prenom"];
                $mail = $_POST["mail"];
                $message = $_POST["message"];

                mail('alsadiscovery@gmail.com', 'Mail de ' . $nom . ' ' . $nom . ' <' . $mail . '>', $message);
            }
        }
        ?>
    </form>
    <footer>
        <div>
            <img src="images/facebook.svg" width="50px" height="50px" onclick="location.href='https://www.facebook.com/AlsaDiscovery-449687375826616/?modal=admin_todo_tour';" style="cursor:pointer;">
            <img src="images/instagram.svg" width="50px" height="50px" onclick="location.href='https://www.instagram.com/alsa_discovery/';" style="cursor:pointer;">
            <img src="images/twitter.svg" width="50px" height="50px" onclick="location.href='https://twitter.com/AlsaDiscovery';" style="cursor:pointer;">
            <img src="images/youtube.svg" width="50px" height="50px" onclick="location.href='https://www.youtube.com/channel/UCFDwsaQwM8S5q8UTSThewZw?view_as=subscriber';" style="cursor:pointer;">
            <br> © Copyright 2019-2020 Alsa'Discovery
        </div>
    </footer>
</body>

</html>
<script src="js/index.js"></script>