<?php

$host = '127.0.0.1'; 
$port = 12345;         

$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
if ($socket === false) {
    die("Unable to create socket: " . socket_strerror(socket_last_error()));
}

$result = socket_connect($socket, $host, $port);
if ($result === false) {
    die("Unable to connect to server: " . socket_strerror(socket_last_error($socket)));
}

$data = socket_read($socket, 1024, PHP_NORMAL_READ);
echo "Flag received: " . $data . "\n";

socket_close($socket);

?>
