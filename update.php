<?php 


$nickname = htmlspecialchars($_POST["nickname"]);
$email = htmlspecialchars($_POST["email"]);
$content = htmlspecialchars($_POST["content"]);


  // ステップ１
  // DBの接続
 require('dbconnect.php');
// var_dump($dbh);

  // ステップ２
// SELECT文実行
$sql = 'UPDATE `survey` SET `nickname`="'.$nickname.'",`email`="'.$email.'", `content`="'.$content.'" WHERE `code` = '.$_POST['code'];



// var_dump($dbh);


var_dump($sql);

$stmt = $dbh->prepare($sql);
$stmt->execute();

  // SQL文実行
$record = $stmt->fetch(PDO::FETCH_ASSOC);


// var_dump($record);

// ヒント：ここにフェッチしたデータを保存しておく代入文を記述！！

  // ステップ３
  // 接続の解除

// ステップ３　データベースの切断、オブジェクトを空っぽにしている。
$dbn=null;

header('location: view.php');

?>   



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="assets/css/main2.css">
  <link rel="stylesheet" type="text/css" href="assets/js/form.js">


  <title></title>
</head>
<body>

  <input type="hidden" name="code" value="<?php echo $_POST["code"] ?>">
  <input type="hidden" name="nickname" value="<?php echo $_POST["nickname"] ?>">
  <input type="hidden" name="email" value="<?php echo $_POST["email"] ?>">
 <input type="hidden" name="content" value="<?php echo $_POST["content"] ?>">

<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/form.js"></script>
<!-- <?php include'copyright.php' ?>

</body>
</html> -->

