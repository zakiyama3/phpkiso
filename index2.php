<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="assets/css/main2.css">
  <link rel="stylesheet" type="text/css" href="assets/js/form.js">


  <title>お問い合わせ</title>
</head>
<body>
<section id="login">
    <div class="container">
      <div class="row">
          <div class="col-xs-12">
              <div class="form-wrap">
                <h1>お問い合わせ情報入力</h1>
                    <form role="form" action="check2.php" method="POST"  id="login-form" autocomplete="on">
                        <div class="form-group">
                            <label for="key" class="sr-only">Password</label>
                            <input type="nickname" name="nickname" class="form-control" placeholder="yourname">
                        </div>
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="somebody@example.com">
                        </div>
                        <div><textarea class="span3 col-xs-12" placeholder="Question" name="content" rows="5"></textarea><br></div>
       

                        <input action="check2.php" type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Submit" >

                    </form>
              
                    <hr>
              </div>
        </div> <!-- /.col-xs-12 -->
      </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>


<footer id="footer">
    <div class="container">
        <div class="row">

        </div>
    </div>
</footer>

<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/form.js"></script>
<!-- <?php include'copyright.php' ?> -->

</body>
</html>


<!-- <section id="login">
    <div class="container">
      <div class="row">
          <div class="col-xs-12">
              <div class="form-wrap">
                <h1>Log in with your email account</h1>
                    <form role="form" action="javascript:;" method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com">
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">Password</label>
                            <input type="password" name="key" id="key" class="form-control" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <span class="character-checkbox" onclick="showPassword()"></span>
                            <span class="label">Show password</span>
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Log in">
                    </form>
                    <a href="javascript:;" class="forget" data-toggle="modal" data-target=".forget-modal">Forgot your password?</a>
                    <hr>
              </div>
        </div> <! /.col-xs-12 -->
      <!-- </div> <! /.row -->
   <!--  </div> /.container -->
<!-- </section> --> 

<!-- <div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">×</span>
          <span class="sr-only">Close</span>
        </button>
        <h4 class="modal-title">Recovery password</h4>
      </div>
      <div class="modal-body">
        <p>Type your email account</p>
        <input type="email" name="recovery-email" id="recovery-email" class="form-control" autocomplete="off">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-custom">Recovery</button>
      </div>
    </div> <! /.modal-content -->
<!-- </div> /.modal-dialog
</div> <! /.modal --> 

<!-- <footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <p>Page © - 2014</p>
                <p>Powered by <strong><a href="http://www.facebook.com/tavo.qiqe.lucero" target="_blank">TavoQiqe</a></strong></p>
            </div>
        </div>
    </div>
</footer> -->