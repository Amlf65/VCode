package Genericidad;

import java.util.ArrayList;

public class ElementosGenerico<T> {
    private ArrayList<T> Lista;
    public ElementosGenerico(ArrayList<T> lista){
        Lista=lista;
    }
    public ArrayList<T> getDato(){
        return Lista;
    }
    public void setDato(T elemento, int pos) {
        Lista.add (pos, elemento);
    }
    public void mostrar() {
        for (int i = 0; i < Lista.size(); i++) {
            System.out.println(Lista.get(i) + " ");
        }
        System.out.println();
    }
}
