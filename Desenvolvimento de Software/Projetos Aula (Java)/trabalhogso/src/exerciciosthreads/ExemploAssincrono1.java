package exerciciosthreads;

import java.util.ArrayList;
import java.util.List;

public class ExemploAssincrono1 {
	
	private static int varCompartilhada = 0;
    private static final Integer QUANTIDADE = 400;
    private static final List<Integer> VALORES = new ArrayList<>();
  
    public static void main(String[] args) {
  
        Thread t1 = new Thread(new Runnable() {
            @Override
            public void run() {
            	int soma = 0;
            	int soma1 = 0;
            	for (int i = 0; i < 99; i++) {
                    VALORES.add(++varCompartilhada);
                    soma += i;
                }
            	soma1 = soma;
            	System.out.println("Soma dos valores da thread 1: " + soma1);
            }
        });
  
        Thread t2 = new Thread(new Runnable() {
            @Override
            public void run() {
            	int soma = 0;
            	int soma2 = 0;
            	for (int i = 100; i < 199; i++) {
                    VALORES.add(++varCompartilhada);
                    soma += i;
                }
            	soma2 = soma;
            	System.out.println("Soma dos valores da thread 2: " + soma2);
            }
        });
  
        Thread t3 = new Thread(new Runnable() {
            @Override
            public void run() {
            	int soma = 0;
            	int soma3 = 0;
            	for (int i = 200; i < 299; i++) {
                    VALORES.add(++varCompartilhada);
                    soma += i;
                }
            	soma3 = soma;
            	System.out.println("Soma dos valores da thread 3: " + soma3);
            }
        });
        
        Thread t4 = new Thread(new Runnable() {
            @Override
            public void run() {
            	int soma = 0;
            	int soma4 = 0;
            	for (int i = 300; i < 399; i++) {
                    VALORES.add(++varCompartilhada);
                    soma += i;
                }
            	soma4 = soma;
            	System.out.println("Soma dos valores da thread 4: " + soma4);
            }
        });
  
        t1.start();
        t2.start();
        t3.start();
        t4.start();
  
        try {
            t1.join();
            t2.join();
            t3.join();
            t4.join();
        } catch (InterruptedException ex) {
            ex.printStackTrace();
        }
  
        int somatotal = 0;
        for (Integer valor : VALORES) {
            somatotal += valor;
        }
        System.out.println("Soma dos valores: " + somatotal);

    }
}