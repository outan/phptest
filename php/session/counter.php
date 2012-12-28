  <?php
        session_save_path( );
        session_start();
        echo "現在のセッションデータは". session_save_path() ."に保存されています。";

        if( isset( $_SESSION[ "countoutan" ] ) ) {

            $_SESSION[ "countoutan" ]++;

        } else {

            $_SESSION[ "countoutan" ] = 1;
        }
    ?>
	
    <html>
    <body>
    あなたは
    <?php echo htmlspecialchars( $_SESSION[ "countoutan" ] ) ?>
    回目の訪問です
    <a href="<?php echo htmlspecialchars( $_SERVER[ "PHP_SELF" ] ) ?>">ページを更新する</a>
    </body>
    </html>
    