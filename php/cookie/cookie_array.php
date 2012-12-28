<?php
    //http://www.phpbook.jp/tutorial/cookie/index5.html
    //Firefoxでテストしたところは、以下のやり方も三つのcookieを使ったようです。効果がないようです。
    setcookie ("buy[1]", "Televison");
    setcookie ("buy[2]", "Video");
    setcookie ("buy[3]", "Audio");
?>
<html>
<head><title>PHP TEST</title></head>
<body>

<?php
    if (isset($_COOKIE["buy"])){
        $val = $_COOKIE["buy"];
        print('<p>');
        print('購入したものは下記の通りです<br>');
        print($val[1].'<br>');
        print($val[2].'<br>');
        print($val[3]);
        print('</p>');
    }else{
        print('<p>値をセットしました</p>');
    }

?>

</body>
</html>