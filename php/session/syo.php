<?php
//セッションスタート
session_start();
?>
<html>
<head>
<title>商品登録</title>
</head>
<body>

<?php

//syoNmでセッションに値を格納
$syouhin = $_POST["syoNmTxt"];
$_SESSION["syoName"] = $syouhin;

print $syouhin ."を登録しました。<BR>";

?>
<a href="./chkSyo.php">登録商品の確認</a>
</body>
</html> 