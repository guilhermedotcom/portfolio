package exerciciosthreads;

public class Tarefa extends Thread {
	  
    private final long valorInicial;
    private final long valorFinal;
    private long total = 0;
  
    //m�todo construtor que receber� os par�metros da tarefa
    public Tarefa(int valorInicial, int valorFinal) {
        this.valorInicial = valorInicial;
        this.valorFinal = valorFinal;
    }
  
    //m�todo que retorna o total calculado
    public long getTotal() {
        return total;
    }
  
    /*
     Este m�todo se faz necess�rio para que possamos dar start() na Thread 
     e iniciar a tarefa em paralelo
     */
    @Override
    public void run() {
        for (long i = valorInicial; i <= valorFinal; i++) {
            total += i;
        }
    }
}