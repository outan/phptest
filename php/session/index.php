<?php
//セッションスタート
session_start();
?>

<html>
<head>
<title>商品登録2</title>
</head>
<body>
<p>登録した値は：</p>
<?php
if(isset($_SESSION["syoName"]))
{
echo $_SESSION["syoName"];
}
?>

<form method="post" action="syo.php">
    <input type="text" name="syoNmTxt">
    <input type="submit" value="登録">
</form>

</body>
</html> 