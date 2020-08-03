// Not to change today forcast we used const here
const kelvin = 293;

// Kelvin to Celsius Conversion
const celcius = kelvin - 273;

// Celcius to Fahrenheit Conversion
let fahrenheit = celcius*(9/5) + 32;

// To get the Integer Value of Fahrenheit without decimal
fahrenheit = Math.floor(fahrenheit);

let newton = celcius*(33/100);
newton = Math.floor(newton);

console.log(`\nThe Temperature is ${fahrenheit} degrees Fahrenheit.`);
console.log(`The Temperature is ${newton} newton \n`);
