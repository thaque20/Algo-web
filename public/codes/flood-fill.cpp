#include <stdio.h>

#define SIZE 102

char Grid[SIZE][SIZE];
int Ans;
int M,N;

void readCase(){
  int x; 
  for(x=0;x<M;x++) {
      scanf("%s",Grid[x]);
  }
}

void solve(int x,int y){
    Grid[x][y]='*';
    if(x-1>=0 && y-1>=0 && '@' == Grid[x-1][y-1])
        solve(x-1,y-1);
    if(x+1<M && y-1>=0 && '@' == Grid[x+1][y-1]) 
        solve(x+1,y-1);
    if(x-1>=0 && y+1<N && '@' == Grid[x-1][y+1]) 
        solve(x-1,y+1);
    if(x+1<M && y+1<N && '@' == Grid[x+1][y+1]) 
        solve(x+1,y+1);
    if(y+1<N && '@' == Grid[x][y+1]) 
        solve(x,y+1);
    if(y-1>=0 && '@' == Grid[x][y-1]) 
        solve(x,y-1);
    if(x+1<M && '@' == Grid[x+1][y]) 
        solve(x+1,y);
    if(x-1>=0 && '@' == Grid[x-1][y]) 
        solve(x-1,y);
}
void solveCase(){
    int x,y;
    Ans = 0;
    for(x=0;x<M;x++) {
        for(y=0;y<N;y++){
            if('@'==Grid[x][y]){
                solve(x,y);
                Ans++;
            }
        }
    }
}
int main(){
    while(2 == scanf("%d %d",&M,&N)){
       if(0 == M)
          break;
        readCase();
        
        solveCase();
        printf("%d\n",Ans);
    }
    
    return 0;
}