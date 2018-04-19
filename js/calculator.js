"use strict";

var textArea = document.getElementsByTagName("textArea")[0],
	operator,
	inputOne = 0,
	inputTwo = 0,
	classes = ["1", "2", "3", "4", "5", "6"],
	randomNumber = Math.floor(Math.random() * classes.length);

console.log(randomNumber);

document.addEventListener("DOMContentLoaded", function() {
		if (randomNumber == 0) {
			document.getElementById("calculatorBox").className = "calculatorBox1 col-xs-12 col-sm-4 col-md-4 col-lg-4";
			document.getElementById("pageBody").className = "bodyOne";
		} else if (randomNumber == 1) {
			document.getElementById("calculatorBox").className = "calculatorBox2 col-xs-12 col-sm-4 col-md-4 col-lg-4";
			document.getElementById("pageBody").className = "bodyTwo";
		} else if (randomNumber == 2) {
			document.getElementById("calculatorBox").className = "calculatorBox3 col-xs-12 col-sm-4 col-md-4 col-lg-4";
			document.getElementById("pageBody").className = "bodyThree";
		} else if (randomNumber == 3) {
			document.getElementById("calculatorBox").className = "calculatorBox4 col-xs-12 col-sm-4 col-md-4 col-lg-4";
			document.getElementById("pageBody").className = "bodyFour";
		} else if (randomNumber == 4) {
			document.getElementById("calculatorBox").className = "calculatorBox5 col-xs-12 col-sm-4 col-md-4 col-lg-4";
			document.getElementById("pageBody").className = "bodyFive";
		} else {
			document.getElementById("calculatorBox").className = "calculatorBox6 col-xs-12 col-sm-4 col-md-4 col-lg-4";
			document.getElementById("pageBody").className = "bodySix";
		}
}); 


// Clear Button

function reset() {
	textArea.value = textArea.defaultValue;  
	inputOne = 0;
	inputTwo = 0;  
	console.log("cleared");
}



// Value Input

var numbers = document.getElementsByClassName("buttonTextValue");

function showNumber() {
	textArea.value += this.innerText;
	console.log(this);
}

	for(var i = 0; i < numbers.length; i++) {
		numbers[i].addEventListener("click", showNumber);
	}



// Operators

function addNegative() {
	textArea.value = "-" + textArea.value;
}

function addition() {
	inputOne = parseFloat(textArea.value).toFixed(2);
	operator = "+";
	textArea.value = textArea.defaultValue;
}

function subtraction() {
	inputOne = parseFloat(textArea.value).toFixed(2);
	operator = "-";
	textArea.value = textArea.defaultValue;
}

function multiplication() {
	inputOne = parseFloat(textArea.value).toFixed(2);
	operator = "*";
	textArea.value = textArea.defaultValue;
}	

function division() {
	inputOne = parseFloat(textArea.value).toFixed(2);
	operator = "/";
	textArea.value = textArea.defaultValue;
}

function square() {
	inputOne = parseFloat(textArea.value).toFixed(2);
	operator = "square";
	textArea.value = textArea.defaultValue;
}

function squareRoot() {
	inputOne = parseFloat(textArea.value).toFixed(2);
	textArea.value = Math.sqrt(inputOne).toFixed(2);	
}



// Operator Function

function equals() {
	inputTwo = parseFloat(textArea.value).toFixed(2);

	if (operator == "+") {
		textArea.value = parseFloat((inputOne + inputTwo).toFixed(2));

	} else if (operator == "-") {
		textArea.value = parseFloat((inputOne - inputTwo).toFixed(2));

	} else if (operator == "*") {
		textArea.value = parseFloat((inputOne * inputTwo).toFixed(2));

	} else if (operator == "/") {
		textArea.value = parseFloat((inputOne / inputTwo).toFixed(2));

	} else if (operator == "square") {
		textArea.value = parseFloat((Math.pow(inputOne, inputTwo)).toFixed(2));

	}
}


function rainCalculator() {
    document.getElementById("calculatorBox").setAttribute("class", "calculatorBox1 col-xs-12 col-sm-4 col-md-4 col-lg-4");
    document.getElementById("pageBody").className = "bodyOne";
}

function shaqCalculator() {
    document.getElementById("calculatorBox").setAttribute("class", "calculatorBox2 col-xs-12 col-sm-4 col-md-4 col-lg-4");
    document.getElementById("pageBody").className = "bodyTwo";
}

function pizzaCalculator() {
    document.getElementById("calculatorBox").setAttribute("class", "calculatorBox3 col-xs-12 col-sm-4 col-md-4 col-lg-4");
    document.getElementById("pageBody").className = "bodyThree";
}

function spaceCalculator() {
    document.getElementById("calculatorBox").setAttribute("class", "calculatorBox4 col-xs-12 col-sm-4 col-md-4 col-lg-4");
    document.getElementById("pageBody").className = "bodyFour";
}

function beachCalculator() {
    document.getElementById("calculatorBox").setAttribute("class", "calculatorBox5 col-xs-12 col-sm-4 col-md-4 col-lg-4");
    document.getElementById("pageBody").className = "bodyFive";
}

function stormCalculator() {
    document.getElementById("calculatorBox").setAttribute("class", "calculatorBox6 col-xs-12 col-sm-4 col-md-4 col-lg-4");
    document.getElementById("pageBody").className = "bodySix";
}














