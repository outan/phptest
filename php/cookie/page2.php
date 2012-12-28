<html>
    <body>
<?php
    $getcookie = $_COOKIE['outanvalue'];
    print "このページ2のクッキーの値は「".$getcookie."」です<br />";
?>
        <a href = "page1.php">ページ1へ戻る</a>
    </body>
</html>

<?php
/*
「ページ2へ」というリンクをクリックして、page2.phpに遷移してみましょう。
page2.phpにアクセスする事により、Webサーバーにクッキー情報が送信され、$_COOKIE['value']に値が入ります。
*/
?>