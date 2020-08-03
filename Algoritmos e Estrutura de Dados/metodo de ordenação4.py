mat=[[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0]]
vet=[0,0,0]
for i in range (0,3,1):
    for j in range (0,5,1):
        mat[i][j]=int(input("Digite um valor:"))
        vet[i]=vet[i]+mat[i][j]
for i in range(0,3,1):
    for j in range(0,3,1):
        for j in range(0,5,1):
            print (mat[i][j])
        print(vet[i])
            