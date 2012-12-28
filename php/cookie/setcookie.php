<?php
    //http://www.phpbook.jp/tutorial/cookie/index1.html
	//この関数はユーザーがクッキーを受け入れたかどうかを示すことはしません。ユーザー側はcookieを保存しないように設定しても、setcookieのかえりちはtrue.
    $flag = setcookie("outanvisited", 1);
?>

<html>
<head><title>PHP TEST</title></head>
<body>

<?php
    if ($flag){
        print('<p>クッキーを書き込みました</p>');
    }else{
        print('<p>クッキーの書き込みに失敗しました</p>');
    }
?>

</body>
</html>