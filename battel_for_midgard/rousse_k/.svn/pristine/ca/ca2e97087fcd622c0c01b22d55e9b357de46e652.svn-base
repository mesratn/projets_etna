/*
** stats.c for Projet02 in /home/rousse_k/Projet02/quete1
** 
** Made by ROUSSE Kevin
** Login   <rousse_k@etna-alternance.net>
** 
** Started on  Fri Oct 10 09:38:08 2014 ROUSSE Kevin
** Last update Sat Oct 11 12:46:21 2014 ROUSSE Kevin
*/

#include "header.h"

void	stat(t_hero *i, t_ennemi *j)
{
  my_putchar('\n');
  my_putstr(i->name);
  my_putstr("\nPV : ");
  my_put_nbr(i->pv);
  my_putstr("\nPM : ");
  my_put_nbr(i->pm);
  my_putstr("\n\nVotre tour> ");
  cmp(i, j);
}

void	libra(t_hero *i, t_ennemi *j)
{
  if (i->pm >= 1)
    {
      my_putstr("\nSephiroth\n");
      my_putstr("PV : ");
      my_put_nbr(j->pv);
      my_putstr("\nPM : ");
      my_put_nbr(j->pm);
      my_putchar('\n');
      i->pm -= 1;
    }
  else
    my_putstr("Vous n'avez pas assez de mana.");
}
