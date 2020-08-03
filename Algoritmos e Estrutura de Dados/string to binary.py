def str_to_bin(string):
    binario = ''
    for i in string:
        binario += bin(ord(i))[2::] + ' '
    return binario

text = str(input("Entre com um texto: "))
binary = str_to_bin(text)
print(binary)