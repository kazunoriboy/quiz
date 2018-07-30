<?php

$question = array(
    'a' => $_POST['question_a'],
);

$answer = array(
    'a' => $_POST['answer_a'],
);

$result = array();
$score = 0;

if ($question['a'] == $answer['a']) {
    $result['a'] = "正解！";
    $score += 20;
} else {
    $result['a'] = "不正解･･･";
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