#!/usr/bin/env php
<?php
// morpion.php for morpion in /home/mesrat_n/Rattrapage FDI-DPHP/mesrat_n
// 
// Made by MESRATI Nada
// Login   <mesrat_n@etna-alternance.net>
// 
// Started on  Tue Dec 16 13:08:15 2014 MESRATI Nada
// Last update Tue Dec 16 17:39:53 2014 EL JINDI Bilal
//

include_once("include.php");

define("CLEAR", "\033[H\033[2J");

$tab = array ("0" => "    1   2   3",
	      "A" => "A     |   |   ",
	      "00" => "   ___________",
	      "B" => "B     |   |   ",
	      "000" => "   ___________",
	      "C" => "C     |   |   ",);

intro();
$ret = 1;
while ($ret)
  {
    menu();
    $cmd = command_make();
    if (isset($cmd[0]) && !(isset($cmd[0][1])))
      {
	if ($cmd[0] == 1)
	  $ret = mode_1($tab);
	else if ($cmd[0] == 2)
	  $ret = mode_2($tab);
	else if ($cmd[0] == 0)
	  exitt();
      }
    else
      echo $cmd[0] . ": Command not found\n";
  }