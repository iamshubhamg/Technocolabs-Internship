let raceNumber = Math.floor(Math.random()*1000);
const registeredEarly = true;
const runnerAge = 19;

// checking earlier registration
if (runnerAge>18 && registeredEarly) {
  raceNumber+=1000;
}

if (runnerAge>18 && registeredEarly) {
  console.log(`Runner:${raceNumber}: Your race starts at 9:30`);
} else if (runnerAge>18 && !registeredEarly) {
  console.log(`Runner:${raceNumber}: Your race starts at 11:00`);
} else if (runnerAge < 18) {
  console.log(`Runner:${raceNumber}: Your race starts at 12:30`)
}
