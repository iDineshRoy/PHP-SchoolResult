<?php
$db_name = "schooldb";
$mysql_username = "root";
$mysql_password = "";
$host = "127.0.0.1";
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