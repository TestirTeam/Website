<?php $title = 'Température' ?>

<?php ob_start(); ?>


<div class="page_test">


    <aside class="sidebar_infos">
        <div class="title_sidebar"><strong>INFORMATIONS</strong></div>
        <div class="infos_sidebar_temp">L’une des fonctionnalité principale pour évaluer le niveau de stress est la mesure de température de la peau d’un individu.<br /> En effet, l’augmentation de la température corporelle ne provient pas seulement d’un virus ou d’une bactérie. Plusieurs facteurs peuvent en être la cause, dont le stress. Ce test nous permettera alors d'évaluer votre capacité à rester suffisament lucide en fonction de la situation sur laquelle vous êtes confronter.</div>
    </aside>

    <div class="body">
        <div class="mosaic">
            <span class="title_body">TEST TEMPERATURE</span>
            <div class="image">
                <img class="image_fond" src="Images/temperature.jpg" alt="">
            </div>
            <a href="#" class="fomrulaire_button">Acceder au formulaire du test</a>
        </div>
    </div>

    <div class="footer">
        @COPYRIGHT TESTIR
    </div>


</div>



<?php $content = ob_get_clean(); ?>

<?php require('header.php'); ?>
