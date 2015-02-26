#!/usr/bin/env php
<?php
// unsetenv.php for unsetenv in /home/mesrat_n/piscine/PHP/MicroShell/mesrat_n/MicroShell/funcs
// 
// Made by MESRATI Nada
// Login   <mesrat_n@etna-alternance.net>
// 
// Started on  Sat Oct 18 11:07:16 2014 MESRATI Nada
// Last update Sat Oct 18 11:07:18 2014 MESRATI Nada
//

function f_unsetenv($cmd)
{
  if (count($cmd) == 1)
    {
      if (isset($_ENV))
	if (array_key_exists($cmd[0], $_ENV))
	  unset($_ENV[$cmd[0]]);
    }
  else
    echo "unsetenv: Invalid arguments\n";
  return (1);
}
?>