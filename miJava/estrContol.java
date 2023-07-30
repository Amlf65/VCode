public class estrContol {
    public static void main(String[] args) {
        int valor = 1;
        // if
        if(valor == 1){
            System.out.println("El valor es 1");
        }else{
            System.out.println("El valor es diferente de 1");
        }
        //switch
        switch(valor){
            case 1:
            System.out.println("El valor es 1");
            break;
            case 2:
            System.out.println("El valor es diferente de 1");
            break;
        }
        //do-while
        int contador = 0;
        do {
            contador++;
            System.out.println(contador);
        } while (contador !=10);
        //while
        contador = 10;
        while (contador < 10) {
            contador++;
            System.out.println(contador);
        } 
        //For
        for (int i = 0; i <= 10; i++) {
            System.out.println(i);
        }

    }
}
