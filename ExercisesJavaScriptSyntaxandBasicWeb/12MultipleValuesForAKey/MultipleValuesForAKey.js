function workMultiValue(arr) {
    let result = {};
    for (let i =0; i<arr.length-1; i++){
        let curentEnter = arr[i].split(' ');
        let key =curentEnter[0];
        let value=curentEnter[1];
        if(result[key]==undefined){
            result[key]=[];
        }
        result[key].push(value);
    }
    let printKey = arr[arr.length-1];
    if(result[printKey]==undefined){
        console.log('None')
    }else {
        let toPrint=result[printKey];
        for(let print of toPrint){
            console.log(print);
        }
    }
}