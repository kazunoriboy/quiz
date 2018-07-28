<?php

$question = $_POST['question'];
$answer = $_POST['answer'];

if($question == $answer){
  $result = "正解！";
}else{
  $result = "不正解･･･";
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
      <h2>クイズの結果</h2>
      <h2><?php echo $result ?></h2>
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