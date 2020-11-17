let text = "<h1>Winter is coming</h1>";
let myRegex = /<.*?>/; // Change this line
let result = text.match(myRegex);

 	let receivables = 10;
	let payables = 8;
	let total = receivables - payables;
	console.log(`Net working capital is: ${total}`);
	// document.getElementById('demom') .innerHTML = total;

	function myFunction() {
    var inpObj = document.getElementById("id1");
    if (!inpObj.checkValidity()) {
        document.getElementById("demo").innerHTML = inpObj.validationMessage;
    } else {
        document.getElementById("demo").innerHTML = "Input OK";
    } 
} 

// second phase
function secondFunction() {
    var txt = "";
    if (document.getElementById("id2").validity.rangeOverflow) {
        txt = "Value too Big O!";
    } else {
        txt = "Input not OK";
    } 
    document.getElementById("demo2").innerHTML = txt;
}

// creating a JavaScript Object
var person = {
	firstName: "Monday",
	middleName: "David",
	lastName: "Sarka",
	age: 27,
	eyeColor: "White",
};

document.getElementById('creation') .innerHTML = 
person.firstName + " " + person.lastName + " " + "and he is " + person.age + " Years Old";

// new session
var person ={
firstName: "John",
lastName: "Doe",
age: 50,
eyeColor: "blue", 
};
document.getElementById("demo3").innerHTML =
person.firstName + " is " + person.age + " years old.";