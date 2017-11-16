function turnInJSNO(arr) {
    "use strict";
 let obj = {};
 for(let i=0;i<arr.length;i++){
     let curent = arr[i].split(' -> ');
     let key = curent[0];
     let value = curent[1];
     if(key=='age'||key=='grade'){
         obj[key]=Number(value);
     }else {
         obj[key]=value;
     }
 }
 let result = JSON.stringify(obj);
    console.log(result);
}

turnInJSNO([
   'name -> Angel',
   'surname -> Georgiev',
   'age -> 20',
   'grade -> 6.00',
   'date -> 23/05/1995',
   'town -> Sofia'

])