def potencia(b,e):
    res=b
    while (e>1):
        res=res*b
        e=e-1
    return(res)
    
def potrec(b,e):
    if e==0:
        res=1
    else:
        res = b * potrec(b, e-1)
    return(res)
        
    
    
    
    
    
    
base=int(input("Digite a base:"))
expo=int(input("Digite o expoente:"))
pot=potencia(base,expo)
pot2=potrec(base,expo)
print(pot)
print(pot2)