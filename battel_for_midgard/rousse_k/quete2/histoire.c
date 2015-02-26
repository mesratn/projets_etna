/*
** histoire.c for histoire in /home/mesrat_n/piscine/C/Project2/rousse_k/quete1
** 
** Made by MESRATI Nada
** Login   <mesrat_n@etna-alternance.net>
** 
** Started on  Fri Oct 10 21:28:18 2014 MESRATI Nada
** Last update Sat Oct 11 13:03:55 2014 ROUSSE Kevin
*/
#include "header.h"

void	histoire(t_hero *i, t_ennemi *j)
{
  my_putstr("La ville de Midgar est de nouveau en grand danger, ");
  my_putstr("Sephiroth, Sin et Orphan se sont unifiés pour détruire ");
  my_putstr("les derniers cristaux de la planète.\n");
  my_putstr("La ville a besoin de vous afin de combattre et protéger la ");
  my_putstr("planète de leur noirs desseins. Vous combattrez aux côtés de ");
  my_putstr("Tidus, Zack et Fang, trois héros aux pouvoirs extremement ");
  my_putstr("puissants.\n");
  my_putstr("Vous devrez affronter ");
  my_put_nbr((j->x) + 1);
  my_putstr(" ennemis!\n");
  my_putstr("Ta quete commence maintenant..\n\n\n");
  (void)i;
  (void)j;
}
