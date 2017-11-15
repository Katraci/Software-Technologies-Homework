function largestThreeNumbers (arr) {
    let nums= arr.map(Number);
    let sortedNumbers=nums.sort((a,b)=> b - a);
    let count = Math.min(3, sortedNumbers.length);
    for(let i=0; i<count;i++){
        console.log(sortedNumbers[i]);
    }
}