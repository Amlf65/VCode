
//   Ejercicio 1:  Programación orientada a objetos, que constará de los puntos siguientes:

//   f)	Crearemos dos clases que hereden de Usuario, una clase Alumno con la propiedad diferenciada nota y una clase Docente con la propiedad diferenciada cargo.
  public class Alumno extends Usuario { 
  private int nota;

//   g)	En ambas clases, el constructor será de tres parámetros
  public Alumno (String nombre, String clave, int nota){
      super(nombre, clave);
      this.nota=nota;
  }

//   h)	Crearemos los métodos setters y getters necesarios para cada propiedad en cada clase
  public void setnota(int nota){
  this.nota=nota;
  }
  public int getnota(){
  return nota;
  }

//   i)	Crearemos un método mostrar donde se presentarán ambos datos precedidos por sus respectivas etiquetas
  public void mostrar(){
  super.mostrar();
  System.out.println("Nota:" + nota);
  }
  }