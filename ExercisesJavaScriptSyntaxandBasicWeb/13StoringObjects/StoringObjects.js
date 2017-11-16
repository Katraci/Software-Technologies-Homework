function storeStudents(arr) {
let result=[];
for(let i =0; i<arr.length;i++){
    let curentEnter = arr[i].split(' -> ');
    let newStudent={};
    newStudent.studentName=curentEnter[0];
    newStudent.age=curentEnter[1];
    newStudent.grade=curentEnter[2];
    result.push(newStudent);
}
for(let student of result){
    console.log(`Name: ${student.studentName}`)
    console.log(`Age: ${student.age}`)
    console.log(`Grade: ${student.grade}`)
}
}