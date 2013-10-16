<?php 

$server = "localhost";
$username = "schla_site";
$password = "openopen";
$db_name = "schlaraffia_members";



/*

Conntect to Database

*/

$db = mysql_connect($server,$username,$password) or DIE("Connection to database failed, perhaps the service is down !!");
mysql_select_db($db_name) or DIE("Database name not available !!");

?>