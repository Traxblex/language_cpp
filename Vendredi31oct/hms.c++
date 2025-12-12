#include <stdio.h>
int main() {
    int h, m, s, total_seconds;
    printf("donner les heures: ");
    scanf("%d", &h);
    printf("donner les minutes: ");
    scanf("%d", &m);
    printf("donner les secondes: ");
    scanf("%d", &s);
    total_seconds = h * 3600 + m * 60 + s;
    printf("le temps total en secondes est: %d\n", total_seconds);
    return 0;
}