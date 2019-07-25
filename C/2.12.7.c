#include<stdio.h>
void pp(void);
int main(void)
{
    pp();
    return 0;
}
void pp(void)
{
    int a;
    int b;
    for(a=6;a>=1;a--){
        for(b=1;b<=a;b++)
        {
        printf("Smile!");
        }
        printf("\n");
    }
}
