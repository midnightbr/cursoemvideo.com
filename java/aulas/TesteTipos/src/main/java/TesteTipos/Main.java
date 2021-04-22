/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package TesteTipos;

/**
 *
 * @author marco
 */
public class Main {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        int idade = 30;
        // Metodo errado de conversão do tipo int para string
        // String valor = idade;
        // Metodo correto de converter uma variavel do tipo int em string
        String valor = Integer.toString(idade);
        System.out.println(valor + idade);
        
        String valor2 = "30";
        // Metodo errado de conversão do tipo string para int
        // int idade2 = valor;
        // int idade2 = (int)valor;
        // Metodo correto de converter uma variavel do tipo string em int
        int idade2 = Integer.parseInt(valor2);
        System.out.print(idade2 + valor2);
    }
    
}
