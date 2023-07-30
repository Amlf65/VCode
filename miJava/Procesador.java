
public class Procesador { 
    private int Nucleos; 
    private float Velocidad; 
    private int Bits;

    public Procesador(int nucleos, float velocidad, int bits) { 
        Nucleos = nucleos;
        Velocidad = velocidad; 
        Bits= bits;   
    }
    public void mostrar() { 
        System.out.println(); 
        System.out.println("PROCESAOOR");
        System.out.println("Núcleos :" +  Nucleos); 
        System.out.println("Velocidad :" +  Velocidad + "GHz");
        System.out.println("Bits: "+   Bits);
    }
}

