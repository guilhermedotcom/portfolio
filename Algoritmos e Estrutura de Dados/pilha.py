# a quantidade de zeros dentro do vetor vai determinar o tamanho da pilha.
# a mensagem notificando se a pilha está cheia ou vazia eu não consegui fazer. :/
pilha=[0,0,0]
for i in range (3):
    if pilha[i]!=[]:
        pilha[i]=(int(input("Digite um valor para a pilha:")))
print(pilha)

desempilha=int(input("Quer adicionar e retirar um item na pilha? [1] SIM, [2] NÃO:"))

if desempilha == 1:
   desempilha=pilha
   ultimonumero=desempilha.pop()
   pilha.append((int(input("Digite um valor:"))))
   print("o ultimo número retirado da pilha foi:" +str (ultimonumero))
   print(pilha)
else:
    print(pilha)


    