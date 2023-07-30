public class Memoria { 
    private int Tamanyo; 
    private String Tecnologia; 
    private int Velocidad;

    public Memoria(int tamanyo, String tecnologia, int velocidad) {
    super();
    Tamanyo = tamanyo; 
    Tecnologia = tecnologia; 
    Velocidad = velocidad;
    }
    public void mostrar(){
        System.out.println(); 
        System.out.println("MEMORIA"); 
        System.out.println("Tamaño: " + Tamanyo + " GB" ) ;
        System.out.println("Tecnología: " + Tecnologia + " GB");
        System.out.println("Velocidad :" + Velocidad + "MHz");
     }
}
    

    


    