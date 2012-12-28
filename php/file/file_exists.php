<?php

// ファイル関数

$testFile = "test.dat";

if(file_exists($testFile)) {
    echo "存在します！";
} else {
    echo "ありません！";
}

exit;

?>