/*
** critiques.c for Projet02 in /home/rousse_k/Projet02/Battle_for_midgard/quete2
** 
** Made by ROUSSE Kevin
void            critical_hero(t_hero *i, t_ennemi *j, int crit);
void            critical_ennemi(t_hero *i, t_ennemi *j, int crit);** Login   <rousse_k@etna-alternance.net>
** 
** Started on  Sat Oct 11 09:09:21 2014 ROUSSE Kevin
** Last update Sat Oct 11 12:48:35 2014 ROUSSE Kevin
*/
#include "header.h"
#include <stdlib.h>
#include <unistd.h>
#include <time.h>

void	critical_hero(t_hero *i, t_ennemi *j, int crit)
{
  int	w;

  srand (time(NULL));
  w = (rand() % 10 + 1);
  if (w == 1)
    {
      my_putstr("Critical Hit!\n");
      crit = crit * 0.2;
      j->pv = j->pv - crit;
      my_putstr("Vous infligez ");
      my_put_nbr(crit);
      my_putstr(" de degats suplementaires!\n");
    }
  (void)i;
}

void	critical_ennemi(t_hero *i, t_ennemi *j, int crit)
{
  int	y;

  srand (time(NULL));
  y = (rand() % 10 + 1);
  if (y == 1)
    {
      my_putstr("Critical Hit!\n");
      crit = crit * 0.2;
      i->pv = i->pv - crit;
      my_putstr("Sephiroth vous inflige ");
      my_put_nbr(crit);
      my_putstr(" de degats suplementaires!\n");
    }
  (void)j;
}

void	critical_heal(t_hero *i, t_ennemi *j, int crit)
{
  int	z;

  srand (time(NULL));
  z = (rand() % 10 + 1);
  if (z == 1)
    {
      my_putstr("Critical Spell!\n");
      crit = crit * 0.2;
      i->pv = i->pv + crit;
      my_putstr("Vous gagnez ");
      my_put_nbr(crit);
      my_putstr(" de PV suplementaires!\n");
    }
  (void)j;
}
