<?php

// 文字列関数
// 日本語

$s = "こんにちは";

echo mb_strlen($s, "UTF-8");//だめぽい。

//echo mb_substr($s,1);

exit;

?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <title>PHPの練習</title>
    </head>
    <body>
        <h1>PHP</h1>
        <p>こんにちは！</p>
    </body>
</html>