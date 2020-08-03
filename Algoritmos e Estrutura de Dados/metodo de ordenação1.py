vet=[0,0,0,0,0,0]
for i in range (0,6,1):
    vet[i]=int(input("Digite um valor"))
for cont in range (5,-1,-1):
    for i in range (0,cont,1):
        if (vet[i]>vet[i+1]):
            aux=vet[i]
            vet[i]=vet[i+1]
            vet[i+1]=aux
for i in range(0,6,1):
    print(vet[i],"")