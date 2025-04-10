<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>BBQ開催スケジュール</title>
</head>
<body>
    <h1>BBQ開催スケジュール</h1>
    <button onclick='location.href="../html_css/held.html"'>開催</button>
    <?php
    $year = isset($_GET['year']) ? $_GET['year'] : date('Y');
    $month = isset($_GET['month']) ? $_GET['month'] : date('m');
    $daysInMonth = date('t', mktime(0, 0, 0, $month, 1, $year));
    $firstDayOfMonth = date('N', mktime(0, 0, 0, $month, 1, $year));

    // 前月と次月の年月を計算
    $prevMonth = $month - 1;
    $nextMonth = $month + 1;
    $prevYear = $nextYear = $year;
    if ($prevMonth < 1) {
        $prevMonth = 12;
        $prevYear--;
    }
    if ($nextMonth > 12) {
        $nextMonth = 1;
        $nextYear++;
    }

    // 月と年を表示
    echo "<h2>";
    echo "<a href='?year=$prevYear&month=$prevMonth'>&lt;前月</a> ";
    echo $year . "年 " . $month . "月 ";
    echo "<a href='?year=$nextYear&month=$nextMonth'>次月&gt;</a>";
    echo "</h2>";

    echo "<table border='1'>";
    echo "<tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr>";

    $cellCount = $firstDayOfMonth + $daysInMonth;
    for ($i = 1; $i <= $cellCount; $i++) {
        if ($i % 7 == 1) {
            echo "<tr>";
        }
        if ($i < $firstDayOfMonth) {
            echo "<td></td>";
        } else {
            $day = $i - $firstDayOfMonth + 1;
            echo "<td>" . $day . "<br><button onclick='alert(\"" . $year . "/" . $month . "/" . $day . "に参加します\")'>参加</button></td>";           
        }
        if ($i % 7 == 0) {
            echo "</tr>";
        }
    }
    echo "</table>";
    ?>
    <a href="homepage.php">トップページ</a>
</body>
</html>