<?php
//�Z�b�V�����X�^�[�g
session_start();
?>

<html>
<head>
<title>���i�o�^2</title>
</head>
<body>
<p>�o�^�����l�́F</p>
<?php
if(isset($_SESSION["syoName"]))
{
echo $_SESSION["syoName"];
}
?>

<form method="post" action="syo.php">
    <input type="text" name="syoNmTxt">
    <input type="submit" value="�o�^">
</form>

</body>
</html> 