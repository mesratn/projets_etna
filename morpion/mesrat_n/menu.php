<?php
// menu.php for menu in /home/mesrat_n/Rattrapage FDI-DPHP/mesrat_n
// 
// Made by MESRATI Nada
// Login   <mesrat_n@etna-alternance.net>
// 
// Started on  Tue Dec 16 13:10:03 2014 MESRATI Nada
// Last update Tue Dec 16 17:15:48 2014 EL JINDI Bilal
//

include_once("include.php");

define("CLEAR", "\033[H\033[2J");

function	intro()
{
  echo CLEAR;
  echo "\033[0;31m ▄▄       ▄▄  ▄▄▄▄▄▄▄▄▄▄▄  ▄▄▄▄▄▄▄▄▄▄▄  ▄▄▄▄▄▄▄▄▄▄▄  ▄▄▄▄▄▄▄▄▄▄▄  ▄▄▄▄▄▄▄▄▄▄▄  ▄▄        ▄ 
▐░░▌     ▐░░▌▐░░░░░░░░░░░▌▐░░░░░░░░░░░▌▐░░░░░░░░░░░▌▐░░░░░░░░░░░▌▐░░░░░░░░░░░▌▐░░▌      ▐░▌
▐░▌░▌   ▐░▐░▌▐░█▀▀▀▀▀▀▀█░▌▐░█▀▀▀▀▀▀▀█░▌▐░█▀▀▀▀▀▀▀█░▌ ▀▀▀▀█░█▀▀▀▀ ▐░█▀▀▀▀▀▀▀█░▌▐░▌░▌     ▐░▌
▐░▌▐░▌ ▐░▌▐░▌▐░▌       ▐░▌▐░▌       ▐░▌▐░▌       ▐░▌     ▐░▌     ▐░▌       ▐░▌▐░▌▐░▌    ▐░▌
▐░▌ ▐░▐░▌ ▐░▌▐░▌       ▐░▌▐░█▄▄▄▄▄▄▄█░▌▐░█▄▄▄▄▄▄▄█░▌     ▐░▌     ▐░▌       ▐░▌▐░▌ ▐░▌   ▐░▌
▐░▌  ▐░▌  ▐░▌▐░▌       ▐░▌▐░░░░░░░░░░░▌▐░░░░░░░░░░░▌     ▐░▌     ▐░▌       ▐░▌▐░▌  ▐░▌  ▐░▌
▐░▌   ▀   ▐░▌▐░▌       ▐░▌▐░█▀▀▀▀█░█▀▀ ▐░█▀▀▀▀▀▀▀▀▀      ▐░▌     ▐░▌       ▐░▌▐░▌   ▐░▌ ▐░▌
▐░▌       ▐░▌▐░▌       ▐░▌▐░▌     ▐░▌  ▐░▌               ▐░▌     ▐░▌       ▐░▌▐░▌    ▐░▌▐░▌
▐░▌       ▐░▌▐░█▄▄▄▄▄▄▄█░▌▐░▌      ▐░▌ ▐░▌           ▄▄▄▄█░█▄▄▄▄ ▐░█▄▄▄▄▄▄▄█░▌▐░▌     ▐░▐░▌
▐░▌       ▐░▌▐░░░░░░░░░░░▌▐░▌       ▐░▌▐░▌          ▐░░░░░░░░░░░▌▐░░░░░░░░░░░▌▐░▌      ▐░░▌
 ▀         ▀  ▀▀▀▀▀▀▀▀▀▀▀  ▀         ▀  ▀            ▀▀▀▀▀▀▀▀▀▀▀  ▀▀▀▀▀▀▀▀▀▀▀  ▀        ▀▀ 
                                                                                           \033[0;m\n\n";
}

function	menu()
{
  echo "    Menu\n";
  echo "1- 1 joueur\n";
  echo "2- 2 joueurs\n";
  echo "0- Exit\n\n";
  echo "Choix : ";
}

function	exitt()
{
  echo CLEAR;
  echo "See you soon!\n";
  exit;
}

function	rejouer()
{
  $ret = 0;
  echo "Voulez-vous rejouer ? (o/N) : ";
  $cmd = command_make();
  if (isset($cmd[0]))
    {
      if($cmd[0] == "o" || $cmd[0] == "O")
	$ret = 1;
      else if($cmd[0] == "n" || $cmd[0] == "N")
	exitt();
      else
	echo "Command not found";
    }
  return($ret);
}