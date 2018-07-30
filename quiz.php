<?php
 
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