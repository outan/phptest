<?php
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header("WWW-Authenticate: Basic realm=\"My Realm\"");
    header("HTTP/1.0 401 Unauthorized");
    echo "���[�U�[���L�����Z���{�^�������������ɑ��M�����e�L�X�g\n";
    exit;
} else {
    echo "<p>����ɂ��́A{$_SERVER['PHP_AUTH_USER']} ����B</p>";
    echo "<p>���Ȃ��́A{$_SERVER['PHP_AUTH_PW']} ���p�X���[�h�Ƃ��ē��͂��܂����B</p>";
}
?>
