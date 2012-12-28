<?php

// ファイル関数

$testFile = "test.dat";

if (!$fp = fopen($testFile, "r")) {
    echo "File could not open!";
    exit;
}

$contents = fread($fp, filesize($testFile));

echo $contents;

fclose($fp);

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