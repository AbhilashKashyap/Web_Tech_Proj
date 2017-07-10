#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <ctype.h>
struct tnode {
char info[20];
char link[20];
struct tnode *left, *right;
};
struct store{
	char keyword[20];
	char link[20];
};
typedef struct tnode TREE;
TREE* create(char*,char*);
void lexins(TREE **,struct store);
void search(TREE *root, char item[10]);
int strcicmp(char const *a, char const *b)
{
    for (;; a++, b++) {
        int d = tolower(*a) - tolower(*b);
        if (d != 0 || !*a)
            return d;
    }
}
int main(void)
{
 FILE *fp,*fp1,*fp2;
 TREE *root=NULL;
 char query[20];
 struct store data;
 fp = fopen("Final.bin", "r");
while(fread(&data,sizeof(struct store),1,fp)) {
 //	printf("%s,%s\n",data.keyword,data.link);
//	fread(&data,sizeof(struct store),1,fp);
 //      strcpy(data.keyword,"geek");
	lexins(&root,data);
	/*strcpy(data.keyword,"world");
	lexins(&root,data);*/
 }
 fclose(fp);
 /*printf("%s",root->info);
 printf("%s,%s",root->right->info,root->left->info);
 strcpy(query,"hello");*/
 fp1=fopen("query.txt","r");
 while(fgets(query,20,fp1)){
 search(root,query);
 }
 fclose(fp1);
 
 
}

TREE* create(char *x,char *y)
{ TREE *new;
  new = (TREE *)(malloc(sizeof(TREE)));
  strcpy(new->info,x);
  strcpy(new->link,y);
  new->left=NULL;
  new->right=NULL;
  return new;
}

void lexins(TREE **root, struct store data)
{ TREE *new;
  int flag=1;
  TREE *temp=*root;
  new=create(data.keyword,data.link);
  if(*root==NULL)
  	*root=new;
  else{
		while(flag){
			if(strcicmp(new->info,temp->info)<0){
				if(temp->left==NULL){
					temp->left=new;
					flag=0;		
				}
				else
					temp=temp->left;
			}
			else{
				if(temp->right==NULL){
					temp->right=new;
					flag=0;	
				}
				else
					temp=temp->right;
			}
		}
		
	}
 }
void search(TREE *root, char item[20])
{
        FILE *fp2;

fp2=fopen("ds2.txt","a");
   TREE *save,*ptr=root;
   
    while( ptr!= NULL)
    {
        if (strcicmp(item,ptr->info)==0)
        {
          fputs(item,fp2);
          fputs(",",fp2);
          fputs(ptr->link,fp2);
          fputs("\n",fp2);

        }
        if(strcicmp(item,ptr->info)<0)
        {
            save = ptr;
            ptr = ptr->left;
        }
        else
        {
            ptr = ptr->right;
        }
    }
fclose(fp2);
}