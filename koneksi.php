
<?php
error_reporting(1);
$hostmysql = 'localhost';
$user = 'root';
$password = 'Terong81';
$database = 'db_login';
mysql_connect($hostmysql, $user, $password);

$link = mysql_select_db($database);

if (!$link) {
    echo 'Could not connect';
}else{
echo 'Connected successfully';
}
?>
