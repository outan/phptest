<?php

// �t�@�C���֐�

$testFile = "test.dat";
$contents = "����ɂ��́I";

if (is_writable($testFile)) {
    echo "writable!";
} else {
    echo "NOT writable! - ���݂��Ȃ�����";
}

exit;

?>