while(true){ 
	var number1 = String(Math.random());
	number1 = number1.charAt(2);
	var number2 = String(Math.random());
	number2 = number2.charAt(2);
	var userInput = prompt(number1 + " x " + number2 + " = ?");
	if(userInput == number1 * number2){
		alert("Correct!");
	}
	else{
		alert("Incorrect!");
	}
}