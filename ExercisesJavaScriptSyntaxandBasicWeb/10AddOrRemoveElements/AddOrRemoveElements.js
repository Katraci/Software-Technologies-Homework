function addRemoveElementsInArray(arr) {
    let result = [];
    for (let elem of arr){
        let command = elem.split(' ');
        if(command[0]==='add'){
            result.push(Number(command[1]));
        }
        if (command[0]==='remove'){
            let index= Number(command[1]);
            if((index<result.length)&&index>=0){
                result.splice(index,1)
            }

        }
    }
    for (let res of result){
        console.log(res);
    }
}