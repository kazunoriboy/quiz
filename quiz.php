<?php
    //問題
    //①quiz.phpの中で定義した変数、配列を表示する問題文を作成
    //※ユーザーが選択した答えと正しい答えをanswer.phpに送信
    //②①で送信した内容によって正解、不正解を表示する
    //③問題の数を増やす。

    $title_a = 'Q1,ハイジャックの語源とは？';

    $choices_a = array(
        'ジャックという名前が多かったから',
        '空高いところで襲撃するから',
        'テンションがハイだから',
        '高い金銭を要求するから'
    );

    $answer_a = $choices_a[0];

    shuffle($choices_a);
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
        <a class="title" href="">Home</a>
      </div>
    </header>

    <div id="container">
      <h2>雑学クイズ！</h2>

      <form method="POST" action="answer.php">
        <h1>ここに問題</h1>
        <ul>
          <li>
            <input type="radio" name="question_a" value="">ここに4択回答 1
          </li>
          <li>
            <input type="radio" name="question_a" value="">ここに4択回答 2
          </li>
          <li>
            <input type="radio" name="question_a" value="">ここに4択回答 3
          </li>
          <li>
            <input type="radio" name="question_a" value="">ここに4択回答 4
          </li>
        </ul>

        <input type="submit" class="btn btn-primary" value="回答する!">
      </form>
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