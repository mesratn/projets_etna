#!/usr/bin/env php
<?php
// cat.php for cat in /home/mesrat_n/piscine/PHP/MicroShell/mesrat_n/MicroShell/funcs
// 
// Made by MESRATI Nada
// Login   <mesrat_n@etna-alternance.net>
// 
// Started on  Sat Oct 18 11:04:35 2014 MESRATI Nada
// Last update Sat Oct 18 15:30:57 2014 MESRATI Nada
//

function check_file($file)
{
  if (!file_exists($file))
    {
      echo "cat: {$file}: No such file or directory\n";
      return (0);
    }
  if (is_dir($file))
    {  
      echo "cat: {$file}: Is a directory\n";
      return (0);
    }
  if (!is_readable($file))
    {
      echo "cat: {$file}: Permission denied\n";
      return (0);
    }
  return (1);
}

function read_file($file)
{
  if (!($f = fopen($file, "r")))
    echo "cat: {$file}: Cannot open file\n";
  if (!($lines = fread($f, filesize($file))))
    echo "cat: {$file}: Error while reading file\n";
  echo $lines;
  fclose($f);  
}

function f_cat($cmd)
{
  if (isset($cmd[0]))
    {
      foreach($cmd as $key => $value)
	if (check_file($value))
	  {
	    read_file($value);
	    echo "\n\n";
	  }
    }
  else
    echo "cat: Invalid arguments\n";
  return (1);
}
?>