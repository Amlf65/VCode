public class Mascota extends Perro{
    private String Nombre;
    public Mascota(String raza, String nombre){
        super(raza);
        Nombre=nombre;
    }
    public void comer(){
        System.out.println("La mascota " + Nombre + " come");
    }
}
