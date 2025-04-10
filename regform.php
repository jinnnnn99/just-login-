<html>
<head>
<title>registration</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">

</head>
<body>
<?php
if (isset($_POST['unf'])){$unf=$_POST['unf'];}
if (isset($_POST['pwf1'])){$pwf1=$_POST['pwf1'];}
if (isset($_POST['pwf2'])){$pwf2=$_POST['pwf2'];}
if ($pwf1 !== $pwf2){
  echo "<p>パスワードが一致しませんでした。</p>";
  echo "<a href=\"regform.php\">戻る</p>";
}

elseif (isset($unf)&& isset($pwf1)){
  $sql="select * from users where uname='". $unf . "';";
  $dbconn = pg_connect("host=localhost dbname=s2222068 user=s2222068 password=hP5xpQoP")
  or die('Could not connect: ' . pg_last_error());
  $result = pg_query($sql) or die('Query failed: ' . pg_last_error());
  if(pg_num_rows($result)==0){
    $npw=$pwf1;
    $npwh=password_hash($npw, PASSWORD_BCRYPT);
    $sql="insert into users(uname,password) values ('" .
      $unf . "','" . $npwh . "');";
    pg_query($sql) or die('Query failed: ' . pg_last_error());
    echo '<p>ユーザ登録を完了しました</p>';
    echo "<a href=\"../html,css/mypage.html\">ログインする</a>";
    #とうろく
  }
  else{
    echo "<p>エラーが起きました。</p>";
    echo "<a href=\"./homepage.php\">戻る</a>";
  }
}
else{echo 'error';}
  ?>
 </body>
</html>
