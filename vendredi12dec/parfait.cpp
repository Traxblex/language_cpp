#include <stdio.h>
int main() {
    int nb,div, somme,b1,b2,cpt=0;
    printf("Donner la première borne : ");
    scanf("%d", &b1);
    printf("Donner la deuxième borne : ");
    scanf("%d", &b2);
    for (nb = b1; nb <= b2; nb++) {
        somme = 0;
        for (div = 1; div < nb; div++) {
            if (nb % div == 0) {
                somme += div;
            }
        }
        if (somme == nb) {
            printf("%d est un nombre parfait.\n", nb);
            cpt++;
        }
    }
    printf("Il y a %d nombres parfaits.\n", cpt);
    return 0;
}
