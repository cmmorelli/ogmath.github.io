let bob = document.createElement('meta');
document.head.appendChild(bob);
bob.innerHTML = "<meta charset=\"UTF-8\">";
/* Weird. It put the contents of 
   bob in the head without me specifying
   where it should go. Subsequently I 
   used the createElement and appendChild
   methods to create the meta tag and I 
   used the innerHTML property to assign
   the correct meta tag. Still not sure
   why this is better than directly 
   coding it but it is VERY COOL.*/
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


let myPTag2 = myPTag.cloneNode(true);
document.body.appendChild(myPTag2);
let myText = "bob's you're uncle";
myPTag2.innerText = myText;
let myPTag3 = myPTag.cloneNode(true);
document.body.appendChild(myPTag3);

let floatNumber = 1.30;
let myText2 = typeof(floatNumber);
myPTag3.innerText = myText2;

let myStringNumber = "10";

myStringNumber = Number.parseInt(myStringNumber);

let myText3 = "The sum of 1.3 and 10 is: ";
let myPTag4 = myPTag.cloneNode(true);
document.body.appendChild(myPTag4);
myPTag4.innerText = myText3 + (floatNumber + myStringNumber);
/*  I had to put the two things I wanted
    to add in parentheses; otherwise, it
    interpreted it as concatenation inst-
    ead of addition...very interesting.*/
