<?php
    //http://www.phpbook.jp/tutorial/cookie/index1.html
	//���̊֐��̓��[�U�[���N�b�L�[���󂯓��ꂽ���ǂ������������Ƃ͂��܂���B���[�U�[����cookie��ۑ����Ȃ��悤�ɐݒ肵�Ă��Asetcookie�̂����肿��true.
    $flag = setcookie("outanvisited", 1);
?>

<html>
<head><title>PHP TEST</title></head>
<body>

<?php
    if ($flag){
        print('<p>�N�b�L�[���������݂܂���</p>');
    }else{
        print('<p>�N�b�L�[�̏������݂Ɏ��s���܂���</p>');
    }
?>

</body>
</html>