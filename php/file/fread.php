<?php

// �t�@�C���֐�

$testFile = "test.dat";

if (!$fp = fopen($testFile, "r")) {
    echo "File could not open!";
    exit;
}

$contents = fread($fp, filesize($testFile));

echo $contents;

fclose($fp);

exit;

?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <title>PHP�̗��K</title>
    </head>
    <body>
        <h1>PHP</h1>
        <p>����ɂ��́I</p>
    </body>
</html>