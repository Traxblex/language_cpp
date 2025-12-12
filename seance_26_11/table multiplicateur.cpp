#include <stdio.h>
int main () {
    int nb, m, resultat ;
    printf ("saisir un entier : ");
    scanf ("%d", &nb);
    for (m = 1 ; m <= 10 ; m++) {
        resultat = nb * m;
        printf ("\n %d * %d = %d", nb, m, resultat);
    }
    return 0;
}
