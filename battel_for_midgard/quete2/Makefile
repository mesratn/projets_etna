NAME		=	ragnarok

SRC		=	main.c \
			attack_ennemi2.c \
			attack_hero2.c \
			attack_hero3.c \
			help_quit.c \
			stats.c \
			readLine.c \
			struct2.c \
			conditions.c \
			histoire.c \
			welcome.c \
			critiques.c \
			boucle.c

OBJ		=	$(SRC:.c=.o)

RM		=	rm -f

CC		=	gcc

CFLAGS		=	-W -Wall -Werror -I./

all:			$(NAME)

$(NAME):		$(OBJ)
			$(CC) $(OBJ) -o $(NAME) -lmy -L./

clean:			
			$(RM) $(OBJ)

fclean:			clean
			$(RM) $(NAME)

re:			fclean all