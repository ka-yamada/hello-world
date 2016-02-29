<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Sample1 クリックされたボタンに応じて処理を分岐する</title>
</head>
<body>
<?php
if (isset($_POST["sub1"])) {

    echo "現在時刻は";
    echo date(" Y年m月d日 H時i分s(u)秒", time());
    echo "です";
    echo "<br>";
    
    // クリック後に処理待ちする
//    ini_set("output_buffering", 0);

    // 画面をクリア
//    ncurses_clear(); 
/*
    echo "しばらくお待ちください";
    for ($i = 0; $i < 5; $i++) {
        echo "→";
        sleep(2);
    }
    echo "<br>";
*/

    // ランダムで大吉、凶を表示させる
    $num = rand(0, 1);
    $kbn = htmlspecialchars($_POST["sub1"], ENT_QUOTES, "UTF-8");
    switch ($kbn) {
        case "登録する": echo "登録処理"; break;
        case "変更する": echo "変更処理"; break;
        case "削除する": echo "削除処理"; break;
        default:  echo "エラー"; exit;
    }
    if ($num == 0) {
        echo "（大吉）";
    } else {
        echo "（凶）";
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
