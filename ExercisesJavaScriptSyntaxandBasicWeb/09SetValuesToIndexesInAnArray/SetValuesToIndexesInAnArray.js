function setValueInArray(arr) {
    let resultLenght = Number(arr[0]);
    let result=[];
    for (let i =0;i<resultLenght;i++){
        result[i]=0;
    }
    for(let i=1; i<arr.length; i++){
        let curentInput = arr[i].split(' - ').map(Number);
        result[curentInput[0]]=curentInput[1];
    }
    for (let i =0;i<resultLenght;i++){
        console.log(result[i]);
    }
}