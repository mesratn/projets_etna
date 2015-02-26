/*
** header.h for header in /home/mesrat_n/piscine/C/Battle_For_Midgard/quete1
** 
** Made by MESRATI Nada
** Login   <mesrat_n@etna-alternance.net>
** 
** Started on  Fri Oct 10 08:56:05 2014 MESRATI Nada
** Last update Sat Oct 11 13:34:15 2014 MESRATI Nada
*/

#ifndef __HEADER_H__
# define __HEADER_H__

typedef struct s_hero
{
  char		*name;
  int		pv;
  int		pm;
}		t_hero;

typedef struct	s_ennemi
{
  char		*name;
  int		pv;
  int		pm;
}		t_ennemi;

typedef struct	s_cmd
{
  char		*cmd;
  void		(*f)(t_hero*, t_ennemi*);
}		t_cmd;

void		attack(t_hero *i, t_ennemi *j);
void		slash(t_hero *i, t_ennemi *j);
void		fire(t_hero *i, t_ennemi *j);
void		thunder(t_hero *i, t_ennemi *j);
void		quit(t_hero *i, t_ennemi *j);
void		help(t_hero *i, t_ennemi *j);
void		stat(t_hero *i, t_ennemi *j);
void		libra(t_hero *i, t_ennemi *j);
void		bite(t_hero *i, t_ennemi *j);
void		earthquake(t_hero *i, t_ennemi *j);
void		doom(t_hero *i, t_ennemi *j);
void		cmp(t_hero *i, t_ennemi *j);
void		my_rand(t_hero *i, t_ennemi *j);
void		cheat(t_hero *i, t_ennemi *j);
void		my_putchar(char c);
void		my_putstr(char *str);
int		my_strcmp(char *s1, char *s2);
char		*my_strdup(char *str);
void		my_put_nbr(int nb);
int		check(t_hero *i, t_ennemi *j, int *n);
char		*readLine();
int		conditions(int argc, char **argv);
int		initialisation(char **argv, t_hero *h, t_ennemi *e);
void		welcome();
void		histoire();
void		battle_for_midgard();
void		mort();

#endif
