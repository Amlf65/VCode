public class cinco {
    public static void main(String[] args) {
        //funciones con y sin parámetros
        gato();
        System.out.println(entero(3));
    }
    public static void gato(){
        int variable = 2;
        System.out.println("miau "+variable);
    }
    public static int entero( int valor){
        int variable=2*valor;
        return variable;
    }
}
