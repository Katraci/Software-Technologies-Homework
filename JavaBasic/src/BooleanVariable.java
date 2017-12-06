import java.util.Scanner;

public class BooleanVariable {
    public static void main(String[] args) {
        Scanner console = new Scanner(System.in);
        String text = console.nextLine();
        Boolean bool= Boolean.parseBoolean(text);
        if (bool){
            System.out.println("Yes");
        }else {
            System.out.println("No");
        }
    }
}
