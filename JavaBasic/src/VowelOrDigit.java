import java.util.Scanner;

public class VowelOrDigit {
    public static void main(String[] args) {
        Scanner console = new Scanner(System.in);
        String input = console.nextLine();
        try {
            int num = Integer.parseInt(input);
            System.out.println("digit");
        } catch (NumberFormatException nfe) {
            switch (input) {
                case "a":
                case "e":
                case "i":
                case "u":
                case "o":
                    System.out.println("vowel");
                    break;
                default:
                    System.out.println("other");
                    break;
            }
        }
    }
}
