<?php
 
$title_a = 'Q1,ハイジャックの語源とは？';
$title_b = 'Q2,点滴の成分は何と同じ？';
$title_c = 'Q3,瞬間接着剤は何のために開発された？';
$title_d = 'Q4,アブラカタブラの意味とは？';
$title_e = 'Q5,日本で初めてのペットボトルは、何の容器だったでしょうか？';


$choices_a = array();
$choices_a = array('ジャックという名前が多かったから','空高いところで襲撃するから','テンションがハイだから','高い金銭を要求するから');

$choices_b = array();
$choices_b = array('ポカリスエット','血液','オレンジジュース','砂糖水');

$choices_c = array();
$choices_c = array('戦争','漁業','農業','工作');

$choices_d = array();
$choices_d = array('花粉症対策','いただきます','悪霊退散','ごちそうさまでした');

$choices_e = array();
$choices_e = array('醤油','コーラ','コーヒー','ミネラルウォーター');

$answer_a = $choices_a[0];
$answer_b = $choices_b[0];
$answer_c = $choices_c[0];
$answer_d = $choices_d[0];
$answer_e = $choices_e[0];

shuffle($choices_a);
shuffle($choices_b);
shuffle($choices_c);
shuffle($choices_d);
shuffle($choices_e);

 
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
          <?php foreach($choices_a as $choice_a){ ?>
            <li><input type="radio" name="question_a" value="<?php echo $choice_a; ?>">  <?php echo $choice_a; ?></li>
          <?php } ?>
        </ul><br>

        <h1><?php echo $title_b ?></h1>
        <ul>
          <?php foreach($choices_b as $choice_b){ ?>
            <li><input type="radio" name="question_b" value="<?php echo $choice_b; ?>">  <?php echo $choice_b; ?></li>
          <?php } ?>
        </ul><br>

        <h1><?php echo $title_c ?></h1>
        <ul>
          <?php foreach($choices_c as $choice_c){ ?>
            <li><input type="radio" name="question_c" value="<?php echo $choice_c; ?>">  <?php echo $choice_c; ?></li>
          <?php } ?>
        </ul><br>

        <h1><?php echo $title_d ?></h1>
        <ul>
          <?php foreach($choices_d as $choice_d){ ?>
            <li><input type="radio" name="question_d" value="<?php echo $choice_d; ?>">  <?php echo $choice_d; ?></li>
          <?php } ?>
        </ul><br>

        <h1><?php echo $title_e ?></h1>
        <ul>
          <?php foreach($choices_e as $choice_e){ ?>
            <li><input type="radio" name="question_e" value="<?php echo $choice_e; ?>">  <?php echo $choice_e; ?></li>
          <?php } ?>
        </ul><br>

        <input type="hidden" name="answer_a" value="<?php echo $answer_a ?>">
        <input type="hidden" name="answer_b" value="<?php echo $answer_b ?>">
        <input type="hidden" name="answer_c" value="<?php echo $answer_c ?>">
        <input type="hidden" name="answer_d" value="<?php echo $answer_d ?>">
        <input type="hidden" name="answer_e" value="<?php echo $answer_e ?>">

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