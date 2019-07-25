#include<stdio.h>

void one_three(void);
void two(void);
int main(void)
{
    printf("Starting now\n");
    one_three();
    two();
    printf("done!");
    return 0;
}
void one_three(void){
printf("one\n");
}
void two(void){
printf("two\n");
}
