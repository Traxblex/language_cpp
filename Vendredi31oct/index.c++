#include <cstdio>
#include
int main() {
    float lg, lr, p, s ;
    printf("donner la longueur: ");
    scanf("%f", &lg);
    printf("donner la largeur: ");
    scanf("%f", &lr);
    p = 2 * (lg + lr);
    s = lg * lr;
    printf("le perimetre est: %.2f\n", p);
    printf("la surface est: %.2f\n", s);
    return 0;
}
// %f reel , %d entier, %c caractere, %s chaine de caractere