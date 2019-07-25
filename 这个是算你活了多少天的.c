#include<stdio.h>
int main(void)
{
    int age;
    int days;
    printf("请输入你的年龄：" );
    scanf("%d", &age);
    days = age*365;
    printf("你已经活了大约%d天" , days);
    return 0;
}
