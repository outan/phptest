<?php
$sales = array("tanaka"=>100, "suzuki"=>200, "yazaki"=>50);

echo $sales["suzuki"];
//echo $sales;
var_dump($sales);
$a = array("tanaka", "sasaki", "kimura", "yoshida", "uchida");

echo count($a);
sort($a);

foreach ($a as $key=>$value) {
    printf("a[%d] => %s ...", $key, $value);
}

// echo implode("|", $a);

$b = "a, b, c, d, e, f, g";

$c = explode(", ", $b);
var_dump($c);

exit;

// 連想配列

$sales = array(
    2000=>array("tanaka"=>100, "suzuki"=>150, "yazaki"=>50),
    2001=>array("tanaka"=>150, "suzuki"=>170),
    2002=>array("tanaka"=>200, "suzuki"=>80, "taira"=>500),
);

echo $sales;
echo $sales[2000]["tanaka"];

// var_dump($sales);

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