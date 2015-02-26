/*
** stuct.c for  in /home/rousse_k/Projet02/quete1
** 
** Made by ROUSSE Kevin
** Login   <rousse_k@etna-alternance.net>
** 
** Started on  Fri Oct 10 11:48:10 2014 ROUSSE Kevin
** Last update Sat Oct 11 11:38:20 2014 MESRATI Nada
*/
#include "header.h"
#include <stdlib.h>

t_cmd	cmd[10] =
  {
    {"attack", attack},
    {"slash", slash},
    {"fire", fire},
    {"thunder", thunder},
    {"stat", stat},
    {"libra", libra},
    {"quit", quit},
    {"help", help},
    {"cheat", cheat},
    {NULL, NULL}
  };

void	cmp(t_hero *i, t_ennemi *j)
{
  char	*tab;
  int	n;

  n = 0;
  tab = readLine();
  while (cmd[n].cmd != '\0')
    {
      if (my_strcmp(tab, cmd[n].cmd) == 0)
	{
	  cmd[n].f(i, j);
	  return;
	}
      else if (n == 8)
	{
	  my_putstr("Je ne comprends votre demande.\n");
	  my_putstr("Votre tour> ");
	  tab = readLine();
	  n = - 1;
	}
      n++;
    }
}
