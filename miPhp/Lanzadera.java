
//   Ejercicio 1:  Programación orientada a objetos, que constará de los puntos siguientes:

//   j)	Para finalizar crearemos una clase Lanzadera, donde crearemos un objeto de cada clase y llamaremos a la función mostrar de cada uno.
  public class Lanzadera {
      public static void main(String[] args) {
          Usuario usuario1 = new Usuario ("Jose","1234");
          Alumno alumno1 = new Alumno ("Ana","21455",7);
          Docente docente1 = new Docente ("Raul","356889","Director");
          
          usuario1.mostrar();
          alumno1.mostrar();
          docente1.mostrar();
  }
}