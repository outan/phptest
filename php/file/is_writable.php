<?php

// ファイル関数

$testFile = "test.dat";
$contents = "こんにちは！";

if (is_writable($testFile)) {
    echo "writable!";
} else {
    echo "NOT writable! - 存在しないかも";
}

exit;

?>