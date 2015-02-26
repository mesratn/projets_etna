/*
** readLine.c for readline in /home/mesrat_n/piscine/C/Projet02/rousse_k/quete1
** 
** Made by MESRATI Nada
** Login   <mesrat_n@etna-alternance.net>
** 
** Started on  Fri Oct 10 17:49:56 2014 MESRATI Nada
** Last update Fri Oct 10 18:00:19 2014 MESRATI Nada
*/

#include <stdlib.h>
#include <unistd.h>

char		*readLine()
{
  ssize_t	ret;
  char		*buff;

  if ((buff = malloc(sizeof(*buff) * (50 + 1))) == NULL)
    return (NULL);
  if ((ret = read(0, buff, 50)) > 1)
    {
      buff[ret - 1] = '\0';
      return (buff);
    }
  buff[0] = '\0';
  return (buff);
}
