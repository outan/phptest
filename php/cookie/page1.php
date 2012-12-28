<?php
    // クッキーを発行
    setcookie('outanvalue', 3208301984100500);
?>
<html>
    <body>
<?php
    $getcookie = $_COOKIE['outanvalue'];
    print "このページ1のクッキーの値は「".$getcookie."」です<br />";
?>
        <a href = "page2.php">ページ2へ</a>
    </body>
</html>

<?php
/*
page1.phpにアクセスした時に、setcookie関数によりクッキーがブラウザに書き出されます。
しかし、$_COOKIE['value']に値は入っていないので、「このページ1のクッキーの値は「」です」となります。
この時点では、ブラウザからWebサーバーにクッキー情報を送信する前です。
$_COOKIE['value']にはブラウザからWebサーバーに送られた情報が入るので、この時点では値が入っていません
*/
?>
