import java.util.Scanner;

public class IntegerToHexAndBinary {
    public static void main(String[] args) {
        Scanner console = new Scanner(System.in);
        int number=Integer.parseInt(console.nextLine());
        System.out.println((Integer.toHexString(number)).toUpperCase());
        System.out.println(Integer.toBinaryString(number));
    }
}
