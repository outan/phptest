<?php

// �t�@�C���֐�

$testFile = "test.dat";
$contents = "����ɂ��́I";

if (is_writable($testFile)) {

    if (!$fp = fopen($testFile, "a")) {
        echo "�I�[�v���ł��܂���I";
        exit;
    }

    if (fwrite($fp, $contents) === false) {
        echo "�������ݎ��s�I";
        exit;
    }
    
    echo "�������ݐ����I";

    fclose($fp);

} else {
    echo "NOT writable! - ���݂��Ȃ�����";
}

exit;

?>