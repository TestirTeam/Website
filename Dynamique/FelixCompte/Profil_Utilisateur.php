<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu header</title>
    <link rel="stylesheet" href="felixStyleUser.css"/>
</head>
<body>

<div class="header">
    <a href="#default" class="logo">
        <div class="igloo">
            <img src="../../Images/Logo%20Testir.png" alt="" id="imgTestirHeaderLogo"/>
            <img src="../../Images/TesTirBlanc2.png" alt="" id="imgTestirHeader"/>
        </div>

    </a>
    <div class="header-right">
        <a class="active" href="../../Dynamique/PageAccueil.php#page-1">Accueil</a>
        <a href="../../Dynamique/PageAccueil.php#page-2">Notre Start-up</a>
        <a href="../../Dynamique/PageAccueil.php#page-3">Nos Services</a>
        <a href="../../Dynamique/deconnexion.php">Deconnexion</a>
    </div>
</div>
<br>
<div>
    <section>
        <a id="photoCompte"><img src="../../Images/PhotoProfil.png" alt="photo de profil"/></a>
        <div>
            <a id="PrenomNom">
                <?php echo $_SESSION["prenom"].' '.$_SESSION["nom"];?>
            </a>
            <a id="Email">
                <?php echo $_SESSION["mail"];?>
            </a>
            <a id="Age">
                Age:  <?php echo $_SESSION["age"];?> ans
            </a>
        </div>
        <div class="Boutton">
            <a href="http://localhost:63342/Testir/Website/modif_utilisateur.php" class="bouton1">Modifier</a>
        </div>
        <div class="Boutton">
            <a href="https://www.google.fr/" class="bouton2">Test</a>
        </div>
        <div class="Boutton">
            <a href="https://www.google.fr/" class="bouton3">Aide</a>
        </div>
    </section>
</div>
<div>
    <span class="heading">
        <h3>
             Résultat des tests
        </h3>
        <p>Score total : 52/100</p>
    </span>
    <div class="row">
        <div class="side">
            <div>Temperature</div>
        </div>
        <div class="middle">
            <div class="bar-container">
                <div class="bar-5"></div>
            </div>
        </div>
        <div class="side right">
            <div>60</div>
        </div>
        <div class="side">
            <div>Battement</div>
        </div>
        <div class="middle">
            <div class="bar-container">
                <div class="bar-4"></div>
            </div>
        </div>
        <div class="side right">
            <div>34</div>
        </div>
        <div class="side">
            <div>Vue</div>
        </div>
        <div class="middle">
            <div class="bar-container">
                <div class="bar-3"></div>
            </div>
        </div>
        <div class="side right">
            <div>42</div>
        </div>
        <div class="side">
            <div>Son</div>
        </div>
        <div class="middle">
            <div class="bar-container">
                <div class="bar-2"></div>
            </div>
        </div>
        <div class="side right">
            <div>86</div>
        </div>
        <div class="side">
            <div>Questionnaire</div>
        </div>
        <div class="middle">
            <div class="bar-container">
                <div class="bar-1"></div>
            </div>
        </div>
        <div class="side right">
            <div>15</div>
        </div>
    </div>
</div>
<div class="column">
    <div class="card">
        <h3>
            Temperature
        </h3>
        <a>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.
        </a>
    </div>
</div>
<div class="column">
    <div class="card">
        <h3>
            Battement
        </h3>
        <a>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.
        </a>
    </div>
</div>
<div class="column">
    <div class="card">
        <h3>
            Vue
        </h3>
        <a>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.
        </a>
    </div>
</div>
<div class="column">
    <div class="card">
        <h3>
            Son
        </h3>
        <a>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.
        </a>
    </div>
</div>
</div>
</body>
</html>