import java.util.ArrayList;

import animal2.Animal2;

public class Pez extends Animal2{
    private ArrayList<Pez> Incompt;
    public Pez (String nombre, ArrayList<Pez> incompt){
        super(nombre);
        Incompt = incompt;
    }
    public void mover(){
        System.out.println("El pez se mueve");
    }
    public void comer(){
        System.out.println("El pez come");
    }

    public void mostrar(){
        super.mostrar();
        for (int i = 0; i < Incompt.size(); i++)
            System.out.println(Incompt.get(i).getNombre());
    }
}
