function parseJSON(arr) {
   let objects = arr.map(JSON.parse);
   for(let student of objects){
       console.log(`Name: ${student.name}`);
       console.log(`Age: ${student.age}`);
       console.log(`Date: ${student.date}`);
   }
}