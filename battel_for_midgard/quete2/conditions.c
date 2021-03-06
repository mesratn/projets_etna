/*
** main.c for Projet02 in /home/rousse_k/Projet02/quete1
** 
** Made by ROUSSE Kevin
** Login   <rousse_k@etna-alternance.net>
** 
** Started on  Fri Oct 10 10:49:30 2014 ROUSSE Kevin
** Last update Sat Oct 11 13:02:50 2014 ROUSSE Kevin
*/
#include "header.h"
#include <unistd.h>
#include <stdlib.h>
#include <time.h>

int	conditions(int argc, char **argv)
{
  if (argc != 3)
    my_putstr("Nom indisponible.\n");
  else
    {
      if (my_strcmp(argv[1], "-n") != 0)
	my_putstr("Erreur. Option non reconnue.\n");
      else
	return (0);
    }
  return (1);
}

int	initialisation(char **argv, t_hero *h, t_ennemi *e)
{
  if ((h->name = my_strdup(argv[2])) == 0)
    return (-1);
  h->pv = 100;
  h->pm = 30;
  if ((e->name = my_strdup("Sephiroth")) == 0)
    return (-1);
  e->pv = 75;
  e->pm = 20;
  srand (time(NULL));
  e->x = (rand() % 3 + 1);
  return (0);
}


int		check(t_hero *i, t_ennemi *j, int *n)
{
  if (j->pv <= 0 && *n != 1)
    {
      n++;
      my_putstr("Vous avez vaincu!\n\n");
      return (1);
    }
  else if (i->pv <= 0 && *n != 1)
    {
      n++;
      my_putstr("Vous avez ete vaincu.\n\n");
      return (1);
    }
  else if (i->pv >= 1000 && *n != 1)
    {
      n++;
      my_putstr("Tricheur! -42 plus TIG (Nettoyer tous les ecrans des salles machines).\n\n");
      return (1);
    }
  return (0);
}

void   osuivant(t_hero *h, t_ennemi *e)
{
  if (e->x != 0 && e->pv <= 0)
    {
      e->name = my_strdup("Sephiroth");
      e->pv = 75;
      e->pm = 20;
      e->x -= 1;
      my_putstr("Mais il y en a un autre !!!!\n\n");
    }
  (void)h;
}
