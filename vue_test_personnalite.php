<!DOCTYPE html>
<html lang="fr">



<head>

    <link rel="stylesheet" href="test%20personnalité.css">
    <meta charset="UTF-8">
    <title>Test de personnalité</title>

</head>



<body>

<div class="body">

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

    <div class="form">


        <div class="presentation_form">

            <br />
            <h1>TEST DE PERSONNALITÉ</h1>
            <p>En tant que futur (peut-être) porteur d'arme, nous devons vérifier vos actions et réactions face à certaines situations et sentiments avant de passer les tests.<br />
                Cela nous permettera d'évaluer votre état mental sous une première approche. Le questionnaire suivant s'articule autour de <strong>3 dimensions</strong> de votre état psychologique.<br /><br />
                Répondez aux questions de la manière la plus naturelle possible :</p><br /><br />

        </div>


        <form action="controlleur_test_personnalite.php" method="post">

            <fieldset>

                <legend>Dépression</legend>
                <p>
                    Les questions suivantes portent sur la façon dont vous vous êtes senti au cours des deux <strong>dernières semaines.</strong><br />
                    Veuillez sélectionner pour chacune la réponse qui se rapproche le plus de ce que vous avez ressenti.
                </p>

                <label for="question_1">Je me suis senti(e) triste ou démoralisé(e)</label>
                <select id="question_1">
                    <option value="Jamais" name="choix_1">Jamais</option>
                    <option value="Rarement" name="choix_2">Rarement</option>
                    <option value="Souvent" name="choix_3">Souvent</option>
                    <option value="Tous le temps" name="choix_4">Tous le temps</option>
                </select><br>
                <?php
                if(isset($_POST['question_1'])) echo htmlspecialchars($_POST['question_1']);
                ?>

                <label for="question_2">Je me suis senti(e) moins sûr(e) de moi</label>
                <select id="question_2">
                    <option value="Jamais" name="choix_1">Jamais</option>
                    <option value="Rarement" name="choix_2">Rarement</option>
                    <option value="Souvent" name="choix_3">Souvent</option>
                    <option value="Tous le temps" name="choix_4">Tous le temps</option>
                </select><br>
                <?php
                if(isset($_POST['question_2'])) echo htmlspecialchars($_POST['question_2']);
                ?>

                <label for="question_3">J'ai eu mauvaise conscience ou je me suis senti(e) coupable</label>
                <select id="question_3">
                    <option value="Jamais" name="choix_1">Jamais</option>
                    <option value="Rarement" name="choix_2">Rarement</option>
                    <option value="Souvent" name="choix_3">Souvent</option>
                    <option value="Tous le temps" name="choix_4">Tous le temps</option>
                </select><br>
                <?php
                if(isset($_POST['question_3'])) echo htmlspecialchars($_POST['question_3']);
                ?>

                <label for="question_4">J'ai pensé que la vie ne valait pas la peine d'être vécue</label>
                <select id="question_4">
                    <option value="Jamais" name="choix_1">Jamais</option>
                    <option value="Rarement" name="choix_2">Rarement</option>
                    <option value="Souvent" name="choix_3">Souvent</option>
                    <option value="Tous le temps" name="choix_4">Tous le temps</option>
                </select><br>
                <?php
                if(isset($_POST['question_4'])) echo htmlspecialchars($_POST['question_4']);
                ?>

                <label for="question_5">J'ai eu du mal à dormir la nuit</label>
                <select id="question_5">
                    <option value="Jamais" name="choix_1">Jamais</option>
                    <option value="Rarement" name="choix_2">Rarement</option>
                    <option value="Souvent" name="choix_3">Souvent</option>
                    <option value="Tous le temps" name="choix_4">Tous le temps</option>
                </select><br>
                <?php
                if(isset($_POST['question_5'])) echo htmlspecialchars($_POST['question_5']);
                ?>

            </fieldset><br />


            <fieldset>

                <legend>Anxiété</legend>
                <p>
                    Veuillez indiquer pour chacun de ces 7 énoncés dans quelle mesure il correspond à votre état d'esprit.
                </p>

                <label for="question_6">Je n’ai pas tendance à m’inquiéter à propos des choses</label>
                <select id="question_6">
                    <option value="Pas" name="choix_1">Ne me correspond pas</option>
                    <option value="Un peu" name="choix_2">Me correspond un peu</option>
                    <option value="Beaucoup" name="choix_3">Me correspond beaucoup</option>
                    <option value="Parfaitement" name="choix_4">Me correspond parfaitement</option>
                </select><br>
                <?php
                if(isset($_POST['question_6'])) echo htmlspecialchars($_POST['question_6']);
                ?>

                <label for="question_7">Mes inquiétudes me submergent</label>
                <select id="question_7">
                    <option value="Pas" name="choix_1">Ne me correspond pas</option>
                    <option value="Un peu" name="choix_2">Me correspond un peu</option>
                    <option value="Beaucoup" name="choix_3">Me correspond beaucoup</option>
                    <option value="Parfaitement" name="choix_4">Me correspond parfaitement</option>
                </select><br>
                <?php
                if(isset($_POST['question_7'])) echo htmlspecialchars($_POST['question_7']);
                ?>

                <label for="question_8">Je sais que je ne devrais pas m’inquiéter mais je n’y peux rien</label>
                <select id="question_8">
                    <option value="Pas" name="choix_1">Ne me correspond pas</option>
                    <option value="Un peu" name="choix_2">Me correspond un peu</option>
                    <option value="Beaucoup" name="choix_3">Me correspond beaucoup</option>
                    <option value="Parfaitement" name="choix_4">Me correspond parfaitement</option>
                </select><br>
                <?php
                if(isset($_POST['question_8'])) echo htmlspecialchars($_POST['question_8']);
                ?>

                <label for="question_9">Je m’inquiète continuellement à propos de tout</label>
                <select id="question_9">
                    <option value="Pas" name="choix_1">Ne me correspond pas</option>
                    <option value="Un peu" name="choix_2">Me correspond un peu</option>
                    <option value="Beaucoup" name="choix_3">Me correspond beaucoup</option>
                    <option value="Parfaitement" name="choix_4">Me correspond parfaitement</option>
                </select><br>
                <?php
                if(isset($_POST['question_9'])) echo htmlspecialchars($_POST['question_9']);
                ?>

                <label for="question_10">Il m’est facile de me débarrasser de pensées inquiétantes</label>
                <select id="question_10">
                    <option value="Pas" name="choix_1">Ne me correspond pas</option>
                    <option value="Un peu" name="choix_2">Me correspond un peu</option>
                    <option value="Beaucoup" name="choix_3">Me correspond beaucoup</option>
                    <option value="Parfaitement" name="choix_4">Me correspond parfaitement</option>
                </select><br>
                <?php
                if(isset($_POST['question_10'])) echo htmlspecialchars($_POST['question_10']);
                ?>

                <label for="question_11">Je ne m’inquiète jamais</label>
                <select id="question_11">
                    <option value="Pas" name="choix_1">Ne me correspond pas</option>
                    <option value="Un peu" name="choix_2">Me correspond un peu</option>
                    <option value="Beaucoup" name="choix_3">Me correspond beaucoup</option>
                    <option value="Parfaitement" name="choix_4">Me correspond parfaitement</option>
                </select><br>
                <?php
                if(isset($_POST['question_11'])) echo htmlspecialchars($_POST['question_11']);
                ?>

                <label for="question_12">J’ai été inquiet tout au long de ma vie</label>
                <select id="question_12">
                    <option value="Pas" name="choix_1">Ne me correspond pas</option>
                    <option value="Un peu" name="choix_2">Me correspond un peu</option>
                    <option value="Beaucoup" name="choix_3">Me correspond beaucoup</option>
                    <option value="Parfaitement" name="choix_4">Me correspond parfaitement</option>
                </select><br>
                <?php
                if(isset($_POST['question_12'])) echo htmlspecialchars($_POST['question_12']);
                ?>

            </fieldset><br />


            <fieldset class="radio_section">

                <legend>Personnalité</legend>
                <p>
                    Répondez de manière intuitive, sans trop analyser les questions. N'hésitez pas à vous prononcer rapidement pour l'une des options proposées.
                    Les questions sont assez nombreuses pour produire une impression d'ensemble pondérée.
                    Pour que ce test puisse vous informer utilement, tentez de répondre à toutes les questions.
                </p>

                <p><em>Au milieu de la foule...</em></p>
                <div class="question_13">
                    <div>
                        <input type="radio" id="Je suis dans mon élément..." name="question_13" value="Je suis dans mon élément...">
                        <label for="Je suis dans mon élément...">Je suis dans mon élément...</label>
                    </div>
                    <div>
                        <input type="radio" id="Je cherche à m'isoler" name="question_13" value="Je cherche à m'isoler">
                        <label for="Je cherche à m'isoler">Je cherche à m'isoler</label>
                    </div>
                    <label class="error">
                        <?php
                        if (isset($_POST['question_13'])) echo htmlspecialchars($_POST['question_13']);
                        ?>
                    </label>
                </div>

                <p><em>Mon carnet d'adresses...</em></p>
                <div class="question_14">
                    <div>
                        <input type="radio" id="Une infinité d'amis et de relations!" name="question_14" value="Une infinité d'amis et de relations!">
                        <label for="Une infinité d'amis et de relations!">Une infinité d'amis et de relations!</label>
                    </div>
                    <div>
                        <input type="radio" id="Quel carnet? Un post-it me suffit presque..." name="question_14" value="Quel carnet? Un post-it me suffit presque...">
                        <label for="Quel carnet? Un post-it me suffit presque...">Quel carnet? Un post-it me suffit presque...</label>

                    </div>
                    <label class="error">
                        <?php
                        if (isset($_POST['question_14'])) echo htmlspecialchars($_POST['question_14']);
                        ?>
                    </label>
                </div>

                <p><em>Une longue promenade solitaire...</em></p>
                <div class="question_15">
                    <div>
                        <input type="radio" id="Nature, rêverie, sérénité..." name="question_15" value="Nature, rêverie, sérénité...">
                        <label for="Nature, rêverie, sérénité...">Nature, rêverie, sérénité...</label>
                    </div>
                    <div>
                        <input type="radio" id="Sans personne à qui parler?" name="question_15" value="Sans personne à qui parler?">
                        <label for="Sans personne à qui parler?">Sans personne à qui parler?</label>
                    </div>
                    <label class="error">
                        <?php
                        if (isset($_POST['question_15'])) echo htmlspecialchars($_POST['question_15']);
                        ?>
                    </label>
                </div>

                <p><em>Quel vacarme, dans la rue!</em></p>
                <div class="question_16">
                    <div>
                        <input type="radio" id="Ah? Je n'ai rien entendu..." name="question_16" value="Ah? Je n'ai rien entendu...">
                        <label for="Ah? Je n'ai rien entendu...">Ah? Je n'ai rien entendu...</label>
                    </div>
                    <div>
                        <input type="radio" id="Oui, impossible de travailler!" name="question_16" value="Oui, impossible de travailler!">
                        <label for="Oui, impossible de travailler!">Oui, impossible de travailler!</label>
                    </div>
                    <label class="error">
                        <?php
                        if (isset($_POST['question_16'])) echo htmlspecialchars($_POST['question_16']);
                        ?>
                    </label>
                </div>

                <p><em>Rien ne remplace...</em></p>
                <div class="question_17">
                    <div>
                        <input type="radio" id="L'expérience." name="question_17" value="L'expérience.">
                        <label for="L'expérience.">L'expérience.</label>
                    </div>
                    <div>
                        <input type="radio" id="Une réfléxion théorique." name="question_17" value="Une réfléxion théorique.">
                        <label for="Une réfléxion théorique.">Une réfléxion théorique.</label>
                    </div>
                    <label class="error">
                        <?php
                        if (isset($_POST['question_17'])) echo htmlspecialchars($_POST['question_17']);
                        ?>
                    </label>
                </div>

                <p><em>Agissons...</em></p>
                <div class="question_18">
                    <div>
                        <input type="radio" id="Sur le champ!" name="question_18" value="Sur le champ!">
                        <label for="Sur le champ!">Sur le champ!</label>
                    </div>
                    <div>
                        <input type="radio" id="Après avoir envisagé toutes les options..." name="question_18" value="<Après avoir envisagé toutes les options...">
                        <label for="Après avoir envisagé toutes les options...">Après avoir envisagé toutes les options...</label>
                    </div>
                    <label class="error">
                        <?php
                        if (isset($_POST['question_18'])) echo htmlspecialchars($_POST['question_18']);
                        ?>
                    </label>
                </div>

                <p><em>Voici mon espace de travail...</em></p>
                <div class="question_19">
                    <div>
                        <input type="radio" id="Ordonné, comme moi!" name="question_19" value="Ordonné, comme moi!">
                        <label for="Ordonné, comme moi!">Ordonné, comme moi!</label>
                    </div>
                    <div>
                        <input type="radio" id="Que je rangerai demain..." name="question_19" value="Que je rangerai demain...">
                        <label for="Que je rangerai demain...">Que je rangerai demain...</label>
                    </div>
                    <label class="error">
                        <?php
                        if (isset($_POST['question_19'])) echo htmlspecialchars($_POST['question_19']);
                        ?>
                    </label>
                </div>

                <p><em>En suivant les conventions...</em></p>
                <div class="question_20">
                    <div>
                        <input type="radio" id="J'évite les risques inutiles..." name="question_20" value="J'évite les risques inutiles...">
                        <label for="J'évite les risques inutiles...">J'évite les risques inutiles...</label>
                    </div>
                    <div>
                        <input type="radio" id="Je passe à côté d'opportunités!" name="question_20" value="Je passe à côté d'opportunités!">
                        <label for="Je passe à côté d'opportunités!">Je passe à côté d'opportunités!</label>
                    </div>
                    <label class="error">
                        <?php
                        if (isset($_POST['question_20'])) echo htmlspecialchars($_POST['question_20']);
                        ?>
                    </label>
                </div>

            </fieldset><br /><br />


            <div>

                <a href="controlleur_test_personnalite.php" class="submit">Soumettre</a>

            </div>

        </form>


    </div>

</div>


</body>

</html>