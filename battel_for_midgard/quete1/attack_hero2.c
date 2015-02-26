/*
** attack_hero2.c for Projet02 in /home/rousse_k/Projet02/quete1
** 
** Made by ROUSSE Kevin
** Login   <rousse_k@etna-alternance.net>
** 
** Started on  Fri Oct 10 11:00:08 2014 ROUSSE Kevin
** Last update Sat Oct 11 11:22:51 2014 MESRATI Nada
*/
#include "header.h"

void		attack(t_hero *i, t_ennemi *j)
{
  j->pv = j->pv - 7;
  (void)i;
  my_putstr("attack retire 7 PV a l'ennemi!");
  my_putchar('\n');
}

void		slash(t_hero *i, t_ennemi *j)
{
  j->pv = j->pv - 10;
  i->pv = i->pv - 2;
  my_putstr("slash retire 10 PV a l'ennemi!\n"); 
  my_putstr("slash vous retire egalement 2 PV.\n");
}

void		fire(t_hero *i, t_ennemi *j)
{
  if (i->pm >= 3)
    {
      j->pv = j->pv - 10;
      i->pm = i->pm - 3;
      my_putstr("fire retire 10 PV a l'ennemi!\n");
    }
  else
    {
      my_putstr("Vous n'avez pas assez de mana\n");
      cmp(i, j);
    }
}

void		thunder(t_hero *i, t_ennemi *j)
{
  if (i->pm >= 5)
    {
      j->pv = j->pv - 15;
      i->pm = i->pm - 5;
      my_putstr("thumder retire 15 PV a l'ennemi!\n");
    }
  else
    {
      my_putstr("Vous n'avez pas assez de mana\n");
      cmp(i, j);
    }
}
