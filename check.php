<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <!--  <link href="assets/css/bootstrap.css" rel="stylesheet">
 -->
    <!-- Custom styles for this template -->
  <!--  <link href="assets/css/main.css" rel="stylesheet"> -->
   <!-- <link href="assets/css/font-awesome.min.css" rel="stylesheet"> -->


</head>
<body>

 <!--  12/8授業内容「 -->
  <h1>入力内容確認</h1>
  <?php if ($_POST["nickname"]=="") {
    echo "ニックネームを表示してください".'<br>';
  }else{?>
  ようこそ、<?php echo htmlspecialchars($_POST["nickname"]); ?>様<br>
  <?php }?>
  <?php if ($_POST["email"]=="") {
    echo "emailを表示してください".'<br>';
  }else{?>
  Email:<?php echo htmlspecialchars($_POST["email"]); ?><br>
  <?php } ?>
  <?php if ($_POST["content"]=="") {
    echo "内容を表示してください".'<br>';
  }else{?>
  お問い合わせ内容<?php echo htmlspecialchars($_POST["content"]); ?><br>
   <?php } ?>
<!-- 
  メールアドレス：<?php echo $_POST["email"]; ?><br>
  お問い合わせ内容:<?php echo $_POST["content"]; ?><br>
 -->


 

  <h3><?php echo 'ようこそ、'.$_POST["nickname"].'様'; ?></h3>
  <h3> メールアドレス：<?php echo $_POST["email"]; ?></h3>
  <h3>お問い合わせ内容：<?php echo $_POST["content"]; ?></h3>
 
<!-- 12/8授業内容  -->
<form method="POST" action="thanks.php">
  <input type="hidden" name="nickname" value="<?php echo $_POST["nickname"] ?>">
  <input type="hidden" name="email" value="<?php echo $_POST["email"] ?>">
 　<input type="hidden" name="content" value="<?php echo $_POST["content"] ?>">
 
  <!-- <input  type="button" value="戻る" onclick="history.back();">   -->
  <button  class="btn btn-warning" type="button" a href="#" onclick="history.back();">戻る</button>
 <!--  <input type="submit" value="OK"> -->
  <button  class="btn btn-warning"　type="submit">OK</button>

   <?php if (($_POST['nickname']!="")&& ($_POST['email']!="")&&($_POST['content']!=""))
 {?>

  
  <form method="POST" action="thanks.php">
    <input type="hidden" name="nickname" value="<?php echo $_POST["nickname"]; ?>">
    <input type="submit" value="OK" >
    

  </form>
<?php } ?>

</form>


<!-- <div class="span3 well">
      <legend>お問い合わせ情報入力</legend>
    <form accept-charset="UTF-8" action="check.php" method="POST">
    <p><span style="color: #080808">ニックネーム</span><br>
    <input class="span3" name="nickname"  style="width: 100px"></p>
     <p><span style="color: #080808">メールアドレス</span><br>
    <input class="span3" name="email"  style="width: 200px"></p>
    <p><span style="color: #080808">お問い合わせ内容</span><br>
        <textarea class="span3" name="content"  cols="40" rows="5"></textarea><br>
        <button  class="btn btn-warning"　type="submit">送信</button></p> 
    </form>
</div> -->


</body>
</html>