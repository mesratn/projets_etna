#!/usr/bin/env php
<?php
// ls.php for ls in /home/mesrat_n/piscine/PHP/MicroShell/mesrat_n/MicroShell/funcs
// 
// Made by MESRATI Nada
// Login   <mesrat_n@etna-alternance.net>
// 
// Started on  Sat Oct 18 11:06:21 2014 MESRATI Nada
// Last update Sat Oct 18 11:06:29 2014 MESRATI Nada
//


function check_dir($path)
{
  if (file_exists($path) == 0)
    {
      echo "ls: {$path}: No such file or directory\n";
      return (0);
    }
  if (is_dir($path) == 0)
    {  
      echo "ls: {$path}: Is not a directory\n";
      return (0);
    }
  if (is_readable($path) == 0)
    {
      echo "ls: {$path}: Permission denied\n";
      return (0);
    }
  return (1);
}

function f_prompt($dir, $path)
{
  $array = [];
  while (($entry = readdir($dir)))
    if ($entry[0] != ".")
      array_push($array, $entry);
  if (sort($array) == 0)
    echo "error: cannot sort array";
  foreach ($array as $key => $value)
    {
      $pwd = $path . "/" . $value;
      if (is_dir($pwd))
	echo "\033[34m{$value}/\033[0m\n";
      else
	{
	  if (is_link($pwd))
	    echo "\033[35m{$value}@\033[0m\n";
	  else
	    if (is_executable($pwd))
	      echo "\033[33m{$value}*\033[0m\n";
	    else
	      echo "{$value}\n";
	}
    }
}

function f_ls($cmd)
{
  if (count($cmd) == 0)
    $cmd[0] = $_ENV["PWD"];
  if (count($cmd) == 1)
    {
      if (check_dir($cmd[0]))
	if (($dir = opendir($cmd[0])))
	  {
	    f_prompt($dir, $cmd[0]);
	    closedir($dir);
	  }
   }
  else
    echo "ls: Invalid arguments\n";
  return (1);
}
?>