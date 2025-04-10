<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $ingredients = $_POST['ingredients'];
    $steps = $_POST['steps'];

    // ここでデータベースに接続し、レシピを保存します
    // ...

    echo "レシピが投稿されました。";
} else {
    echo "不正なアクセスです。";
}
?>