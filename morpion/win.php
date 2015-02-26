<?php
// win.php for  in /home/eljind_b/RAT/php/mesrat_n
// 
// Made by EL JINDI Bilal
// Login   <eljind_b@etna-alternance.net>
// 
// Started on  Tue Dec 16 14:28:25 2014 EL JINDI Bilal
// Last update Tue Dec 16 17:45:39 2014 MESRATI Nada
//

define("CLEAR", "\033[H\033[2J");

function	you_win()
{
  echo CLEAR;
  echo "\033[0;34mPLAYER 1 WINS !!!\033[0;m\n";
  return (1);
}

function        you_lose()
{
  echo CLEAR;
  echo "\033[0;34mPLAYER 1 LOSES !!!\033[0;m\n";
  return (1);
}

function	win_1($tab)
{
  for ($i = 4; isset($tab["A"][$i]) &&
	 isset($tab["B"][$i]) &&
	 isset($tab["C"][$i]); $i+=4)
    if ( $tab["A"][$i] == 'X' &&
	 $tab["A"][$i] == $tab["B"][$i] &&
	 $tab["A"][$i] == $tab["C"][$i])
      return (you_win());
  for ($i = "A"; isset($tab[$i]); $i++)
    {
      if ($tab[$i][4] == 'X' &&
	  $tab[$i][4] == $tab[$i][8] &&
	  $tab[$i][4] == $tab[$i][12])
	return (you_win());
    }
  if (($tab["A"][4] == 'X' &&
       $tab["A"][4] == $tab["B"][8] &&
       $tab["A"][4] == $tab["C"][12]) ||
      ($tab["C"][4] == 'X' &&
       $tab["C"][4] == $tab["B"][8] &&
       $tab["C"][4] == $tab["A"][12]))
    return (you_win());
  return (0);
}

function        win_2($tab)
{
  for ($i = 4; isset($tab["A"][$i]) &&
         isset($tab["B"][$i]) &&
         isset($tab["C"][$i]); $i+=4)
    if ( $tab["A"][$i] == 'O' &&
         $tab["A"][$i] == $tab["B"][$i] &&
         $tab["A"][$i] == $tab["C"][$i])
      return (you_lose());
  for ($i = "A"; isset($tab[$i]); $i++)
    {
      if ($tab[$i][4] == 'O' &&
          $tab[$i][4] == $tab[$i][8] &&
          $tab[$i][4] == $tab[$i][12])
        return (you_lose());
    }
  if (($tab["A"][4] == 'O' &&
       $tab["A"][4] == $tab["B"][8] &&
       $tab["A"][4] == $tab["C"][12]) ||
      ($tab["C"][4] == 'O' &&
       $tab["C"][4] == $tab["B"][8] &&
       $tab["C"][4] == $tab["A"][12]))
    return (you_lose());
  return (0);
}

function	lose($tab)
{
  for ($i = "A"; isset($tab[$i]); $i++)
    {
      for ($j = 4; isset($tab[$i][$j]); $j+=4)
	{
	  if ($tab[$i][$j] == ' ')
	    return (0);
	}
    }
  echo CLEAR;
  echo "MATCH NULL !!\n";
  return (1); 
}

?>