<?php
//セッションスタート
session_start();
?>
<html>
<head>
<title>登録商品チェック</title>
</head>
<body>

<?php

print $_SESSION["syoName"] . "が登録されています。<br>";
print session_id();

?>


<a href="./index.php">戻る</a>

</body>
</html> 

