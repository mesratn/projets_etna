/*
** attack_ennemi2.c for Projet02 in /home/rousse_k/Projet02/quete1
** 
** Made by ROUSSE Kevin
** Login   <rousse_k@etna-alternance.net>
** 
** Started on  Fri Oct 10 12:11:05 2014 ROUSSE Kevin
** Last update Sat Oct 11 12:06:39 2014 ROUSSE Kevin
*/
#include "header.h"
#include <stdlib.h>
#include <time.h>

t_cmd		cmd2[4] =
  {
    {"bite", bite},
    {"earthquake", earthquake},
    {"doom", doom},
    {NULL, NULL}
  };

void		bite(t_hero *i, t_ennemi *j)
{
  i->pv = i->pv - 6;
  my_putstr("\nVous perdez 6 PV.\n");
  critical_ennemi(i, j, 6);
  my_putchar('\n');
  (void)j;
}

void		earthquake(t_hero *i, t_ennemi *j)
{
  i->pv = i->pv - 15;
  j->pv = j->pv - 3;
  my_putstr("\nVous perdez 15 PV.\n");
  critical_ennemi(i, j, 6);
  my_putchar('\n');
}

void		doom(t_hero *i, t_ennemi *j)
{
  i->pv = i->pv - 11;
  j->pm = j->pm - 5;
  my_putstr("\nVous perdez 11 PV.\n");
  critical_ennemi(i, j, 6);
  my_putchar('\n');
}

void		my_rand(t_hero *i, t_ennemi *j)
{
  int		x;

  srand (time(NULL));
  if (j->pm < 5)
    x = (rand() % 2 + 1);
  else
    x = (rand() % 3 + 1);
  if (x == 1)
    {
      my_putstr("bite");
      cmd2[0].f(i, j);
    }
  if (x == 2)
    {
      my_putstr("earthquake");
      cmd2[1].f(i, j);
    }
  if (x == 3)
    {
      my_putstr("doom");
      cmd2[2].f(i, j);
    }
}
