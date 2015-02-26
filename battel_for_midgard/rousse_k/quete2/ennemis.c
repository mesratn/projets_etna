/*
** ennemis.c for ennemis in /home/mesrat_n/piscine/C/Project2/rousse_k/quete2
** 
** Made by MESRATI Nada
** Login   <mesrat_n@etna-alternance.net>
** 
** Started on  Sat Oct 11 09:11:12 2014 MESRATI Nada
** Last update Sat Oct 11 10:58:23 2014 MESRATI Nada
*/

#include "header.h"

void		my_rand_ennemi(t_hero *i, t_ennemi *j)
{
  t_ennemi j;

  char **str = {
    {"Jeremie"},
    {"Est"}, "le mec le plus beau et gentil et magnifique du monde, en toute modestie"};
  j->x = (rand() % 3);
  if (x = 1)
    j[0] = Sephiroth;
  if (x = 2)
    {
      j[0] = Sephiroth;
      if (j[0]->pv <= 0)
	{
	  my_putstr("Sephiroth est mort mais le combat n'est pas fini!\n");
	  my_putstr("Vous devez maintenant affronter Sin!!\n");
	  j[1] = Sin;
	}
    }
  if (x = 3)
    {
      j[0] = Sephiroth;
      if (j[0]->pv <= 0)
	{
	  my_putstr("Sephiroth est mort mais le combat n'est pas fini!\n");
	  my_putstr("Vous devez maintenant affronter Sin!!\n");
	  j[1] = Sin;
	  if (j[0]->pv <= 0)
	    {
	      my_putstr("Sephiroth est mort mais le combat n'est pas fini!\n");
	      my_putstr("Vous devez maintenant affronter Orphan!!\n");
	      j[2] = Orphan;
	    }
	}
    }
}
