<html>
<head>
  <title>
    login form
  </title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
  <title>新規登録</title>
  <link href="https://unpkg.com/sanitize.css" rel="stylesheet"/>
  <link rel="stylesheet" href="./css/login.css" type="text/css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
</head>
<body>
<form method="POST" action="homepage.php" method="post">



<div class="form-wrapper">
  <h1>ログイン</h1>
    <div class="form-item">
      <label for="email"></label>
      <input type="text" name="unf" required="required" placeholder="ユーザーネーム"></input>
    </div>
    <div class="form-item">
      <label for="password"></label>
      <input type="password" name="pwf" required="required" placeholder="パスワード"></input>
    </div>
    <div class="button-panel">
      <input type="submit" class="button" title="Sign In" value="ログイン"></input>
    </div>
  </form>
  <div class="form-footer">
    <p>*はじめての方は<a href="regist.php">こちら</a>から登録してください。</p>


  </div>
</div>
</body>
</html>
