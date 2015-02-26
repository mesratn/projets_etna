#!/usr/bin/env php
<?php
// microshell.php for mircoshell in /home/mesrat_n/piscine/PHP/MicroShell/mesrat_n/MicroShell
// 
// Made by MESRATI Nada
// Login   <mesrat_n@etna-alternance.net>
// 
// Started on  Sat Oct 18 11:01:57 2014 MESRATI Nada
// Last update Sat Oct 18 15:40:08 2014 MESRATI Nada
//

include_once("include.php");

define("FUNC", "f_");
define("CLEAR", "\033[H\033[2J");

echo CLEAR;
$ret = 1;
manage_env();
while ($ret)
  {
    echo "\033[31m" . $_ENV["USER"] . "@: \033[33m" .
      $_ENV["PWD"] . "\033[0m\n$> ";
    $cmd = command_make();
    if (isset($cmd[0]))
      {
	$func = FUNC . $cmd[0];
	if (function_exists($func))
	  {
	    array_shift($cmd);
	    $ret = $func($cmd);
	  }
      }
    else
      echo $cmd[0] . ": Command not found\n";
  }

?>