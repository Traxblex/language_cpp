#include <stdio.h>
int main(){
    int nb;
    printf("donner un nombre entier : ");
    scanf("d", & nb);
    if (nb %2==0){
        printf("nombre pair");
    }else{
        printf("nombre impair");
    }
    return 0;
}
