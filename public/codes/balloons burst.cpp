#include <stdio.h>
#define SIZEN 202
int N;
int L;
int Color[SIZEN];
int Path[SIZEN][SIZEN];
int Ans;
void initCase(){
	int x, y;
	for (x = 0; x < N; x++){
		Color[x] = 0;
		for (y = 0; y < N; y++){
			Path[x][y] = 0;
		}
	}
	Ans = 1;
}
void readCase(){
	int x, y;
	scanf("%d", &L);
	while (L--){
		scanf("%d %d", &x, &y);
		Path[x][y] = Path[y][x] = 1;
	}
}
void solve(int x, int c){
	int y;
	if (0 == Color[x]){
		Color[x] = c;
		for (y = 0; y < N; y++){
			if (Path[x][y]){
				if (1 == c)
					solve(y, 2);
				else
					solve(y, 1);
			}
		}
	}
	else if(c!= Color[x]) {
		Ans = 0;
	}
}
void solveCase(){
	int x;
	for (x = 0; x < N; x++)
		if (0 == Color[x]){
			solve(x, 1);
		}
}

void printCase(){
	if (1 == Ans)
		printf("BICOLORABLE.\n");
	else
		printf("NOT BICOLORABLE.\n");
}

int main(){
	while (1 == scanf("%d", &N)){
		if (0 == N) break;
		initCase();
		readCase();
		solveCase();
		printCase();
	}
	return 0;
}