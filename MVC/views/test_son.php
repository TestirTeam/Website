<?php $title = 'Son' ;
require('models/modele_test_personnalite.php');
require('models/connexiondb.php');?>


<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylesheetMVC/style.css" />
    <title><?= $title ?></title>

</head>
<?php require('header.php'); ?>



<div class="page_test">


    <aside class="sidebar_infos">
        <div class="title_sidebar"><strong>INFORMATIONS</strong></div>
        <div class="infos_sidebar_son">Le but de ce test est de mesurer votre capacité à reconnaître et reproduire une certaine tonalité.<br /> Pour ce faire, nous vous ferons écouter une certaine <strong>fréquence</strong> et vous devrez ensuite essayer de la reproduire. Nous comparerons ensuite les deux fréquences obtenues afin de vous délivrer un score en fonction de la qualité de reproduction de cette tonalité.</div>
    </aside>

    <div class="body">
        <div class="mosaic">
            <span class="title_body">TEST SONORE</span>
            <div class="image">
                <img class="image_fond" src="../Images/son.jpg" alt="">
            </div>
            <a <?php $test=checkTest($db,$_SESSION['id']);
            if(empty($test)){
                echo 'href="formulaire-test"';
            }else{
                echo 'href="wait-test"';
            }?> class="fomrulaire_button">Acceder au formulaire du test</a>
        </div>
    </div>

    <div class="footer">
        @COPYRIGHT TESTIR
    </div>


</div>





