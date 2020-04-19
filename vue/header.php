<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" />
    <title><?= $title ?></title>

</head>

<body>

    <div class="header">

        <a href="#default" class="logo">
            <div class="igloo">
                <img src="Images/Logo Testir.png" alt="" id="imgTestirHeaderLogo"/>
                <img src="Images/TesTirBlanc....png" alt="" id="imgTestirHeader"/>
            </div>
        </a>

        <div class="header-right">
            <a class="active" href="#home">Accueil</a>
            <a href="#contact">Notre Start-up</a>
            <a href="#about">Nos Services</a>
            <a href="#about">Connexion</a>
            <a href="#about">Inscription</a>
        </div>

    </div>

    <?= $content ?>

</body>


