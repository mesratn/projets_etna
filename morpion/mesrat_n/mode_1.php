<?php
// mode_1.php for mode_1 in /home/mesrat_n/Rattrapage FDI-DPHP/mesrat_n
// 
// Made by MESRATI Nada
// Login   <mesrat_n@etna-alternance.net>
// 
// Started on  Tue Dec 16 13:28:38 2014 MESRATI Nada
// Last update Tue Dec 16 17:03:31 2014 MESRATI Nada
//

include_once("include.php");

function	mode_1($tab)
{
  static $score1 = 0;
  static $score2 = 0;
  $ret = 0;
  $win = 0;
  $win2 = 0;
  $lose = 0;
  echo "!! Nouvelle partie en mode 1 !!\n\n";
  aff_tab($tab);
  while ($win2 == 0 && $win == 0 && $lose == 0)
    {
      $tab = run1($tab);
      $win = win_1($tab);
      $win2 = win_2($tab);
      $lose = lose($tab);
    }
  if ($win == 1)
    $score1 += 1;
  if ($win2 == 1)
    $score2 += 1;
  echo "Le score pour le mode 1\n";
  echo "joueur 1 a " . $score1 . "\n"; 
  echo "joueur 2 a " . $score2 . "\n"; 
  $ret = rejouer();
  return ($ret);
}

function	run1($tab)
{
  echo "Joueur 1 : ";
  $cmd = command_make();
  $tab = play($tab, $cmd[0], "X", 1);
  aff_tab($tab);
  echo "Joueur 2 : ";
  $cmd = random();
  $tab = play($tab, $cmd, "O", 2);
  aff_tab($tab);
  return ($tab);
}

function	random()
{
  $ascii = rand(65, 67);
  $lettre = chr($ascii);
  $chiffre = rand(1, 3);
  $cmd = $lettre . $chiffre;
  return ($cmd);
}