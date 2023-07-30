public abstract class Animal {
    private String Nombre;
    private String Habitat;
    private String Reino;

    abstract void Mover();
    abstract void Comer();

    public Animal(String nombre){
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

    void mostrar(){
        System.out.println();
        System.out.println("Nombre: " + Nombre);
        System.out.println("Reino: " + Reino);
        System.out.println("Habitat: " + Habitat);
    }

}
