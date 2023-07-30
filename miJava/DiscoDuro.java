
public class DiscoDuro { 
    private int Velocidad; 
    private int Capacidad; 
    private float TiempoAcceso;

    public DiscoDuro(int velocidad, int capacidad, float tiempoAcceso){ 
        Velocidad= velocidad;
        Capacidad= capacidad; 
        TiempoAcceso = tiempoAcceso;
    }
    
    public void mostrar() { 
        System.out.println(); 
        System.out.println("DISCO DURO"); 
        System.out.println("Velocidad: " + Velocidad + " rpm" ) ;
        System.out.println("Capacidad: " + Capacidad + " GB");
        System.out.println("Tiempo de acceso :" + TiempoAcceso + "ms");
    }
}    
