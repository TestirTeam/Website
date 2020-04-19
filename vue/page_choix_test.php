<?php $title = 'Choix du test' ?>

<?php ob_start(); ?>


<div class="tests">


    <div class="overlay-image_temperature"><a href="test_temp.php">
        <img class=" image _bp " src="Images/tests/temperature/temp_finale.png" alt="Alt text" />
        <div class=" hover_bq ">
            <img class=" image _bp " src="Images/tests/temperature/temp_hover.png" alt="Alt text hover" />
            <div class=" text _q "></div>
        </div>
    </a></div>

    <div class="overlay-image_vue"><a href="test_vue.php">
        <img class=" image _bp " src="Images/tests/vue/vue_finale.png" alt="Alt text" />
        <div class=" hover_bq ">
            <img class=" image _bp " src="Images/tests/vue/vue_hover.png" alt="Alt text hover" />
            <div class=" text _q "></div>
        </div>
    </a></div>

    <div class="overlay-image_cardiaque"><a href="test_cardiaque.php">
        <img class=" image _bp " src="Images/tests/cardiaque/cardiaque_finale.png" alt="Alt text" />
        <div class=" hover_bq ">
            <img class=" image _bp " src="Images/tests/cardiaque/cardiaque_hover.png" alt="Alt text hover" />
            <div class=" text _q "></div>
        </div>
    </a></div>

    <div class="overlay-image_sonore"><a href="test_son.php">
        <img class=" image _bp " src="Images/tests/sonore/sonore_finale.png" alt="Alt text" />
        <div class=" hover_bq ">
            <img class=" image _bp " src="Images/tests/sonore/sonore_hover.png" alt="Alt text hover" />
            <div class=" text _q "></div>
        </div>
    </a></div>


</div>



<?php $content = ob_get_clean(); ?>

<?php require('header.php'); ?>