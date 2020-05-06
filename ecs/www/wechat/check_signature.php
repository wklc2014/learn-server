<?php
$token = 'wangkun30749';
$timestamp = $_GET['timestamp'];
$nonce = $_GET['nonce'];
$signature = $_GET['signature'];
$echostr = $_GET['echostr'];

$temp_array = array($token, $timestamp, $nonce);
sort($temp_array);
$temp_string = sha1(implode('', $temp_array));

if ($temp_string == $signature) {
  echo $echostr;
  exit;
}
