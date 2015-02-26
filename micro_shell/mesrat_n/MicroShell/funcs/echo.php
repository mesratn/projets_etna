#!/usr/bin/env php
<?php
// echo.php for echo in /home/mesrat_n/piscine/PHP/MicroShell/mesrat_n/MicroShell/funcs
// 
// Made by MESRATI Nada
// Login   <mesrat_n@etna-alternance.net>
// 
// Started on  Sat Oct 18 11:05:12 2014 MESRATI Nada
// Last update Sat Oct 18 15:33:47 2014 MESRATI Nada
//

function f_echo($cmd)
{
  if (isset($cmd[0]))
    foreach ($cmd as $key => $value)
      {
	$test = substr($value, 1);
	$value = str_replace("\"", "", $value);
	$value = str_replace('\'', '', $value);
	if (array_key_exists($test, $_ENV))
	  echo $_ENV[$test];
	else
	  echo $value . " ";
      }
  echo "\n";
  return (1);
}

?>