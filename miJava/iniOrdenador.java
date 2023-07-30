public class iniOrdenador {
    public static void main(String[] args) {
        Pantalla pantalla = new Pantalla(21, "1920x1(080", 440);
        DiscoDuro disco = new DiscoDuro(5400, 2200,(float)5.550);
        Procesador cpu = new Procesador(4, (float)2.4, 64);
        Memoria memoria = new Memoria(8, "DDR3", 800);
        Ordenador ordenador = new Ordenador(pantalla, cpu, memoria, disco);
        ordenador.Mostrar();
    }
}
