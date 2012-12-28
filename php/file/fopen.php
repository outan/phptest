<?php

// ファイル関数

$testFile = "test.dat";
$contents = "こんにちは！";

if (is_writable($testFile)) {

//    $fp = fopen($testFile, "a");    // オプション a, w, r
//    if(!$fp) {
    if (!$fp = fopen($testFile, "a")) {
        echo "オープンできません！";
        exit;
    }
} else {
    echo "NOT writable! - 存在しないかも知れません。";
}