#include<stdio.h>
void jolly(void);
void deny(void);
int main(void)
{
    jolly();
    deny();
    return 0;
}
void jolly(void)
{
    int a=1;
    for(a=1;a<=3;a++){
    printf("For he's a jolly good fellow!\n");
    }

}
void deny(void)
{
    printf("Which nobody can deny!");
}

