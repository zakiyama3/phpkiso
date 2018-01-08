
<?php 
// 扱いやすいように変数に代入
$nickname = htmlspecialchars($_POST["nickname"]);
$email = htmlspecialchars($_POST["email"]);
$content = htmlspecialchars($_POST["content"]);



// データベースとのやり取りの処理

// ステップ１データベースに接続する
// データベース接続文字列
// mysql:　接続するデータベースの種類
// dbnam　データベース名
// host パソコンのアドレス　localhost　このプログラムが存在している場所と同じサーバー
// 空欄入れないようにき記述するルール


// $dsn = 'mysql:dbname=phpkiso2;host=localhost';

// // $user　データベースに接続用ユーザー名
// // $password データベース接続用ユーザーのパスワード
// $user = 'root';
// $password='';

// //データベース接続オブジェクト
// $dbh = new PDO($dsn, $user, $password);

// // 今から実行するSQL文を文字コードutf8で送るという設定（文字化け防止）
// $dbh->query('SET NAMES utf8');

require('dbconnect.php');


// ステップ２ SQL文実行
$sql = 'INSERT INTO `survey` (`nickname`,`email`,`content`)
VALUES("'.$nickname.'","'.$email.'","'.$content.'");';

// SQL文を実行する準備
// ->　アロー演算子
$stmt = $dbh->prepare($sql);

// SQL文を実行
$stmt->execute();


// ステップ３　データベースの切断（オブジェクトの中身を空っぽにしている）
$dbh=null;


 ?>



<!DOCTYPE html>
<html>
<head>
  <title>送信完了</title>
  <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="assets/css/main2.css">
    <link rel="stylesheet" type="text/css" href="assets/js/form.js">
</head>
<body>
<section id="login">
  <div class="container " >
   <div class="row">
    <div  style="width:400px; margin:0 auto;">
         <h1><font color="#1fa67b">お問い合わせありがとうございました。</font></h1>
         <center><h3>お問い合わせ内容</h3></center>
         <div class="col-xs-offset-3 col-xs-8">
          <?php echo htmlspecialchars('ニックネーム：'.$_POST["nickname"]);?><br>
          <?php echo htmlspecialchars('メールアドレス：'.$_POST["email"]);?><br>
          <?php echo'お問い合わせ内容：'.'<br>'. htmlspecialchars($_POST["content"]);?><br>
         </div>
    </div> <!-- /.col-xs-12 -->
   </div> <!-- /.row -->
  </div> <!-- /.container -->        
</section>
</body>
</html>