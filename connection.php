<?php

$connect = mysql_connect("localhost","root","") or die(mysql_error()); //'root' is login, '' is password

mysql_select_db("testdb", $connect) or die(mysql_error());

?>


