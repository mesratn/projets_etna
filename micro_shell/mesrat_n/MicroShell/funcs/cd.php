#!/usr/bin/env php
<?php
// cd.php for cd in /home/mesrat_n/piscine/PHP/MicroShell/mesrat_n/MicroShell
// 
// Made by MESRATI Nada
// Login   <mesrat_n@etna-alternance.net>
// 
// Started on  Sat Oct 18 15:15:21 2014 MESRATI Nada
// Last update Sat Oct 18 15:19:22 2014 MESRATI Nada
//

function test_file($path)
{
  if (!file_exists($path))
    {
      echo "cd: {$path}: No such file or directory\n";
      return (0);
    }
  if (!is_dir($path))
    {
      echo "cd: {$path}: Is not a directory\n";
      return (0);
    }
  if (!is_readable($path))
    {
      echo "cd: {$path}: Permission denied\n";
      return (0);
    }
  return ($path);
}

function swap_old_pwd($new_pwd)
{
  if ($new_pwd)
    {
      if (test_file($new_pwd))
        {
	  $_ENV["OLDPWD"] = $_ENV["PWD"];      
	  if (!chdir($new_pwd))
            echo "error: chdir returned an error\n";
          $_ENV["PWD"] = getcwd();
        }
    }
}

function f_cd($cmd)
{
  if (!isset($_ENV["OLDPWD"]))
    $_ENV["OLDPWD"] = $_ENV["HOME"];
  if (isset($cmd[0]))
    {
      if ($cmd[0] == "-")
        swap_old_pwd($_ENV["OLDPWD"]);
      else
        swap_old_pwd($cmd[0]);
    }
  else
    if (isset($_ENV["HOME"]))
      swap_old_pwd($_ENV["HOME"]);
  return (1);
}
?>
