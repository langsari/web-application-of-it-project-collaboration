<?php
$mysql_hostname = "localhost";
$mysql_user = "itproject";
$mysql_password = "qydenygeq";
$mysql_database = "projects_itproject";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");

?>