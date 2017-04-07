#include <stdlib.h>
#include <stdio.h>
#include <string.h>

int main(){

	//read name
	
	char name[40];
	printf("Whats your name ?\n");
	scanf("%s",&name);
	// print back to user
	
	if(strlen(name)>=40){
		printf("How about we choose something shorter? \n");
	}else{
		printf("Welcome to hacknation %s!\n",name);
	}
	
	return 0;
}
