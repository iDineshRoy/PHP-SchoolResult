<?php
$db_name = "srnsbsedu_school";
$mysql_username = "srnsbsedu_admin";
$mysql_password = "rising nepal";
$host = "localhost";
$conn = mysqli_connect($host,$mysql_username, $mysql_password, $db_name);
if($conn)
{
	echo "";
}
else
{
	echo "Error occured!";
}
?>