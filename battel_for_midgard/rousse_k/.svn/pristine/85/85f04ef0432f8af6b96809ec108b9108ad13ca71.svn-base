/*
** main.c for projet02 in /home/rousse_k/Projet02/rousse_k/quete1
** 
** Made by ROUSSE Kevin
** Login   <rousse_k@etna-alternance.net>
** 
** Started on  Fri Oct 10 19:51:21 2014 ROUSSE Kevin
** Last update Sat Oct 11 12:37:54 2014 MESRATI Nada
*/
#include "header.h"

void		exe_game()
{
  welcome ();
  battle_for_midgard();
  histoire ();
}

int		main(int argc, char **argv)
{
  t_hero	i;
  t_ennemi	j;
  int		n;

  n = 0;
  if (conditions(argc, argv) == 0)
    {
      if (initialisation(argv, &i, &j) == -1)
	return (1);
      exe_game();
      while (i.pv > 0 && j.pv > 0 && i.pv != 1000)
        {
          my_putstr("Votre tour> ");
          cmp(&i, &j);
          my_putchar('\n');
          my_putchar('\n');
          if (check(&i, &j, &n) == 0)
            {
              my_putstr("Tour de Sephiroth");
              my_putchar('\n');
              my_rand(&i, &j);
	      check(&i, &j, &n);
	    }
        }
    }
  return (0);
}
