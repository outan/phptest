<?php
    session_start();
	//http://www.phpbook.jp/tutorial/session/index1.html
?>

<html>
<head><title>PHP TEST</title></head>
<body>

<?php

    if (!isset($_COOKIE["PHPSESSID"])){
        print('����̖K��ł��B�Z�b�V�������J�n���܂��B');
    }else{
        print('�Z�b�V�����͊J�n���Ă��܂��B<br>');
        print('�Z�b�V����ID�� '.$_COOKIE["PHPSESSID"].' �ł��B');
    }

?>

</body>
</html>