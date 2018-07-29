<?php

$question = array(
  'a' => $_POST['question_a'],
  'b' => $_POST['question_b'],
  'c' => $_POST['question_c'],
  'd' => $_POST['question_d'],
  'e' => $_POST['question_e'],
);

$answer = array(
  'a' => $_POST['answer_a'],
  'b' => $_POST['answer_b'],
  'c' => $_POST['answer_c'],
  'd' => $_POST['answer_d'],
  'e' => $_POST['answer_e'],
);

$result = array();
$score = 0;

if($question['a'] == $answer['a']){
  $result['a'] = "正解！";
  $score += 20;
}else{
  $result['a'] = "不正解･･･";
}

if($question['b'] == $answer['b']){
  $result['b'] = "正解！";
  $score += 20;
}else{
  $result['b'] = "不正解･･･";
}

if($question['c'] == $answer['c']){
  $result['c'] = "正解！";
  $score += 20;
}else{
  $result['c'] = "不正解･･･";
}

if($question['d'] == $answer['d']){
  $result['d'] = "正解！";
  $score += 20;
}else{
  $result['d'] = "不正解･･･";
}

if($question['e'] == $answer['e']){
  $result['e'] = "正解！";
  $score += 20;
}else{
  $result['e'] = "不正解･･･";
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Quiz</title>
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
  <div id="wrapper">

    <header id="header">
      <div class="left-header">
        <a class="title" href="quiz.php">Home</a>
      </div>
    </header>

    <div id="container">
      <h2>クイズの結果!</h2>
      <h2><?php echo $score ?>点</h2>

      <div class="section">
        <p>Q1.<?php echo $result['a'] ?></p>
        <p>答え、　<?php echo $answer['a'] ?></p>
        <p>あなたの答え、<?php echo $question['a'] ?></p>
      </div>
      <div class="section">
        <p>Q2.<?php echo $result['b'] ?></p>
        <p>答え、　<?php echo $answer['b'] ?></p>
        <p>あなたの答え、<?php echo $question['b'] ?></p>
      </div>
      <div class="section">
        <p>Q3.<?php echo $result['c'] ?></p>
        <p>答え、　<?php echo $answer['c'] ?></p>
        <p>あなたの答え、<?php echo $question['c'] ?></p>
      </div>
      <div class="section">
        <p>Q4.<?php echo $result['d'] ?></p>
        <p>答え、　<?php echo $answer['d'] ?></p>
        <p>あなたの答え、<?php echo $question['d'] ?></p>
      </div>
      <div class="section">
        <p>Q5.<?php echo $result['e'] ?></p>
        <p>答え、　<?php echo $answer['e'] ?></p>
        <p>あなたの答え、<?php echo $question['e'] ?></p>
      </div>
    </div>

    <footer id="footer">
      <div class="container">
        <div class="footer-body">
          <p>Quiz, PHP practice 2018.</p>
        </div>
      </div>
    </footer>
  </div>
</body>
</html>