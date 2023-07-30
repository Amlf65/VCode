public class Pantalla {
    private float Pulgadas;
    private String Resolucion;
    private int Pixeles;

    public Pantalla(float pulgadas, String resolucion, int pixeles) 
    { Pulgadas= pulgadas;
    Resolucion = resolucion; 
    Pixeles = pixeles;
    }
    public void mostrar() { 
        System.out.println(); 
        System.out.println("PANTALLA");
        System.out.println("Pulgadas : " + Pulgadas);
        System.out.println("Resolución :" + Resolucion); 
        System.out.println("Pixeles : " + Pixeles +  "ppi");
    }
}

