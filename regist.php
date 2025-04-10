<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <title>新規登録</title>
    <link href="https://unpkg.com/sanitize.css" rel="stylesheet"/>
    <link rel="stylesheet" href="./css/regform.css" type="text/css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>
<body>
  <div class="form-wrapper">
    <h1>新規登録</h1>
    <form method="POST" action="regform.php">
      <div class="form-item"><input type="text" name="unf" placeholder="ユーザー名"><br>
        <div class="form-item"><input type="text" name="pwf1" placeholder="パスワード"><br>
          <div class="form-item"><input type="text" name="pwf2" placeholder="パスワード（確認）"><br>
          <div class="button-panel">
            <input type="submit" class="button" title="Sign In" value="登録" href="login.php"></input>
          </div>
        </form>
      </div>
      <div class="form-footer">
        <p>すでにアカウントをお持ちですか？<a href="login.php">ログイン</a></p>
      </div>
  </body>
  </html>

</form>
</body>
</html>