<?php
// �K��񐔃J�E���g�p�̕ϐ�$visit�ɃJ�E���g�l���i�[
$expire = time()+5; //5�b���ɃA�N�Z�X���Ȃ��΂��́A�l�̓N���A�����B
if( isset($_COOKIE['visitcount']) ){ // �N�b�L�[������΂��̒l���J�E���g�l
  $visit = $_COOKIE['visitcount'];
} else{ // �N�b�L�[	���Ȃ���Ώ���K��Ƃ��ăJ�E���g�l��0
  $visit = 0;
}

$visit++; // �J�E���g�l+1
setcookie('visitcount', $visit,$expire); // �L�������Ȃ��̃N�b�L�[��ݒ�
print $visit; //�Ⴄ�u���E�U�ł͈Ⴄ�l�ɂȂ�B�u���E�U���ƂɎ��ʁB�u���E�U�͂���cookie�̒l�̓��[�J���t�@�C���ɕۑ��H
?> 