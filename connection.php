<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbName = 'jobportal';

//$host = 'localhost';
//$username = 'geekymock_admin';
//$password = '';
//$dbName = 'geekymock_jobportal';

$connection = mysqli_connect($host, $username, $password, $dbName);

if(!$connection){
    echo "Database connection problem.<br/>". 'Error: '.mysqli_error($connection).'<br/> Error No: '. mysqli_errorno($connection);
}