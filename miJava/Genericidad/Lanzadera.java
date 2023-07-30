package Genericidad;

import java.util.ArrayList;
import java.util.Arrays;

public class Lanzadera {
    public static void main(String[] args) {
        ArrayList<Integer> enteros = new ArrayList<Integer>(Arrays.asList(1,2,3));
        ArrayList<String> cadenas = new ArrayList<String>(Arrays.asList("AA","BB","CC"));

        ElementosGenerico<Integer> listaEnteros= new ElementosGenerico<Integer>(enteros);
        ElementosGenerico<String> listaCadenas= new ElementosGenerico<String>(cadenas);

        listaEnteros.mostrar();
        listaCadenas.mostrar();
       
    }
}
