import java.util.Scanner;

public class ReverseCharacters {
    public static void main(String[] args) {
        Scanner console = new Scanner(System.in);
        String text = new String();
        for (int i= 1; i<=3; i++){
            String leter = console.nextLine();
            text += leter;
        }
        for (int i = 2; i >=0 ; i--) {
            System.out.print(text.charAt(i));
        }
        System.out.println();
    }
}
