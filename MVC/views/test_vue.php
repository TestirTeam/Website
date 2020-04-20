<?php $title = 'Vue' ?>


<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylesheetMVC/style.css" />
    <title><?= $title ?></title>

</head>
<?php require('header.php'); ?>

<div class="page_test">


    <aside class="sidebar_infos">
        <div class="title_sidebar"><strong>INFORMATIONS</strong></div>
        <div class="infos_sidebar_vue">Ce test va mesurer vos reflexes visuels en quantifiant son temps de réaction face à un stimulus. Pour ce faire, nous allons tester votre réaction face à une lumière s'activant de manière innatendue.<br /> Le principe est le suivant : vous devrez appuyer sur un bouton poussoir lorsque la <strong>LED rouge</strong> sera allumée. Vous actionnerez alors, en parallèle, une <strong>LED verte</strong>. Le temps de réaction mesuré entre votre action et l'allumage de la <strong>LED rouge</strong> nous permettera de vous établir un score qui sera directement consultable sur votre profil.</div>
    </aside>

    <div class="body">
        <div class="mosaic">
            <span class="title_body">TEST VUE</span>
            <div class="image">
                <img class="image_fond" src="../Images/vue.jpg" alt="">
            </div>
            <a href="#" class="fomrulaire_button">Acceder au formulaire du test</a>
        </div>
    </div>

    <div class="footer">
        @COPYRIGHT TESTIR
    </div>


</div>






