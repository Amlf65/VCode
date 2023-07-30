public class LanzaPersona {
    public static void main(String[] args) {
        Persona persona1 = new Persona("Antonio","GC");
        Persona persona2 = new Persona();
        Persona persona3 = new Persona("Isabel","LPP");

        persona2.setNombre("Rafael Luis");
        persona2.setApellidos("GLP");
        

        System.out.println("Nombre de persona 1: " + persona1.getNombre() + " " + persona1.getApellidos() );
        System.out.println("Nombre de persona 2: " + persona2.getNombre() + " " + persona2.getApellidos() );
        System.out.println("Nombre de persona 3: " + persona3.getNombre() + " " + persona3.getApellidos() );

    Familia familia =  new Familia();
    familia.agregar(persona1);
    familia.agregar(persona2);
    familia.agregar(persona3);

    familia.mostrarFamilia();
    }
}
