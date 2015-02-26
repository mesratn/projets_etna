y#!/usr/bin/env php
<?php
// setenv.php for setenv in /home/mesrat_n/piscine/PHP/MicroShell/mesrat_n/MicroShell/funcs
// 
// Made by MESRATI Nada
// Login   <mesrat_n@etna-alternance.net>
// 
// Started on  Sat Oct 18 11:06:59 2014 MESRATI Nada
// Last update Sat Oct 18 15:37:08 2014 MESRATI Nada
//

function f_setenv($cmd)
{
  if (count($cmd) == 2)
    $_ENV[$cmd[0]] = $cmd[1];
  else
    echo "setenv: Invalid arguments\n";
  return (1);
}
?>