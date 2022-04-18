// console.log("Hello world!");

// document.addEventListener('DOMContentLoaded', () => {
//     document
//         .getElementById('separator')
//         .addEventListener('input', separatorValue);
//     document
//         .getElementById('numwords')
//         .addEventListener('input', numWords);
// });

let count = 2;
// console.log(typeof count);

let multiplier = 10;
// console.log(typeof multiplier);
// console.log(count);

let doStuff = (count, multiplier) => { 
    return count * multiplier
    // console.log(count * multiplier);
}

// console.log(doStuff(count, multiplier));
console.log(doStuff(5, 3));

// let separator = document.getElementById('separator');
// let numwords = document.getElementById('numwords');
// numwords.addEventListener('input', numWords);

function separatorValue(event) {
    let separator = event.target;
    console.log('Separator: ' + separator.value)
};

function numWords(event) {
    let selected = event.target;
    console.log('WordCount: ' + selected.value)
};