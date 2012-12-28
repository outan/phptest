<?php

// ファイル関数

$testFile = "test.dat";

// $contents = file_get_contents($testFile);
// echo $contents;

$contents = file($testFile);
var_dump($contents);

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