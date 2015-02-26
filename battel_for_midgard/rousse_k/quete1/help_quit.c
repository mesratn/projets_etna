/*
** help_quit.c for Projet02 in /home/rousse_k/Projet02/quete1
**
** Made by ROUSSE Kevin
** Login   <rousse_k@etna-alternance.net>
**
** Started on  Fri Oct 10 12:23:32 2014 ROUSSE Kevin
** Last update Sat Oct 11 11:29:43 2014 MESRATI Nada
*/
#include "header.h"

void	quit(t_hero *i, t_ennemi *j)
{
  i->pv = 0;
  (void)j;
  my_putstr("Espece de lache...\n");
}

void	help(t_hero *i, t_ennemi *j)
{
  (void)i;
  (void)j;
  my_putstr("\nattack = -7 PV a l'ennemi\n");
  my_putstr("slash = -10 PV a l'ennemi et -2 PV au heros\n");
  my_putstr("fire = -3 PM au heros et -10PV a l'ennemi\n");
  my_putstr("thunder = -5PM au heros et -15PV a l'ennemi\n");
  my_putstr("stat = Permet de voir l'etat du hero\n");
  my_putstr("libra = Permet de voir l'etat de l'ennemi."); 
  my_putstr("Coute 1 PM au heros\n");
  my_putstr("quit = Permet de quitter la partie\n");
  my_putstr("cheat = Permet de gagner instantanement\n\n");
  my_putstr("Votre tour> ");
  cmp(i, j);
}

void	cheat(t_hero *i, t_ennemi *j)
{
  i->pv = 1000;
  (void)j;
  my_putstr("Vous avez perdu, la vie n'est pas aussi simple que ca.\n");
}
