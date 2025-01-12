<?php

$host = '0.0.0.0';  // Listen on all interfaces
$port = 12345;

$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
if ($socket === false) {
    die("Unable to create socket: " . socket_strerror(socket_last_error()));
}

socket_bind($socket, $host, $port) or die("Unable to bind socket: " . socket_strerror(socket_last_error($socket)));

socket_listen($socket);
echo "Server is listening on $host:$port\n";

while (true) {

    $client = socket_accept($socket);
    if ($client === false) {
        echo "Unable to accept connection: " . socket_strerror(socket_last_error($socket)) . "\n";
        continue;
    }
    
    $message = "This is your flag:  CTF_2_5_{!_s0ck3t_1s_str4ng3_!}";
    socket_write($client, $message, strlen($message));
    
    socket_close($client);
}

socket_close($socket);

?>
