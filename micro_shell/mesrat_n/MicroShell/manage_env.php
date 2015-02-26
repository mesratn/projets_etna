#!/usr/bin/env php
<?php
// manage_env.php for manage_env in /home/mesrat_n/piscine/PHP/MicroShell/mesrat_n/MicroShell
// 
// Made by MESRATI Nada
// Login   <mesrat_n@etna-alternance.net>
// 
// Started on  Sat Oct 18 11:00:02 2014 MESRATI Nada
// Last update Sat Oct 18 11:00:09 2014 MESRATI Nada
//


function manage_env(){
  if (!isset($_ENV["PWD"]))
    $_ENV["PWD"] = __dir__;
  if (!isset($_ENV["HOME"]))
    $_ENV["HOME"] = "/home";
  if (!isset($_ENV["USER"]))
    $_ENV["USER"] = "mesrat_n";
}

?>