package Sobrecarga;

public class Libro {
    private String Titulo;
    private int Edicion;
    private String Editorial;
    private String Autor;

    public Libro() {
        Titulo = "Desconocido";
        Autor = "Desconocido";
        Edicion = 1900;
    }
    public Libro(String titulo, String autor, int edicion) {
        Titulo = titulo;
        Autor = autor;
        Edicion = edicion;
    }

    void setEditorial(String editorial){
        Editorial=editorial;
    }
    void setEditorial(){
        Editorial="desconocida";
    }
    public void mostrar() {
        System.out.println();
        System.out.println("Título: " + Titulo);
        System.out.println("Autor: " + Autor);
        System.out.println("Edicion: " + Edicion);
        System.out.println("Editorial: " + Editorial);
    }

}
