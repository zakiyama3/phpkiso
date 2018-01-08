<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="assets/css/main2.css">
  <link rel="stylesheet" type="text/css" href="assets/js/form.js">


</head>
<body>
<section id="login">
    <div class="container " >
      <div class="row">
          <div style="width:250px; margin:0 auto;">
            

            <h1><font color="#1fa67b">入力内容確認</font></h1>
           <?php if ($_POST["nickname"]=="") {
            echo "Please enter the name".'<br>';
            }else{?>
             <font size="3">ようこそ、<?php echo htmlspecialchars($_POST["nickname"]); ?>様</font><br>
            <?php }?>
            <?php if ($_POST["email"]=="") {

            echo "Please enter the email".'<br>';
           }else{?>
            Email:<?php echo htmlspecialchars($_POST["email"]); ?><br>
            <?php } ?>
            <?php if ($_POST["content"]=="") {
             echo "Please enter the question".'<br>';
             }else{?>
             お問い合わせ内容<?php echo htmlspecialchars($_POST["content"]); ?><br>
            <?php } ?>
 

        </div> <!-- /.col-xs-12 -->
      </div> <!-- /.row -->
    </div> <!-- /.container -->
 
<!-- 12/8授業内容  -->
<form method="POST" action="thanks2.php">
  <input type="hidden" name="nickname" value="<?php echo $_POST["nickname"] ?>">
  <input type="hidden" name="email" value="<?php echo $_POST["email"] ?>">
 <input type="hidden" name="content" value="<?php echo $_POST["content"] ?>">
 
  <button  class="btn btn-custom btn-lg btn-block" type="button" a href="#" onclick="history.back();" style="width:250px; margin:0 auto;">戻る</button><br>


   <?php if (($_POST['nickname']!="")&& ($_POST['email']!="")&&($_POST['content']!=""))
 {?>
  <form method="POST" action="thanks2.php" class="col-xs-offset-4 col-xs-4">
    <input type="hidden" name="nickname" value="<?php echo $_POST["nickname"]; ?>">
    <input type="submit" value="OK"  class="btn btn-custom btn-lg btn-block col-xs-12" style="width:250px; margin:0 auto;">
  </form>
<?php } ?>
</form>
</section>
<!-- <?php include'copyright.php' ?> -->
</body>
</html>