<?php

$host = "localhost";
$id = "root";
$pass = "dennis@1098";
$dbName = "outan";

$con = mysql_connect ($host,$id,$pass);
mysql_select_db($dbName);

$strSql = "select * from employee";

echo $strSql;
$res =mysql_query($strSql);
print <<<END
<table border = '1'>
<tr><td>ID</td><td>NAME</td></tr>
END;

while($row = mysql_fetch_array($res)) {
    print "<tr><td>";
    print $row['id'];
    print "</td><td>";
    print $row['name'];
    print "</td></tr>";
}
print "</table>";

//���ʃ��R�[�h������������J��
mysql_free_result($res);

//DB�ւ̐ڑ���ؒf
mysql_close($con);

?> 