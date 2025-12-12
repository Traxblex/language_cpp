#include <stdio.h>
int main () {
    int nb , div ; 
    printf ("donner un entier :");
    scanf ("%d", &nb); 
    for (div = 1 ; div <= nb ; div++) {
        if (nb % div == 0) {
            printf ("\n diviseur : %d", div);
        }
    }
    return 0;
}
