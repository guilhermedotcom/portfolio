# Função vale transporte
def valetransporte (salbruto, valet):
    if valet == 1:
        if salbruto <= 3300:
            valorvt=salbruto*0.06
        else:
            valorvt=198
        return(valorvt)
# Função plano de saúde
def plano_de_saude (pds,pds1):
    if pds==1:
        if pds1 ==1:
            valorpds=float((quantdep+1)*89.9)
        elif pds1 ==2:
            valorpds=float((quantdep+1)*119.9)
    return(valorpds)
# Função FGTS
def fgts(salbruto,grat):
    fgts=(salbruto + grat) * 0.08
    return(fgts)
# Função do INSS
def inss(salbruto,grat):
    if ((salbruto + grat) < 1751.81):
        inss=(salbruto+grat)*0.08
    elif ((salbruto+grat) < 2919.72):
        inss=(salbruto+grat)*0.09
    elif ((salbruto+grat) < 5839.45):
        inss=(salbruto+grat)*0.11
    else:
        inss=5839.45*0.11
    return(inss)
# Função do Salário Família
def salariofamilia(sb,grati,qtdep3):
    if ((sb+grati) < 907.78):
        salfamilia=(qtdep3*48.54)
    elif ((sb+grati) < 1364.44):
        salfamilia=(qtdep3*32.80)
    else:
        salfamilia=0
    return(salfamilia)
# Função do Imposto de Renda
def impostoderenda(quantdep2,sb,grati,inss):
        if (sb+grati <= 1903.98):
            ir=0
        elif (sb+grati <= 2826.65):
            ir=(sb+grati-inss)
            ir=ir-quantdep2*189.59
            ir=ir*7.5/100-142.80
            if ir < 0:
                ir=0
        elif (sb+grati <= 3751.05):
            ir=(sb+grati-inss)-quantdep2*189.59
            ir=ir*0.15-354.80
            if ir < 0:
                ir=0
        elif (sb+grati <= 4664.68):
            ir=(sb+grati-inss)-quantdep2*189.59
            ir=ir*0.225-636.13
            if ir < 0:
                ir=0
        else:
            ir=(sb+grati-inss)-quantdep2*(189.59)
            ir=ir*0.275-869.36
            if ir < 0:
                ir=0
        return(ir)
# Função Salário líquido
def salarioliq(sb,grati,vt,pds,inss,salfam,ir):
    saliq=(sb+grati+salfam)-(vt+pds+inss+ir)
    return(saliq)
    
 # Leitura de dados
nome=(input("Escreva seu nome:"))
quantdep=int(input("Quantidade de dependentes:"))
if quantdep > 0:                # Até 10 dependentes
    nomedep=[0,0,0,0,0,0,0,0,0,0,0]
    idadedep=[0,0,0,0,0,0,0,0,0,0,0]
    quantdep2=0 # quantidade de dependentes até 21 anos
    quantdep3=0 # quantidade de dependentes até 14 anos
    for i in range (0,quantdep,1):
        nomedep[i]=input("Digite o nome do dependente:") 
        idadedep[i]=int(input("Digite a idade do dependente:"))
        if idadedep[i] < 22:
            quantdep2=quantdep2+1
        if idadedep[i] < 15:
            quantdep3=quantdep3+1
salbruto=float(input("Insira o salário bruto:"))
grat=float(input("Insira sua gratificação salarial:"))
valet=int(input("Utiliza vale transporte [1] SIM, [2] NÃO:"))
pds=int(input("Utilizará o plano de saúde da empresa [1] SIM, [2] NÃO:"))
if pds == 1: # Verifica qual plano de saude escolhido
   pds1=int(input("[1] Enfermaria 89,90 por pessoa, [2] Quarto 119,90 por pessoa:"))
else:
    pds=2
fgts=fgts(salbruto,grat)
inss=inss(salbruto,grat)
valorvt=valetransporte(salbruto, valet)
planodesaude=plano_de_saude(pds,pds1)
salfamilia=salariofamilia(salbruto,grat,quantdep3)
ir=impostoderenda(quantdep2,salbruto,grat,inss)
saliq=salarioliq(salbruto,grat,valorvt,planodesaude,inss,salfamilia,ir)
print("Funcionário:",nome)      # Nome do funcionário
print("Dependentes:")        
for i in range (0,quantdep,1): # Digitar nome e idade dos dependentes
    print(nomedep[i],idadedep[i],"anos")
print("INSS:",round(inss,2))
print("FGTS:",round(fgts,2))
print("Vale transporte:",round(valorvt,2))
print("Plano de saude:",round(planodesaude,2))
print("Salário família:",round(salfamilia,2))
print("Imposto de renda:",round(ir,2))
print("Salário Líquido:",round(saliq,2))
