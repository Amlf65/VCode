public class Ordenador { 
    private Pantalla Screen; 
    private Procesador Cpu; 
    private Memoria Memoria; 
    private DiscoDuro Disco;
    
    public Ordenador(Pantalla pantalla, Procesador cpu,
     Memoria memoria, DiscoDuro disco){
        Screen = pantalla;
        Cpu = cpu;
        Memoria = memoria;
        Disco = disco;
     }
     public void setScreen(Pantalla screen) {
        Screen = screen;
     }    
     public Procesador getCpu() { 
        return Cpu;
     }    
     public void setCpiu(Procesador cpu) { 
        Cpu = cpu;
     }
     public Memoria getMemoria() { 
        return Memoria;
     }
     public void setMemoria(Memoria memoria) {
        Memoria =   memoria;
     }
     public DiscoDuro getDisco() { 
        return Disco;
     }  
     public void setDisco(DiscoDuro disco){
        Disco = disco;
     }
     public void Mostrar(){
        System.out.println("CARACTERISTICAS DEL ORDENADOR");
        Screen.mostrar();
        Cpu.mostrar();
        Disco.mostrar();
        Memoria.mostrar();
     }
}