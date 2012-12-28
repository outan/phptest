    <?php
        session_save_path();
        session_start();
		
        echo "現在のセッション名は ". session_name() ." です。";
        echo "現在のセッションデータは". session_save_path() ."に保存されています。";
	
    ?>
    