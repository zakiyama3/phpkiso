<!DOCTYPE html>
<html>
<head>
  <title>送信完了</title>
  <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
</head>
<body>
  <h1>お問い合わせありがとうございました。</h1>
  <h2>お問い合わせ内容</h2>
  <h3><?php echo htmlspecialchars('ニックネーム：'.$_POST["nickname"])?></h3>
  <h3><?php echo htmlspecialchars('メールアドレス：'.$_POST["email"]) ?></h3>
  <h3><?php echo'お問い合わせ内容：'.'<br>'. htmlspecialchars($_POST["content"]); ?></h3>
 

</body>
</html>