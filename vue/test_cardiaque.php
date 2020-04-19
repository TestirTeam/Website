<?php $title = 'Cardiaque' ?>

<?php ob_start(); ?>


<div class="page_test">


    <aside class="sidebar_infos">
        <div class="title_sidebar"><strong>INFORMATIONS</strong></div>
        <div class="infos_sidebar_cardiaque">Tout tireur doit être en mesure de contrôler son stress face à différentes situations afin d’éviter tout accident.<br />Pour évaluer ce stress, l’une des fonctions évaluée, avec la température, est la mesure de la <strong>fréquence cardiaque</strong>. Votre poux devra être compris dans une certaine plage de battements par minutes, auquel cas vous perdrez des points sur votre score final. <em>"Rester zen"</em> sera votre seul mot d'ordre tout au long de ce test !</div>
    </aside>

    <div class="body">
        <div class="mosaic">
            <span class="title_body">TEST CARDIAQUE</span>
            <div class="image">
                <img class="image_fond" src="Images/cardiaque.jpg" alt="">
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
