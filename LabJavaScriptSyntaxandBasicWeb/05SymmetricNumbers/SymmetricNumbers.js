function symmetricNumbers([input]) {
    let num = Number(input);
    let result ='';
    for (let i=1;i<=num;i++){
        let word = i.toString();
        let boolean = true;
        for (let j=0;j<word.length/2;j++){
        if  (word[j]!=word[word.length-1-j]){
            boolean=false;
        }
        }
        if(boolean){
            result+=i+' ';
        }
    }
    console.log(result)
}
