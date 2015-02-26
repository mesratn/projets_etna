<?php
// command_make.php for command_make in /home/mesrat_n/Rattrapage FDI-DPHP/mesrat_n
// 
// Made by MESRATI Nada
// Login   <mesrat_n@etna-alternance.net>
// 
// Started on  Tue Dec 16 13:18:53 2014 MESRATI Nada
// Last update Tue Dec 16 13:21:41 2014 MESRATI Nada
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