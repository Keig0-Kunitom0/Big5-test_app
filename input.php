<?php
session_start();

$error = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post = filter_input_array(INPUT_POST,$_POST);
    if ($post['answer1'] == ''){
        $error['answer1'] = 'blank';
    }
    if ($post['answer2'] == ''){
        $error['answer2'] = 'blank';
    }
    if ($post['answer3'] == ''){
        $error['answer3'] = 'blank';
    }
    if ($post['answer4'] == ''){
        $error['answer4'] = 'blank';
    }
    if ($post['answer5'] == ''){
        $error['answer5'] = 'blank';
    }
    if ($post['answer6'] == ''){
        $error['answer6'] = 'blank';
    }
    if ($post['answer7'] == ''){
        $error['answer7'] = 'blank';
    }
    if ($post['answer8'] == ''){
        $error['answer8'] = 'blank';
    }
    if ($post['answer9'] == ''){
        $error['answer9'] = 'blank';
    }
    if ($post['answer10'] == ''){
        $error['answer10'] = 'blank';
    }

    if (count($error) == 0){
        $_SESSION['answers'] = $post;
        header('Location: output.php');
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Big5-test</title>
</head>
<body>
    <h1>自分がわかるビックファイブテスト</h1>

    <form action="input.php" method="post">
        <?php
            $answers = [
                '1' => '全く当てはまらない',
                '2' => 'ほぼ当てはまらない',
                '3' => 'どちらかといえば当てはまらない',
                '4' => 'どちらでもない',
                '5' => 'どちらかといえば当てはまる',
                '6' => 'ほぼ当てはまる',
                '7' => '全く当てはまる'
            ];
        ?>
        <h2>&nbsp;</h2>
        <p>Q1 活発で、外向的だと思う</p>
        <label>
            <?php
                foreach($answers as $key => $answer){
                    echo '<input type="radio" name="answer1" value="',$key,'">',$answer;
                }
            ?>
        </label>
        <?php if ($error['answer1'] === 'blank'): ?>
            <p style="color: red;">※選択してください</p>
        <?php endif; ?> </p>         
        <h2>&nbsp;</h2>
        <p>Q2 批判的で、揉め事を起こしやすいと思う</p>
        <label>
            <?php
                foreach($answers as $key => $answer){
                    echo '<input type="radio" name="answer2" value="',$key,'">',$answer;
                }
            ?>
        </label>
        <?php if ($error['answer2'] === 'blank'): ?>
            <p style="color: red;">※選択してください</p>
        <?php endif; ?>   
        <h2>&nbsp;</h2>
        <p>Q3 しっかりしていて、自分に厳しいと思う</p>
        <label>
            <?php
                foreach($answers as $key => $answer){
                    echo '<input type="radio" name="answer3" value="',$key,'">',$answer;
                }
            ?>
        </label>
        <?php if ($error['answer3'] === 'blank'): ?>
            <p style="color: red;">※選択してください</p>
        <?php endif; ?>   
        <h2>&nbsp;</h2>
        <p>Q4 心配性で、うろたえやすいと思う</p>
        <label>
            <?php
                foreach($answers as $key => $answer){
                    echo '<input type="radio" name="answer4" value="',$key,'">',$answer;
                }
            ?>
        </label>
        <?php if ($error['answer4'] === 'blank'): ?>
            <p style="color: red;">※選択してください</p>
        <?php endif; ?>   
        <h2>&nbsp;</h2>
        <p>Q5 新しいことが好きで、変わった考えを持つと思う</p>
        <label>
            <?php
                foreach($answers as $key => $answer){
                    echo '<input type="radio" name="answer5" value="',$key,'">',$answer;
                }
            ?>
        </label>
        <?php if ($error['answer5'] === 'blank'): ?>
            <p style="color: red;">※選択してください</p>
        <?php endif; ?>   
        <h2>&nbsp;</h2>
        <p>Q6 無口で、静かだと思う</p>
        <label>
            <?php
                foreach($answers as $key => $answer){
                    echo '<input type="radio" name="answer6" value="',$key,'">',$answer;
                }
            ?>
        </label>
        <?php if ($error['answer6'] === 'blank'): ?>
            <p style="color: red;">※選択してください</p>
        <?php endif; ?>   
        <h2>&nbsp;</h2>
        <p>Q7 同情しやすく、優しい人間だと思う</p>
        <label>
            <?php
                foreach($answers as $key => $answer){
                    echo '<input type="radio" name="answer7" value="',$key,'">',$answer;
                }
            ?>
        </label>
        <?php if ($error['answer7'] === 'blank'): ?>
            <p style="color: red;">※選択してください</p>
        <?php endif; ?>   
        <h2>&nbsp;</h2>
        <p>Q8 だらしなく、うっかりしていると思う</p>
        <label>
            <?php
                foreach($answers as $key => $answer){
                    echo '<input type="radio" name="answer8" value="',$key,'">',$answer;
                }
            ?>
        </label>
        <?php if ($error['answer8'] === 'blank'): ?>
            <p style="color: red;">※選択してください</p>
        <?php endif; ?>   
        <h2>&nbsp;</h2>
        <p>Q9 冷静で、気分が安定していると思う</p>
        <label>
            <?php
                foreach($answers as $key => $answer){
                    echo '<input type="radio" name="answer9" value="',$key,'">',$answer;
                }
            ?>
        </label>
        <?php if ($error['answer9'] === 'blank'): ?>
            <p style="color: red;">※選択してください</p>
        <?php endif; ?>   
        <h2>&nbsp;</h2>
        <p>Q10 独創的ではなく、平凡な人間だと思う</p>
        <label>
            <?php
                foreach($answers as $key => $answer){
                    echo '<input type="radio" name="answer10" value="',$key,'">',$answer;
                }
            ?>
        </label>
        <?php if ($error['answer10'] === 'blank'): ?>
            <p style="color: red;">※選択してください</p>
        <?php endif; ?>   
        <h2>&nbsp;</h2>
        <p>➡️<input type="submit" value="確定する"></p>
        <h2>&nbsp;</h2>
    </form>
</body>
</html>