package exerciciosthreads;

public class Exemplo {
	  
    public static void main(String[] args) {
        //cria tr�s tarefas
        Tarefa t1 = new Tarefa(0, 1000);
        t1.setName("Tarefa1");
        Tarefa t2 = new Tarefa(1001, 2000);
        t2.setName("Tarefa2");
        Tarefa t3 = new Tarefa(2001, 3000);
        t3.setName("Tarefa3");
  
        //inicia a execu��o paralela das tr�s tarefas, iniciando tr�s novas threads no programa
        t1.start();
        t2.start();
        t3.start();
  
        //aguarda a finaliza��o das tarefas
        try {
            t1.join();
            t2.join();
            t3.join();
        } catch (InterruptedException ex) {
            ex.printStackTrace();
        }
  
        //Exibimos o somat�rio dos totalizadores de cada Thread
        System.out.println("Total: " + (t1.getTotal() + t2.getTotal() + t3.getTotal()));
    }
}