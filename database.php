<?php
//creating connection
$db_host = 'localhost';
$db_name = 'PG_project';
$db_user = 'root';
$db_password = 'password';

//create mysqli object
$con=new mysqli($db_host,$db_user,$db_password,$db_name);

//error handle
if(!$con)
{
    printf("connect failed : %s \n",$mysqli->connect_error);
    exit();
}
?>
