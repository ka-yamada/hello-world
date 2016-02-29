<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Sample1 クリックされたボタンに応じて処理を分岐する</title>
</head>
<body>
<?php
if (isset($_POST["sub1"])) {

    // クリック後に処理待ちする
//    ini_set("output_buffering", 0);
    echo "しばらくお待ちください";
    for ($i = 0; $i < 5; $i++) {
        echo "→";
        sleep(2);
    }
    echo "<br>";

    $kbn = htmlspecialchars($_POST["sub1"], ENT_QUOTES, "UTF-8");
    switch ($kbn) {
        case "登録する": echo "登録処理"; break;
        case "変更する": echo "変更処理"; break;
        case "削除する": echo "削除処理"; break;
        default:  echo "エラー"; exit;
    }
}
?>
<?php
echo "<br>";
echo "<B>--------------------------------------------------</B>";
echo "<br>";
echo "Current Directory: "; echo dirname(__FILE__);
echo "<br>";
echo "<B>--------------------------------------------------</B>";
echo "<br>";
echo "<br>";
?>
<form method="POST" action="">
<input type="submit" value="登録する" name="sub1">　
<input type="submit" value="変更する" name="sub1">　
<input type="submit" value="削除する" name="sub1">　
</form>
</body>
</html>
