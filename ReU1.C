#include<stdio.h>
int main(void)
{
    const char fn[] = "´ï";
    const char n [] = "ĞñÉı";
    printf("%s %s\n",fn,n);
    printf("%s\n%s\n",fn,n);
    printf("%s %s",fn,n);
    return 0;
}
