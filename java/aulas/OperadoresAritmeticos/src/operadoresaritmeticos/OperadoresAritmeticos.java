/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package operadoresaritmeticos;

/**
 *
 * @author Marcos Henrique
 */
public class OperadoresAritmeticos {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        int n1 = 3;
        int n2 = 5;
        float m = (n1 + n2) / 2;
        System.out.println("A média é igual a " + m);
        
        int numero = 10;
        int valor = 4 + numero--;
        System.out.println(valor);
        System.out.println(numero);
        
        int x = 4;
        x += 2;
        System.out.println(x);
        
        float v = 8.9f;
        //Arredondando para baixo
        int ar = (int) Math.floor(v);
        System.out.println(ar);
        //Arredondando para cima
        v = 5.2f;
        ar = (int) Math.ceil(v);
        System.out.println(ar);
        //Arredondando normalmente
        v = 7.6f;
        ar = (int) Math.round(v);
        System.out.println(ar);
        
        //Gerando valores aleatorios entre 0 e 1
        double ale = Math.random();
        System.out.println(ale);
        
        //Gerando valores aleatorios entre 5 e 10
        int n = (int) (5 + ale * (10 - 5));
        System.out.println(n);
    }
    
}
