    <?php
        session_save_path();
        session_start();
		
        echo "���݂̃Z�b�V�������� ". session_name() ." �ł��B";
        echo "���݂̃Z�b�V�����f�[�^��". session_save_path() ."�ɕۑ�����Ă��܂��B";
	
    ?>
    