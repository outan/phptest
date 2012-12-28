<?php

// データベース関連

mysql_connect("localhost", "root", "dennis@1098") or die("can't connect to DB: ". mysql_error( ));

mysql_select_db("outan") or die("can't select DB: ". mysql_error( ));

$rs = mysql_query("select * from employee");

if (!$rs) {
    echo "can't run query". mysql_error( );
    exit;
}

if (mysql_numrows($rs)) {
    while ($row = mysql_fetch_assoc($rs)) {
        var_dump($row);
    }
} else {
    echo "nothing returned";
}

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