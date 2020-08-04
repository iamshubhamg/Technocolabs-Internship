// current
const myAge = 19;

// 2 years is as 10.5 in dog
let earlyYears = 2;

earlyYears *= 10.5;

// 2 years less in me
let laterYears = myAge - 2;

// inc in each 4 years
laterYears *= 4;

// Finding MyAgeInDogYears
let myAgeInDogYears = earlyYears + laterYears;

// To get My Name
let myName = "Shubham";
myName = myName.toLowerCase();
console.log(`\nMy name is ${myName}. I am ${myAge} years old in human years which is ${myAgeInDogYears} years old in dog years.\n`);
