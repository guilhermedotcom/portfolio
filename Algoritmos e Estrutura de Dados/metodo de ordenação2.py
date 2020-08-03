mat=[[1,7,3,4,5],[4,7,1,8,9],[2,9,1,8,5]]
vet=[0,0,0]
for i in range (0,3,1):
    for j in range (0,5,1):
        vet[i]=vet[i]+mat[i][j]
for i in range(0,3,1):
    for j in range(0,3,1):
        for j in range(0,5,1):
            print (mat[i][j])
        print(vet[i])
            