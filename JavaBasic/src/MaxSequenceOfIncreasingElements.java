import java.util.Scanner;

public class MaxSequenceOfIncreasingElements {
    static int[] parsInteger(String[] input){
        int[] result = new int[input.length];

        for(int i = 0; i < input.length; i++){
            result[i] = Integer.parseInt(input[i]);
        }
        return result;
    }

    public static void main(String[] args) {
        Scanner console = new Scanner(System.in);
        int[] numbers= parsInteger(console.nextLine().split(" "));
        int maxNum=numbers[0];
        int maxSequens=1;
        int curentSequens=0;
        for (int i = 1; i < numbers.length ; i++) {
            if(numbers[i-1]==numbers[i]-1){
                if (i == 1) {
                    curentSequens++;
                }
                curentSequens++;
                if (curentSequens >= maxSequens) {
                    maxNum = numbers[i];
                    maxSequens = curentSequens;
                }
            }else {
                curentSequens=1;
            }
        }
        int number = maxNum-(maxSequens-1);
        for (int i = 0; i <maxSequens ; i++) {
            System.out.print(number+i+" ");
        }
        System.out.println();
    }
}
