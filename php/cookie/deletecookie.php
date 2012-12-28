<?php
    //http://www.phpbook.jp/tutorial/cookie/index4.html
    //クッキーは必要なくなったら削除できます。不要なクッキーは出来る限り削除しておきましょう。
    //クッキーを削除するためには、有効期限を昔の時間に設定することで削除します。
    if (isset($_COOKIE["visited"])){
        $count = $_COOKIE["visited"] + 1;
    }else{
        $count = 1;
    }

    if ($count > 3)
        {setcookie("visited", $count, time() - 1800);}
		else{
        setcookie("visited", $count);
		print $count;
    }
?>

<html>