public class Persona {
    private String Nombre;
    private String Apellidos;
    private String FechaNacimiento;
    private String DNI;
    private int Edad;
    private String Sexo;

    public Persona (){
        
    }

    public Persona (String nombre, String apellidos){
        Nombre=nombre;
        Apellidos=apellidos;
    }

    public String getNombre(){
        return Nombre;
    }
    public void setNombre(String nombre){
        Nombre=nombre;
    }
    public String getApellidos(){
        return Apellidos;
    }
    public void setApellidos(String apellidos){
        Apellidos=apellidos;
    }
     public String getFechaNacimiento(){
        return FechaNacimiento;
    }
    public void setFechaNacimiento(String fechanacimiento){
        FechaNacimiento=fechanacimiento;
    }
     public String getDNI(){
        return DNI;
    }
    public void setDNI(String dni){
        DNI=dni;
    }
     public int getEdad(){
        return Edad;
    }
    public void setEdad(int edad){
        Edad=edad;
    }
     public String getSexo(){
        return Sexo;
    }
    public void setSexo(String sexo){
        Sexo=sexo;
    }
    public void mostrar(){
        System.out.println();
        System.out.println("Nombre: " + Nombre);
        System.out.println("Apellidos: " + Apellidos);
        System.out.println("DNI: " + DNI);
        System.out.println("Fecha de nacimiento: " + FechaNacimiento);
        System.out.println("Edad: " + Edad);
        System.out.println("Sexo: " + Sexo);
    }
}
