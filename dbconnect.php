<?php 
// 開発環境用
  $dsn = 'mysql:dbname=oneline_bbs;host=localhost';

  // $user　データベースに接続用ユーザー名
  // $password データベース接続用ユーザーのパスワード
  $user = 'root';
  $password='';

// 本番環境用　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　↓↓サーバ
  // $dsn = 'mysql:dbname=LAA0918699-phpkiso;host=mysql103.phy.lolipop.lan';

  // // $user　データベースに接続用ユーザー名
  // // $password データベース接続用ユーザーのパスワード
  // $user = 'LAA0918699';
  // $password='yama0044';


  //データベース接続オブジェクト
  $dbh = new PDO($dsn, $user, $password);

  // 今から実行するSQL文を文字コードutf8で送るという設定（文字化け防止）
  $dbh->query('SET NAMES utf8');


 ?>
