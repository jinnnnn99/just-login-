<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../html_css/styles.css">
    <title>オンラインBBQ</title>
</head>

<body>
    <nav>
        <ul>
            <li>オンラインBBQ</li>
            <li><a href="../html_css/top_page.html">ログアウト</a></li>
            <li><a href="../html_css/recipe.html">レシピ</a></li>
            <li><a href="calendar.php">スケジュール</a></li>
        </ul>
    </nav>
    <h1>今日のバーベキュー</h1>
    <?php foreach ($reservations as $reservation): ?>
        <div>
            <h2><?php echo htmlspecialchars($reservation['name']); ?></h2>
            <p>開始時間: <?php echo htmlspecialchars($reservation['time']); ?></p>
            <p>Zoom URL: <?php echo htmlspecialchars($reservation['zoom']); ?></p>
            <p>連絡先: <?php echo htmlspecialchars($reservation['contact']); ?></p>
        </div>
    <?php endforeach; ?>
</body>
</html>


<?php
// データベースに接続します
$dbconn = pg_connect("host=localhost dbname=goki user=goki password=hP5xpQoP") or die('Could not connect: ' . pg_last_error());

// 今日の日付を取得します
$today = date('Y-m-d');

// SQLクエリを準備します
$result = pg_prepare($dbconn, "my_query", 'SELECT * FROM reservations WHERE date = $1');

// パラメータをバインドし、SQLクエリを実行します
$result = pg_execute($dbconn, "my_query", array($today));

// 結果を取得します
$reservations = pg_fetch_all($result);
?>

