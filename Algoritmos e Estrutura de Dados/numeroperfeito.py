def numeropfto(n):

    cont=1 
    soma=0
    
    while (cont<n):
        if (n%cont)==0:
            soma = soma + cont
            cont = cont + 1
        else:
            cont = cont + 1    
    return (soma)     
  
num = int(input("digite o numero: "))
numeroperfeito=numeropfto(num)
if numeroperfeito==num:
  print ("O número é perfeito")
else:
  print ("O número não é perfeito")