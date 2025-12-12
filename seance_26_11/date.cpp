#include <stdio.h>
int main(){
    int jour, mois, annee, nbfevrier;
    printf("donner une date (jj mm aaaa) : ");
    scanf("%d/%d/%d", &jour, &mois, &annee);

    if (jour < 1 || jour > 31 || mois < 1 || mois > 12 || annee < 1900){
        printf("la date saisie est invalide");
    }else{
    
        switch (mois){
            case 4: case 6: case 9: case 11:
                if (jour <= 30){
                    printf("la date saisie est valide");
                }else{
                    printf("la date saisie est invalide");
                }
                
                break;
            case 1: case 3: case 5: case 7: case 8: case 10: case 12:
                printf("la date saisie est valide");
            	break;
            case 2:
                if ((annee % 4 == 0 && annee % 100 != 0) || (annee % 400 == 0)){
                    nbfevrier = 29;
                }else{
                    nbfevrier = 28;
                }
                if (jour > nbfevrier){
                    printf("la date saisie est invalide");
                }else{
                    printf("la date saisie est valide");
                }
                break;
        }
    }
    return 0;
}
