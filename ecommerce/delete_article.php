<?php
session_start();
$json = file_get_contents('./user/logs.json');
$array = json_decode($json, true);
if (empty($_GET['article']) || $_GET['page'] == 'Cart')
  include_once('panier.php');
else
  $array[0][$_SESSION['user']]['panier'][$_GET['article']] -= 1;
$str = fopen('./user/logs.json', 'w');
fwrite($str, json_encode($array));
fclose($str);
echo '<meta http-equiv="refresh" content="0; URL=index.php?page=Cart">';
?>