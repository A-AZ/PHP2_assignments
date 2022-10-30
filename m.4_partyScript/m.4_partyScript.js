const minAge = 18;
const maxAge = 35;
let userAge;

do {
    userAge = prompt("How old are you?");
    userAge = parseInt(userAge);
    if (isNaN(userAge)) {
        continue; }
}
if (userAge < minAge) {
    displayMsg("You are too young");
} else if (userAge > 35) {
    displayMsg ("You are too old");
} else {
    displayMsg ("Hello " + prompt("What's is your Name?") + ", Welcome to the party."); 
} while (confirm("is there anyone else?"));

function displayMsg(msg) {
  alert(msg);
}
