#include <stdio.h>
int main() {
    int nb, n, fact = 1;
    printf("Donner un nombre entier : ");
    scanf("%d", &nb);
    for (n = 1; n <= nb; n++) {
        fact *= n;
    }
    printf("Le factoriel de %d est %d\n", nb, fact);
    return 0;
}
