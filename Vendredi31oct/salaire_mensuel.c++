#include <stdio.h>
int main() {
    float tarif, salaire, prime,taux, benefice;
    printf("donner le tarif horaire");
    scanf("%f",& tarif);
    printf("donner le nombre d'heures travaillees dans le mois");
    scanf("%f",& salaire);
    printf("donner le benefice:");
    scanf("%f",& benefice);
    prime=0;
    if (salaire>160) {
        prime=prime + (salaire - 160) * tarif * 0.25;
    }
}