package Sobrecarga;

public class Lanzadera {
    public static void main(String[] args) {
        Libro libro1 = new Libro();
        Libro libro2 = new Libro("Título","Autor",2013);
        libro1.setEditorial();
        libro2.setEditorial("Editorial");
        libro1.mostrar();
        libro2.mostrar();
    }
}
