  <?php
        session_save_path( );
        session_start();
        echo "���݂̃Z�b�V�����f�[�^��". session_save_path() ."�ɕۑ�����Ă��܂��B";

        if( isset( $_SESSION[ "countoutan" ] ) ) {

            $_SESSION[ "countoutan" ]++;

        } else {

            $_SESSION[ "countoutan" ] = 1;
        }
    ?>
	
    <html>
    <body>
    ���Ȃ���
    <?php echo htmlspecialchars( $_SESSION[ "countoutan" ] ) ?>
    ��ڂ̖K��ł�
    <a href="<?php echo htmlspecialchars( $_SERVER[ "PHP_SELF" ] ) ?>">�y�[�W���X�V����</a>
    </body>
    </html>
    