<?php
//�Z�b�V�����X�^�[�g
session_start();
?>
<html>
<head>
<title>���i�o�^</title>
</head>
<body>

<?php

//syoNm�ŃZ�b�V�����ɒl���i�[
$syouhin = $_POST["syoNmTxt"];
$_SESSION["syoName"] = $syouhin;

print $syouhin ."��o�^���܂����B<BR>";

?>
<a href="./chkSyo.php">�o�^���i�̊m�F</a>
</body>
</html> 