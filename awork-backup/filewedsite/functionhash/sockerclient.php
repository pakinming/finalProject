<?php
include 'hash.php';
$host    = "127.0.0.1";
$port    = 9002;
$message = hashDirectory('C:\xampp\htdocs');
echo "send data";
// echo hashDirectory('C:\xampp\htdocs')."ได้ทำการส่ง Hash :".$message;
// create socket
$socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");
// connect to server
$result = socket_connect($socket, $host, $port) or die("Could not connect to server\n");
// send string to server
socket_write($socket, $message, strlen($message)) or die("Could not send data to server\n");

  // get server response
  // $result = socket_read ($socket, 1024) or die("Could not read server response\n");
  // echo "\n Reply From Server  :".$result."\n";
  // close socket
  socket_close($socket);




 ?>
