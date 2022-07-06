<?php

/* You should enable error reporting for mysqli before attempting to make a connection */
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$localhost = 'localhost';
$user = 'id18773164_rommmatchadm';
$password = 'v4oAY>(E+MuL0t!%';
$db = 'id18773164_roommatch';


$mysqli = mysqli_connect($localhost, $user, $password, $db);

/* Set the desired charset after establishing a connection */
mysqli_set_charset($mysqli, 'utf8mb4')

/*printf("Success... %s\n", mysqli_get_host_info($mysqli));*/


?>