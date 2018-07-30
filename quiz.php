<?php
 
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
        <h1><?php echo $title_a ?></h1>
        <ul>
          <?php foreach ($choices_a as $choice_a) { ?>
            <li>
              <input type="radio" name="question_a" value="<?php echo $choice_a; ?>"><?php echo $choice_a; ?>
            </li>
          <?php } ?>
        </ul>
        <input type="hidden" name="answer_a" value="<?php echo $answer_a ?>">

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