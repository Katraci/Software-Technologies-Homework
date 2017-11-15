function multiplyOrDivedeNumbers(numbers) {
let num1 = Number(numbers[0]);
let num2 = Number(numbers[1]);
if (num1>num2){
    return num1/num2;
}
if(num2>=num1){
    return num1*num2;
}
}