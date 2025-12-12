    #include <stdio.h>
    int main(){
        float a, b, x;
        printf("Donner le premier coef: ");
        scanf("%f", &a);
        printf("Donner le deuxième coef : ");
        scanf("%f", &b);
        if (a == 0){
            if (b == 0){
                printf("Ens. des solutions est R");
            }else{
                printf("Ens. des solution est vide");
            }
        }else{
            x = -b/a;
            printf("la solution est : %f", x);
        }
        return 0;
    }
