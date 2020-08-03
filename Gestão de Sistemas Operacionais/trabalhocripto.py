def criptografarRailFence(texto, chave): 

	rail = [['\n' for i in range(len(texto))] 
				for j in range(chave)] 
	 
	dir_down = False
	row, col = 0, 0
	
	for i in range(len(texto)): 
		if (row == 0) or (row == chave - 1): 
			dir_down = not dir_down 
		
		rail[row][col] = texto[i] 
		col += 1
		
		if dir_down: 
			row += 1
		else: 
			row -= 1

	result = [] 
	for i in range(chave): 
		for j in range(len(texto)): 
			if rail[i][j] != '\n': 
				result.append(rail[i][j]) 
	return("" . join(result)) 

def descriptografarRailFence(cifra, chave): 
	rail = [['\n' for i in range(len(cifra))] 
				for j in range(chave)] 
	
	dir_down = None
	row, col = 0, 0
	
	for i in range(len(cifra)): 
		if row == 0: 
			dir_down = True
		if row == chave - 1: 
			dir_down = False
		
		rail[row][col] = '*'
		col += 1
		
		if dir_down: 
			row += 1
		else: 
			row -= 1
			
	index = 0
	for i in range(chave): 
		for j in range(len(cifra)): 
			if ((rail[i][j] == '*') and
			(index < len(cifra))): 
				rail[i][j] = cifra[index] 
				index += 1
		
	result = [] 
	row, col = 0, 0
	for i in range(len(cifra)): 
		 
		if row == 0: 
			dir_down = True
		if row == chave-1: 
			dir_down = False
			
		if (rail[row][col] != '*'): 
			result.append(rail[row][col]) 
			col += 1
			
		if dir_down: 
			row += 1
		else: 
			row -= 1
	return("".join(result)) 

print('1º Texto para ser criptografado: O rato roeu a roupa do rei de roma , Chave: 2 ')
print('2º Texto para ser criptografado: O sapo não lava o pé , Chave: 3 ')
print('3º Texto para ser criptografado: Atirei o pau no gato , Chave: 3 ')
print('1º Texto para ser descriptografado: Ort ouaruad e erm aore  op orid oa , Chave: 2 ')
print('2º Texto para ser descriptografado: Opãao  aonolv  és  ap , Chave: 3 ')
print('3º Texto para ser descriptografado: Ae  gtriopun aoi aot , Chave: 3 ')

print('Executando o código...')
if __name__ == "__main__": 
	print(criptografarRailFence("O rato roeu a roupa do rei de roma", 2)) 
	print(criptografarRailFence("O sapo não lava o pé", 3)) 
	print(criptografarRailFence("Atirei o pau no gato", 3)) 
	
	print(descriptografarRailFence("Ort ouaruad e erm aore  op orid oa", 2)) 
	print(descriptografarRailFence("Opãao  aonolv  és  ap", 3)) 
	print(descriptografarRailFence("Ae  gtriopun aoi aot", 3)) 
