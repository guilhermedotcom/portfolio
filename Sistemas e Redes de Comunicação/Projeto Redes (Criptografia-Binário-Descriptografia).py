## Criptografar
def criptografia(ordemCorreta, ordemCriptografrar, indiceCriptografrar,criptografado,textoCriptografado,texto ):
    for cont in range(len(texto)):
        indiceCriptografar.append(ordemCorreta.index(texto[cont]))
        criptografado.append(ordemCriptografar[indiceCriptografar[cont]])

        textoCriptografado = textoCriptografado + criptografado[cont]

    print("Texto informado pelo usuario: (", texto, ") \n")
    print("Texto criptografado: (", textoCriptografado, ")")
    
    return(textoCriptografado)

## Texto para binário
def bin_to_str(binario):
    binario = str(binario)
    caractere = ''
    string = ''
    tamanho = len(binario)
    k = 1
    for j in binario:
        if j != ' ':
            caractere += j
            if k == tamanho:
                string += chr(int(caractere, 2))
        else:
            string += chr(int(caractere, 2))
            caractere = ''  # 0x101100110
        k += 1
    return string

## Binário para texto
def str_to_bin(string):
    binario = ''
    for i in string:
        binario += bin(ord(i))[2::] + ' '
    return binario

## Descriptografar
def descriptografia(ordemCriptografarr, ordemCorretaa, indiceeCriptografrar,criptografadoo,textoDescriptografado,textoo):
    for cont in range(len(textoo)):
        indiceeCriptografar.append(ordemCriptografarr.index(textoo[cont]))
        criptografadoo.append(ordemCorretaa[indiceeCriptografar[cont]])

        textoDescriptografado = textoDescriptografado + criptografadoo[cont]

    print("Texto criptografado informado pelo usuario: (", textoo, ") \n")
    print("Texto descriptografado: (", textoDescriptografado, ")")
    
    return(textoDescriptografado)
      
    
ordemCorreta = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","1","2","3","5","6","7","8","9","0", " "]
ordemCriptografar = ["a","e","g","j","o","q","u","w","y","x","z","v","t","s","n","m","k","l","h","i","f","d","c","p","r","b","A","E","G","J","O","Q","U","W","Y","X","Z","V","T","S","N","M","K","L","H","I","F","D","C","P","R","B","1","5","7","8","4","2","9","3","6", " "]
indiceCriptografar = []
criptografado = []
textoCriptografado = ""
texto = input("Entre com um texto: ")
x=criptografia(ordemCorreta, ordemCriptografar, indiceCriptografar,criptografado,textoCriptografado,texto )
print(textoCriptografado)
text = str(input("Entre com um texto: "))
binary = str_to_bin(text)
print("O texto virou o seguinte binário:",binary)
binary = str(input("Entre com um binario: "))
text = bin_to_str(binary)
print("O binário virou o seguinte texto:",text)
textoo = input("Entre com um texto criptografado: ")
ordemCriptografarr = ["a","e","g","j","o","q","u","w","y","x","z","v","t","s","n","m","k","l","h","i","f","d","c","p","r","b","A","E","G","J","O","Q","U","W","Y","X","Z","V","T","S","N","M","K","L","H","I","F","D","C","P","R","B","1","5","7","8","4","2","9","3","6", " "]
ordemCorretaa = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","1","2","3","5","6","7","8","9","0", " "]
indiceeCriptografar = []
criptografadoo = []
textoDescriptografado = ""
z=descriptografia(ordemCriptografarr, ordemCorretaa, indiceeCriptografar,criptografadoo,textoDescriptografado,textoo)
print(textoDescriptografado)
