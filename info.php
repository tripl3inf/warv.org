<?php //phpinfo(); 

$link = mysql_connect('localhost', 'tripl3inf', 'tripl3inf');
if (!$link)
{
die('Could not connect the database: ' . mysql_error());
}
echo 'Database Connected successfully';
mysql_close($link);

?>

