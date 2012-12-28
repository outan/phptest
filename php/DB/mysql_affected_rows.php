<?php

// データベース関連

mysql_connect("localhost", "root", "dennis@1098") or die("can't connect to DB: ". mysql_error( ));

mysql_select_db("outan") or die("can't select DB: ". mysql_error( ));

$rs = mysql_query("update users set password = 'abc'");

if (!$rs) {
    echo "can't run query". mysql_error( );
    exit;
}

printf("%d件が更新されました！", mysql_affected_rows( ));

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