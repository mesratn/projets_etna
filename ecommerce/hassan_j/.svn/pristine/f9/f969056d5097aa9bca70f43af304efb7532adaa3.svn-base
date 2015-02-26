<?php
session_start();
$doc = file_get_contents("./user/logs.json");
$array = json_decode($doc, true);
echo $_GET['article'];
if (!empty($array[0][$_SESSION['user']]))
  {
    if (!empty($_GET['article']))
      $array[0][$_SESSION['user']]['panier'][$_GET['article']] += 1;
    elseif (!empty($array[0][$_SESSION['user']]['panier'][$_POST['article']]))
      $array[0][$_SESSION['user']]['panier'][$_POST['article']] += 1;
    else
      $array[0][$_SESSION['user']]['panier'][$_POST['article']] = 1;
  }
$str = fopen('./user/logs.json', 'w');
$encode = json_encode($array);
fwrite($str, $encode);
fclose($str);
header("Location: {$_SERVER['HTTP_REFERER']}");
?>
