<?php
$conn = mysql_connect("localhost","yakoobh","");
mysql_select_db("c9");
session_start();


if (false===$conn)
{
    die("database faild");
}
else
{
    echo 'database  connected';
}
?>