<?php
/* session_start();
if ($_SESSION['logged'] == true) { */

// $ip = $_SESSION['ipArduino'];
$ip = "127.0.0.1";
if (isset($_GET['p'])) $porta = $_GET['p']; else exit();
$porta = intval($porta);
if ($porta < 1001 or $porta > 1020) exit(); // Verifica che la porta cada nell'intervallo.


$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
socket_connect($socket, $ip, $porta);
$data = "temp".($porta);
socket_write($socket, $data, strlen($data));
$out = socket_read($socket, 32);
echo $out;
socket_close($socket);

// }


/*

set_time_limit(20);

*/


?>

