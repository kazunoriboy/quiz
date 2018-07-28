<?php
 
$title = 'ハイジャックの語源とは？';
 
$choices = array();
$choices = array('ジャックという名前が多かったから','空高いところで襲撃するから','テンションがハイだから','高い金銭を要求するから');
 
$answer = $choices[0];
 
shuffle($choices);
 
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
      <h1>ハイジャックの語源とは？</h1>

      <form method="POST" action="answer.php">
        <ul>
          <?php foreach($choices as $choice){ ?>
            <li><input type="radio" name="question" value="<?php echo $choice; ?>">  <?php echo $choice; ?></li>
          <?php } ?>
        </ul><br>
        <input type="hidden" name="answer" value="<?php echo $answer ?>">
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