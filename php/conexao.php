<?php

/* You should enable error reporting for mysqli before attempting to make a connection */
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$localhost = 'localhost';
$user = 'root';
$password = '123456';
$db = 'roommatch';


$mysqli = mysqli_connect($localhost, $user, $password, $db);

/* Set the desired charset after establishing a connection */
mysqli_set_charset($mysqli, 'utf8mb4')

/*printf("Success... %s\n", mysqli_get_host_info($mysqli));*/


?>