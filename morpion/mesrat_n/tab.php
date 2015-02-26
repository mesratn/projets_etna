<?php
// tab.php for  in /home/eljind_b/RAT/php/mesrat_n
// 
// Made by EL JINDI Bilal
// Login   <eljind_b@etna-alternance.net>
// 
// Started on  Tue Dec 16 13:04:53 2014 EL JINDI Bilal
// Last update Tue Dec 16 17:27:26 2014 EL JINDI Bilal
//

include_once("include.php");

function	aff_tab($tab)
{
  echo "\n";
  foreach ($tab as $key => $element)
    {
      for ($i = 0; isset($element[$i]); $i++)
	{
	  if ($element[$i] == 'X')
	    echo "\033[0;32m" . $element[$i] . "\033[0;m";
	  else if ($element[$i] == 'O')
	    echo "\033[0;31m" . $element[$i] . "\033[0;m";
	  else
	    echo $element[$i];
	}
      echo "\n";
    }
  echo "\n";
}

function        play($tab, $cmd, $lettre, $player)
{
  if ($cmd == "exit" || $cmd == "quit")
    exitt();
  $commandes = array('1' => 4,
                     '2' => 8,
                     '3' => 12,);

  if (isset($tab[$cmd[0]]) && isset($commandes[$cmd[1]]) &&
      $tab[$cmd[0]][$commandes[$cmd[1]]] != ' ')
    echo "Deja pris, vous perdez votre tour!!\n";
  else if (isset($tab[$cmd[0]]) && isset($commandes[$cmd[1]]))
    $tab[$cmd[0]][$commandes[$cmd[1]]] = $lettre;
  else
    echo "Veuillez entrer la bonne coordonnee !\n";
  return ($tab);
}
?>