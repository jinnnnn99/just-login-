<?php
// POSTリクエストが送信されたかどうかを確認します
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // POSTデータから予約情報を取得します
    $date = $_POST['date'];
    $time = $_POST['time'];
    $zoom = $_POST['zoom']; // Zoom URLを取得します
    $name = $_POST['name'];
    $contact = $_POST['contact'];

    try {
        // PostgreSQLデータベースに接続します
        $dbconn = pg_connect("host=localhost dbname=goki user=goki password=hP5xpQoP") or die('Could not connect: ' . pg_last_error());

        // SQLクエリを準備します
        // 予約テーブルに新しいレコードを追加するINSERT文です
        $result = pg_prepare($dbconn, "my_query", 'INSERT INTO reservations (date, time, zoom, name, contact) VALUES ($1, $2, $3, $4, $5)');

        // パラメータをバインドし、SQLクエリを実行します
        $result = pg_execute($dbconn, "my_query", array($date, $time, $zoom, $name, $contact));

        // 予約が完了したことをユーザーに通知します
        // echo "予約が完了しました。";
        // homepage.phpにリダイレクトします
        header('Location: homepage.php');

    } catch (Exception $e) {
        // データベース接続やクエリ実行中にエラーが発生した場合、エラーメッセージを表示します
        echo "データベースエラー: " . $e->getMessage();
    }
} else {
    // リクエストがPOSTメソッドでない場合（つまり、フォームからの送信ではない場合）、"不正なアクセスです。"というメッセージを表示します
    echo "不正なアクセスです。";
}
?>