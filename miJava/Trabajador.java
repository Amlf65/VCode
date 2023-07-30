public class Trabajador extends Persona { 
    private String LugarTrabajo;
    private String NumSS;
    
    
    public Trabajador(String lugarTrabajo, String numSS, String nombre, String apellidos) {
        super(nombre, apellidos); 
        LugarTrabajo = lugarTrabajo; 
        NumSS = numSS;
    }

    public String getLugarTrabajo() {
        return LugarTrabajo;
    }
    public void setLugarTrabajo(String lugarTrabajo){
        LugarTrabajo=lugarTrabajo;
    }

    public String getNumSS() {
        return NumSS;
    }
    public void setNumSS(String numSS){
        NumSS=numSS;
    }

    
    
}
