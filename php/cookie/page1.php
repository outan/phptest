<?php
    // �N�b�L�[�𔭍s
    setcookie('outanvalue', 3208301984100500);
?>
<html>
    <body>
<?php
    $getcookie = $_COOKIE['outanvalue'];
    print "���̃y�[�W1�̃N�b�L�[�̒l�́u".$getcookie."�v�ł�<br />";
?>
        <a href = "page2.php">�y�[�W2��</a>
    </body>
</html>

<?php
/*
page1.php�ɃA�N�Z�X�������ɁAsetcookie�֐��ɂ��N�b�L�[���u���E�U�ɏ����o����܂��B
�������A$_COOKIE['value']�ɒl�͓����Ă��Ȃ��̂ŁA�u���̃y�[�W1�̃N�b�L�[�̒l�́u�v�ł��v�ƂȂ�܂��B
���̎��_�ł́A�u���E�U����Web�T�[�o�[�ɃN�b�L�[���𑗐M����O�ł��B
$_COOKIE['value']�ɂ̓u���E�U����Web�T�[�o�[�ɑ���ꂽ��񂪓���̂ŁA���̎��_�ł͒l�������Ă��܂���
*/
?>
