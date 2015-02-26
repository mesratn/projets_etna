#!/usr/bin/env php
<?php
// pwd.php for pwd in /home/mesrat_n/piscine/PHP/MicroShell/mesrat_n/MicroShell/funcs
// 
// Made by MESRATI Nada
// Login   <mesrat_n@etna-alternance.net>
// 
// Started on  Sat Oct 18 11:06:43 2014 MESRATI Nada
// Last update Sat Oct 18 11:06:46 2014 MESRATI Nada
//

function f_pwd($cmd)
{
  if (!isset($_ENV["PWD"]))
    echo "PWD wasn't found in env.\n";
  else
    echo $_ENV["PWD"] . "\n";
  return (1);
}
?>