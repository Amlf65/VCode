// <?php
//   Ejercicio 1:  Programación orientada a objetos, que constará de los puntos siguientes:

//   a)	Crearemos una clase llamada Usuario.
  public class Usuario {
  
 
//   b)	Las propiedades de la clase serán nombre y clave, ambas cadenas encapsuladas
  private String nombre;
  private String clave;
  
//   c)	El constructor será de dos parámetros
  public Usuario (String nombre, String clave){
      this.nombre=nombre;
      this.clave=clave;
  }
//   d)	 Crearemos los métodos setters y getters necesarios para las dos propiedades
  public String getnombre(){
  return nombre;
  }
  public void setnombre(String nombre){
  this.nombre=nombre;
  }
  public String getclave(){
  return clave;
  }
  public void setclave(String clave){
  this.clave=clave;
  }
//   e)	Crearemos un método mostrar donde se presentarán ambos datos precedidos por sus respectivas etiquetas
  public void mostrar(){
  System.out.println("Nombre:" + nombre);
  System.out.println("Clave:" + clave);
  }
} // fin de clase
 