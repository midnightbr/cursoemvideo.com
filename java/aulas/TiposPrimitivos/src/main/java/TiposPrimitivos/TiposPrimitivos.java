/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package TiposPrimitivos;

import java.util.Scanner;

/**
 *
 * @author Marcos Henrique
 */
public class TiposPrimitivos {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        
        Scanner teclado = new Scanner(System.in, "UTF-8");
        System.out.print("Digite o nome do aluno: ");
        String nome = teclado.nextLine();
        System.out.print("Digite a nota do aluno: ");
        float nota = teclado.nextFloat();
        teclado.close();
        System.out.format("A nota de %s é %.1f", nome, nota);
        
        // float nota = 8.5f;
        // System.out.println("A nota e " + nota);
        // String name = "Marcos";
        // Metodos para escrever na tela
        // System.out.printf("A nota de %s e %.2f \n", name, nota);
        // System.out.format("A nota de %s é %.2f", name, nota);
        // \n é usado para pular uma linha
    }
    
}
