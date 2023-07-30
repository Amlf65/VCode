
//   Ejercicio 1:  Programación orientada a objetos, que constará de los puntos siguientes:

//   f)	Crearemos dos clases que hereden de Usuario, una clase Alumno con la propiedad diferenciada nota y una clase Docente con la propiedad diferenciada cargo.
  public class Docente extends Usuario {
  private String cargo; 

//   g)	En ambas clases, el constructor será de tres parámetros

  public Docente (String nombre, String clave, String cargo){
      super(nombre, clave);
      this.cargo=cargo;
  }
  
//   h)	Crearemos los métodos setters y getters necesarios para cada propiedad en cada clase

  public void setcargo(String cargo){
  this.cargo=cargo;
  }
  public String getcargo(){
  return cargo;
  }
  
//   i)	Crearemos un método mostrar donde se presentarán ambos datos precedidos por sus respectivas etiquetas

  public void mostrar(){
  super.mostrar();
  System.out.println("Cargo:" + cargo);
  }
}
