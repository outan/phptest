<?php
    //http://www.phpbook.jp/tutorial/cookie/index5.html
    //Firefox�Ńe�X�g�����Ƃ���́A�ȉ��̂������O��cookie���g�����悤�ł��B���ʂ��Ȃ��悤�ł��B
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
        print('�w���������͉̂��L�̒ʂ�ł�<br>');
        print($val[1].'<br>');
        print($val[2].'<br>');
        print($val[3]);
        print('</p>');
    }else{
        print('<p>�l���Z�b�g���܂���</p>');
    }

?>

</body>
</html>