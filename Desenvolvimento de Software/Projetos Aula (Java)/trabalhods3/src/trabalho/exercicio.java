package trabalho;

import java.io.BufferedReader;
import java.io.FileNotFoundException;
import java.io.FileReader;

public class exercicio {

	public static void main(String[] args) {
		
		try {
			//Objeto para os dados
			FileReader arquivo = new FileReader("‪C:\\Guilherme\\textinho.txt");
			//Objeto para manipular o arquivo
			BufferedReader leitor = new BufferedReader(arquivo);
			String linha = "";
			while(linha != null) {
				linha = leitor.readLine();
				System.out.println(linha);
			}
		} catch (FileNotFoundException e) {
			// TODO Auto-generated catch block
			System.out.println("Ocorreu um erro, veja a mensagem." +e.getMessage());
		}
		
		catch (Exception e) {
			e.printStackTrace();
		}
		

	}

}
