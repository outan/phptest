<?php

// 日付・時間の関数

echo time( );    // UNIXタイムスタンプ=1970/1/1 00:00:00からの通算秒数

echo date("Y-m-d H:i:s");

echo date("z", mktime(5,0,0,5,22,1984));

exit;

?>