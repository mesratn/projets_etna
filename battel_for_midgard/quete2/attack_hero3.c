/*
** attack_hero2.c for Projet02 in /home/rousse_k/Projet02/quete1
** 
** Made by ROUSSE Kevin
** Login   <rousse_k@etna-alternance.net>
** 
** Started on  Fri Oct 10 11:00:08 2014 ROUSSE Kevin
<<<<<<< .mine
** Last update Sat Oct 11 13:16:50 2014 MESRATI Nada
=======
** Last update Sat Oct 11 08:59:29 2014 MESRATI Nada
>>>>>>> .r10147
*/
#include "header.h"

void		potion(t_hero *i, t_ennemi *j)
{
  static int	n = 0;

  if (n < 5)
    {
      i->pv = i->pv + 30;
      (void)j;
      my_putstr("Potion vous fourni 30 PV (avec un max de 100 PV)\n");
      if (i->pv > 100)
	i->pv = 100;
      n++;
    }
  else
    my_putstr("Vous n'avez plus de potion!");
}

void		ether(t_hero *i, t_ennemi *j)
{
  static int	n = 0;

  if (n < 5)
    {
      i->pm = i->pm + 12;
      (void)j;
      my_putstr("Ether vous fourni 12 PM (avec un max de 30 PM)\n");
      if (i->pm > 30)
	i->pm = 30;
      n++;
    }
  else
    my_putstr("Vous n'avez plus de potion!");
}

void		heal(t_hero *i, t_ennemi *j)
{
  int		n;

  if (i->pm >= 3)
    {
      n = i->pv * 0.25;
      i->pv = 100 + n;
      i->pm = i->pm - 3;
      (void)j;
      my_putstr("heal vous fourni 25% des PV max (avec un max de 100 PV)\n");
      if (i->pv > 100)
	i->pv = 100;
      critical_heal(i, j, n);
    }
  else
    {
      my_putstr("Vous n'avez pas assez de mana. \n");
    }
}

