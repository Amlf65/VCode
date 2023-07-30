package animal2;
public abstract class Animal2 {
    private String Nombre;
    private String Habitat;
    private String Reino;

    public Animal2(String nombre){
        Nombre=nombre;
    }

    public String getHabitat(){
        return Habitat;
    }
    public void setHabitat(String habitat){
        Habitat=habitat;
    }

    public String getReino(){
        return Reino;
    }
    public void setReino(String reino){
        Reino=reino;
    }

    public String getNombre(){
        return Nombre;
    }
    public void setNombre(String nombre){
        Nombre=nombre;
    }

    public void mostrar(){
        System.out.println();
        System.out.println("Nombre: " + Nombre);
        System.out.println("Reino: " + Reino);
        System.out.println("Habitat: " + Habitat);
    }

}
