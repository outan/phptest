<?php
    session_start();
?>

<html>
<head><title>PHP TEST</title></head>
<body>

<?php

    if (!isset($_SESSION["visited"])){
        print('����̖K��ł��B�Z�b�V�������J�n���܂��B');

        $_SESSION["visited"] = 1;
        $_SESSION["date"] = date('c');
    }else{
        $visited = $_SESSION["visited"];
        $visited++;

        print('�K��񐔂�'.$_SESSION["visited"].'�ł��B<br>');

        $_SESSION["visited"] = $visited;

        if (isset($_SESSION["date"])){
            print('�O��̖K�������'.$_SESSION["date"].'�ł��B<br>');
        }

        $_SESSION["date"] = date('c');
    }

?>

</body>
</html>