let myAge = 38;
document.writeln(myAge*2)
let firstName = "Michael";
let lastName = "Morelli";

document.writeln(firstName + " " + lastName);

document.writeln(`${firstName} ${lastName}`);

let myBooleanValue = false;
document.writeln(`${myBooleanValue}`);

let myPTag = document.createElement('p');
document.body.appendChild(myPTag);

if (myBooleanValue == true) {
    document.writeln(`${myBooleanValue} "IT'S TRUE"`)
} else {
    document.writeln("IT'S NOT TRUE");
}
