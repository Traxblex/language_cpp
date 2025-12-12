#include<stdio.h>
int main() {
   int age_pere, age_fils, nb_annees;
   printf("donner l'age du pere: ");
   scanf("%d", &age_pere);
   printf("donner l'age du fils: ");
   scanf("%d", &age_fils);
    nb_annees = age_pere - 2 * age_fils;
    printf("le nombre : %d ", nb_annees);
    age_pere=age_pere + nb_annees;
    age_fils=age_fils + nb_annees;
    printf("\nle pere aura: %d annees", age_pere);
    printf("\nle fils aura: %d annees", age_fils);
    return 0;
}
