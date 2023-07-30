public class funcCadenas{
    public static void main(String[] args) {
        String cad = "Cadena de prueba";
        System.out.println("Cadena original: " + cad);
        System.out.println("charAt(3): " + cad.charAt(3));
        System.out.println("concat(\"cad2\"): " + cad.concat("cad2"));
        System.out.println("IndexOf('a'): " + cad.indexOf('a'));
        System.out.println("length: " + cad.length());
        System.out.println("trim: " + cad.trim());
        System.out.println("substring(3,6): " + cad.substring(3, 6));
    }
}