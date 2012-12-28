<?php

// データベース関連

// $conn = mysql_connect("localhost", "dbuser001", "dbpwd0001");
// if (!$conn) {
//     echo "can't connect to DB: ". mysql_error( );
//     exit;
// }

mysql_connect("localhost", "root", "dennis@1098") or die("can't connect to DB: ". mysql_error( ));

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