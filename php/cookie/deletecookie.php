<?php
    //http://www.phpbook.jp/tutorial/cookie/index4.html
    //�N�b�L�[�͕K�v�Ȃ��Ȃ�����폜�ł��܂��B�s�v�ȃN�b�L�[�͏o�������폜���Ă����܂��傤�B
    //�N�b�L�[���폜���邽�߂ɂ́A�L��������̂̎��Ԃɐݒ肷�邱�Ƃō폜���܂��B
    if (isset($_COOKIE["visited"])){
        $count = $_COOKIE["visited"] + 1;
    }else{
        $count = 1;
    }

    if ($count > 3)
        {setcookie("visited", $count, time() - 1800);}
		else{
        setcookie("visited", $count);
		print $count;
    }
?>

<html>