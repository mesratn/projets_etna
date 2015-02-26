#!/usr/bin/env php
<?php
// command_make.php for command_make in /home/mesrat_n/piscine/PHP/MicroShell/mesrat_n/MicroShell
// 
// Made by MESRATI Nada
// Login   <mesrat_n@etna-alternance.net>
// 
// Started on  Sat Oct 18 10:58:33 2014 MESRATI Nada
// Last update Sat Oct 18 10:58:42 2014 MESRATI Nada
//

function command_make()
{
  if (!($stdin = fgets(STDIN)))
    exit ("fgets: returned an error\n");
  $cmd = trim(preg_replace('/\t/', ' ', $stdin));
  $cmd = explode(' ', $cmd);
  foreach ($cmd as $key => $value)
    {
      if ($value == NULL)
	unset($cmd[$key]);
    }
  return ($cmd);
}

?>