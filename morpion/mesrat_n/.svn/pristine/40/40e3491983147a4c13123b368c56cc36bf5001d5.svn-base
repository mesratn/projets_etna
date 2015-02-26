<?php
// mode_2.php for mode_2 in /home/mesrat_n/Rattrapage FDI-DPHP/mesrat_n
// 
// Made by MESRATI Nada
// Login   <mesrat_n@etna-alternance.net>
// 
// Started on  Tue Dec 16 13:29:28 2014 MESRATI Nada
// Last update Tue Dec 16 16:59:44 2014 MESRATI Nada
//

include_once("include.php");

function	mode_2($tab)
{
  static $score1 = 0;
  static $score2 = 0;
  $win = 0;
  $win2 = 0;
  $lose = 0;
  $ret = 0;
  echo "!! Nouvelle partie en mode 2!!\n\n";
  aff_tab($tab);
  while ($win2 == 0 && $win == 0 && $lose == 0)
    {
      $tab = run2($tab);
      $win = win_1($tab);
      $win2 = win_2($tab);
      $lose = lose($tab);
    }
  if ($win == 1)
    $score1 += 1;
  if ($win2 == 1)
    $score2 += 1;
  echo "Le score pour le mode 2\n";
  echo "joueur 1 a " . $score1 . "\n"; 
  echo "joueur 2 a " . $score2 . "\n"; 
  $ret = rejouer();
  return($ret);
}

function	run2($tab)
{
  echo "Joueur 1 : ";
  $cmd = command_make();
  $tab = play($tab, $cmd[0], "X", 1);
  aff_tab($tab);
  echo "Joueur 2 : ";
  $cmd = command_make();
  $tab = play($tab, $cmd[0], "O", 2);
  aff_tab($tab);
  return ($tab);
}