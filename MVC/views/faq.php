<?php
require ("models/connexiondb.php");
require ("models/faq.php");
$question1=getFaqInfo($db,1);
$question2=getFaqInfo($db,2);
$question3=getFaqInfo($db,3);
$question4=getFaqInfo($db,4);
$question5=getFaqInfo($db,5);
?>

<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>FAQ Testir</title>
    <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
    <link rel="stylesheet" href="stylesheetMVC/faq.css">
</head>
<?php require('header.php')?>
<body>

<div class="container">

    <h2>Questions Fréquentes</h2>

    <div class="accordion">
        <div class="accordion-item">
            <a><?= $question1['question'] ?></a>
            <div class="content">
                <p><?= $question1['reponse'] ?></p>
            </div>
        </div>
        <div class="accordion-item">
            <a><?= $question2['question'] ?></a>
            <div class="content">
                <p><?= $question2['reponse'] ?></p>
            </div>
        </div>
        <div class="accordion-item">
            <a><?= $question3['question'] ?></a>
            <div class="content">
                <p><?= $question3['reponse'] ?></p>
            </div>
        </div>
        <div class="accordion-item">
            <a><?= $question4['question'] ?></a>
            <div class="content">
                <p><?= $question4['reponse'] ?></p>
            </div>
        </div>
        <div class="accordion-item">
            <a><?= $question5['question'] ?></a>
            <div class="content">
                <p><?= $question5['reponse'] ?></p>
            </div>
        </div>
    </div>


</div>

<script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>
<script  src="javascript/faq.js"></script>

<?php require('footer.php')?>
</body>

</html>
