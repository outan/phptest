<?php

// ファイル関数

$testFile = "test.dat";
$contents = "こんにちは！";

if (is_writable($testFile)) {

    if (!$fp = fopen($testFile, "a")) {
        echo "オープンできません！";
        exit;
    }

    if (fwrite($fp, $contents) === false) {
        echo "書き込み失敗！";
        exit;
    }
    
    echo "書き込み成功！";

    fclose($fp);

} else {
    echo "NOT writable! - 存在しないかも";
}

exit;

?>