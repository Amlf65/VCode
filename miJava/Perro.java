public class Perro implements IAnimal{
    private String Raza;

    public Perro (String raza){
        Raza=raza;
    }

    public String getRaza(){
        return Raza;
    }
    public void setNombre(String raza){
        Raza=raza;
    }

    public void mover(){
        System.out.println("El perro se mueve");
    }
    public void comer(){
        System.out.println("El perro come");
    }
}
