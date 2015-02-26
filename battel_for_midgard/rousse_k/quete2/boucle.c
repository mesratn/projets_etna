/*
** boucle.c for boucle in /home/mesrat_n/piscine/C/Project2/rousse_k/quete2
** 
** Made by MESRATI Nada
** Login   <mesrat_n@etna-alternance.net>
** 
** Started on  Sat Oct 11 12:01:35 2014 MESRATI Nada
** Last update Sat Oct 11 12:55:07 2014 ROUSSE Kevin
*/

#include "header.h"

void		exe_game(t_hero *i, t_ennemi *j)
{
  welcome();
  battle_for_midgard();
  histoire(i, j);
  (void)i;
  (void)j;
}

int		boucle(int argc, char **argv)
{
  t_hero	i;
  t_ennemi	j;
  int		n;

  n = 0;
  if (conditions(argc, argv) == 0)
    {
      if ((initialisation(argv, &i, &j)) == -1)
	return (1);
      exe_game(&i, &j);
      while (i.pv > 0 && j.pv > 0 && i.pv != 1000)
        {
          my_putstr("Votre tour> ");
          cmp(&i, &j);
          my_putstr("\n\n");
          if (check(&i, &j, &n) == 0)
            {
              my_putstr("Tour de Sephiroth\n");
              my_rand(&i, &j);
              check(&i, &j, &n);
            }
	  osuivant(&i, &j);
        }
    }
  return (0);
}
