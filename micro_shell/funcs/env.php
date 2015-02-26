#!/usr/bin/env php
<?php
// env.php for env in /home/mesrat_n/piscine/PHP/MicroShell/mesrat_n/MicroShell/funcs
// 
// Made by MESRATI Nada
// Login   <mesrat_n@etna-alternance.net>
// 
// Started on  Sat Oct 18 11:05:34 2014 MESRATI Nada
// Last update Sat Oct 18 11:05:38 2014 MESRATI Nada
//

function f_env($cmd)
{
  if (isset($_ENV))
    foreach($_ENV as $key => $value)
      echo "{$key}={$value}\n";
  return (1);
}
?>