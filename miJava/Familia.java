import java.util.ArrayList;

public class Familia {
    private ArrayList<Persona> miembros;

    public Familia() {
        miembros = new ArrayList<Persona>();
    }

    public void agregar(Persona p){
        miembros.add(p);
    }

    public void mostrarFamilia(){
        for (int i=0; i < miembros.size(); i++)
            miembros.get(i).mostrar();
    }
}
