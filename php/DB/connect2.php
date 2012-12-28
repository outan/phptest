<?php
mysql_connect("localhost", "root", "dennis@1098") or
    die("Could not connect: " . mysql_error());
mysql_select_db("outan");

$result = mysql_query("SELECT id, name FROM employee");

while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    printf("ID: %s  Name: %s", $row["id"], $row["name"]);
}

mysql_free_result($result);
?> 
