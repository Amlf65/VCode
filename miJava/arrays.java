import java.util.ArrayList;

public class arrays {
    public static void main(String[] args) {
        ArrayList<Integer> array = new ArrayList<Integer>();
        array.add(4);
        array.add(5);
        array.add(7);

        System.out.println("Longitud: " + array.size());
        System.out.println("Contiene 4?: " + array.contains(4));
        System.out.println("Borrar 4: " + array.remove((Integer)4));
        System.out.println("Contiene 4?: " + array.contains(4));
        System.out.println("Longitud: " + array.size());


    }
}
