
<?php 
    // var_dump 変数の中身を表示する
// Undefined index: code　が表示されている場合
// POST送信されていない

// エラーが表示されないときはPOST送信されている


    // var_dump($_POST["code"]);


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
//SQLインジェクションを防ぐ！
// プリペアードステートメントを使う

// isset変数が存在しているかチェック
if ((isset($_POST['code'])) &&($_POST['code']!='')) {
// POST送信されている(?は置き換えたい値がある場所に記述)
  $sql = 'SELECT * FROM `survey` WHERE `code`=?;';

// 置き換えたいデータを配列の形で保存する
//$data[]と書くと、配列の末尾に追加される
  //$data = $_POST['code']; ->  $dataの中に1とか2とか記述された文字が格納される
  //$data[]=$_POST['code'];->$data[0]の中に記述された文字が格納される

$data[]=$_POST['code'];

// SQL文を実行する準備
// ->　アロー演算子
$stmt = $dbh->prepare($sql);

// SQL文を実行
$stmt->execute($data);
}else{
// POST送信されていない
//空文字が送られてきている
  $sql = 'SELECT * FROM `survey`;';
// SQL文を実行する準備
// ->　アロー演算子
$stmt = $dbh->prepare($sql);

// SQL文を実行
$stmt->execute();

}



// ステップ３　データベースの切断（オブジェクトの中身を空っぽにしている）
// $dbh=null;

 ?>


<!DOCTYPE html>
<html>
<head>
<title>お問い合わせ一覧</title>
<meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/css/main2.css">
<link rel="stylesheet" type="text/css" href="assets/js/form.js">

</head>
<body>
<h1>お問い合わせ一覧</h1>
<form action="" method="post">
  <p>検索したいcodeを入力してください。</p>
  <input type="text" name="code">
 <input type="submit" value="検索"> 
</form>

<div class="container">
  <div class="row">
    <div class="span5">
            <table class="table table-striped table-condensed">
                  
              <thead font >
                   <tr>
                      <th><font color="#1fa67b">Usercode</font> </th>
                      <th><font color="#1fa67b">Username</th>
                      <th><font color="#1fa67b">Email</th>
                      <th><font color="#1fa67b">content</th>                                     
                  </tr>
              </thead>   
              <tbody>
            <?php  
              while (1) {
                # code...
      // <!-- 一行取得 -->
              $record = $stmt->fetch(PDO::FETCH_ASSOC);

              if($record == false){
      // 処理を中断する
              break;
              }
;?>
                <tr>
                    <td><?php  echo $record["code"];?></td>
                    <td><?php echo $record["nickname"];?></td>
                    <td><?php echo $record["email"];?></td>
                    <td><?php echo $record["content"];?></span>
                    </td>                                       
                </tr>
<?php };?>                          
              </tbody>
            </table>
             <?php  
// ステップ３　データベースの切断、オブジェクトを空っぽにしている。
$dbn=null;

?>

             
            </div>
  </div>
</div>
<p>
  copuright erikoichinohe already reserved<br>
  著作権はErikoIchinoheが持っています。
</p>


</body>
</html>

<!-- <div class="container">
  <div class="row">
    <div class="span5">
            <table class="table table-striped table-condensed">
                  <thead>
                  <tr>
                      <th>Username</th>
                      <th>Date registered</th>
                      <th>Role</th>
                      <th>Status</th>                                          
                  </tr>
              </thead>   
              <tbody>
                <tr>
                    <td>Donna R. Folse</td>
                    <td>2012/05/06</td>
                    <td>Editor</td>
                    <td><span class="label label-success">Active</span>
                    </td>                                       
                </tr>
                <tr>
                    <td>Emily F. Burns</td>
                    <td>2011/12/01</td>
                    <td>Staff</td>
                    <td><span class="label label-important">Banned</span></td>                                       
                </tr>
                <tr>
                    <td>Andrew A. Stout</td>
                    <td>2010/08/21</td>
                    <td>User</td>
                    <td><span class="label">Inactive</span></td>                                        
                </tr>
                <tr>
                    <td>Mary M. Bryan</td>
                    <td>2009/04/11</td>
                    <td>Editor</td>
                    <td><span class="label label-warning">Pending</span></td>                                       
                </tr>
                <tr>
                    <td>Mary A. Lewis</td>
                    <td>2007/02/01</td>
                    <td>Staff</td>
                    <td><span class="label label-success">Active</span></td>                                        
                </tr>                                   
              </tbody>
            </table>
            </div>
  </div>
</div> -->