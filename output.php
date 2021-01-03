<?php
session_start();

//入力画面からのアクセスでなければ、戻す
if (!isset($_SESSION['answers'])){
    header('Location: input.php');
}
    $post = $_SESSION['answers'];

    $answer01 = $post['answer1'];
    $answer02 = $post['answer2'];
    $answer03 = $post['answer3'];
    $answer04 = $post['answer4'];
    $answer05 = $post['answer5'];
    $answer06 = $post['answer6'];
    $answer07 = $post['answer7'];
    $answer08 = $post['answer8'];
    $answer09 = $post['answer9'];
    $answer10 = $post['answer10'];

    $honesty = ($answer03 + (8 - $answer08))/2;

    $cooperative = ($answer07 + (8 - $answer02))/2;

    $emotional_stavility = ($answer09 + (8 - $answer04))/2;

    $openness = ($answer05 + (8 - $answer10))/2;

    $extraversion = ($answer01 + (8 - $answer06))/2;

    unset($_SESSION['answers']);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Big5-test<</title>
    </head>
    <body>
        <h1>診断結果</h1>

        <p>誠実性=<?= $honesty; ?></p>
        <p>協調性=<?= $cooperative; ?></p>
        <p>情緒安定性=<?= $emotional_stavility; ?></p>
        <p>開放性=<?= $openness; ?></p>
        <p>外交性=<?= $extraversion; ?></p>

        <h2>&nbsp;</h2>
        <p>成人の平均スコアは、誠実性=4.61、協調性=4.69、情緒安定性=4.34、開放性=5.51、外交性=3.98です</p>
        <h2>&nbsp;</h2>
        <p><a href="./input.php">もう一度診断する</a></p>

        <h2>&nbsp;</h2>
    </body>
</html>