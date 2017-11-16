function workKeyValue(arr) {
    let result = {};
    for (let i =0; i<arr.length-1; i++){
      let curentEnter = arr[i].split(' ');
      let key =curentEnter[0];
      let value=curentEnter[1];
      result[key]=value;
    }
    let printKey = arr[arr.length-1];
    if(result[printKey]==undefined){
        console.log('None')
    }else {
        console.log(result[printKey]);
    }
}