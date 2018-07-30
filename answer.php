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
      <h2>{ ここに点数を表示 } 点</h2>

      <div class="section">
        <p>Q1.{ ここに正解! or 不正解という文字列 }</p>
        <p>答え、　{ ここに正しい回答 }</p>
        <p>あなたの答え、{ ここにユーザーが選択した答え }</p>
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