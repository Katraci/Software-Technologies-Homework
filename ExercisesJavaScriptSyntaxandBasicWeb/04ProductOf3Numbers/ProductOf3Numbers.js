function productOfThreeNumbers(numbers) {
    let num1 = Number(numbers[0]);
    let num2 = Number(numbers[1]);
    let num3 = Number(numbers[2]);
    let result = Number((num1<0)+(num2<0)+(num3<0));
    if(num1===0||num2===0||num3===0||result==2||result==0){
        console.log("Positive")
    }else{
        console.log("Negative")
    }
}