function extractCapitalCaseWords(arr) {
let text = arr.join(',');
let words=text.split(/\W+/);
let notEmptyStrings=words.filter(w => w.length>0);
let upWords = notEmptyStrings.filter(isUpercase);
console.log(upWords.join(", "));
    function isUpercase(str) {
        return str === str.toUpperCase();
    }
}
