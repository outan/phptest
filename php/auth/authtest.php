<?php
//http://www.phpbook.jp/tutorial/auth/index1.html

$user = 'admin';
$password = 'pass';

if (!isset($_SERVER['PHP_AUTH_USER'])){
    header('WWW-Authenticate: Basic realm="Private Page"');
    header('HTTP/1.0 401 Unauthorized');

    die('���̃y�[�W������ɂ̓��O�C�����K�v�ł�');
}else{
    if ($_SERVER['PHP_AUTH_USER'] != $user
        || $_SERVER['PHP_AUTH_PW'] != $password){

        header('WWW-Authenticate: Basic realm="Private Page"');
        header('HTTP/1.0 401 Unauthorized');
        die('ID or PWD���ԈႢ�܂����B');	
    }
}

?>

<html>
<head><title>PHP TEST</title></head>
<body>

<p>�悤�����A��������y�[�W��</p>

</body>
</html>