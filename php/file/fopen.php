<?php

// �t�@�C���֐�

$testFile = "test.dat";
$contents = "����ɂ��́I";

if (is_writable($testFile)) {

//    $fp = fopen($testFile, "a");    // �I�v�V���� a, w, r
//    if(!$fp) {
    if (!$fp = fopen($testFile, "a")) {
        echo "�I�[�v���ł��܂���I";
        exit;
    }
} else {
    echo "NOT writable! - ���݂��Ȃ������m��܂���B";
}