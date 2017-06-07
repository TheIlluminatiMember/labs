var creditCardProvider = prompt("Enter creditcard provider please (pick from: Visa, Master or ING): ");
creditCardProvider = creditCardProvider.toString().toLowerCase();

switch(creditCardProvider){
	case "visa":
		var credit = prompt("Visa: enter the amount of money you want to lend:");
		if(credit > 800){
			document.writeln("Try again! Visa maximum credit: $800!");
		}
		else{
			document.writeln("$" + credit + " has been added to your account!");
		}
		break;
	case "mastercard":
		var credit = prompt("Mastercard: enter the amount of money you want to lend:");
		if(credit > 1000){
			document.writeln("Try again! Mastercard maximum credit: $1000!");
		}
		else{
			document.writeln("$" + credit + " has been added to your account!");
		}
		break;
	case "ing":
		var credit = prompt("ING: enter the amount of money you want to lend:");
		if(credit > 1500){
			document.writeln("Try again! ING maximum credit: $1500!");
		}
		else{
			document.writeln("$" + credit + " has been added to your account!");
		}
		break;
	default:
		alert("Error: We do not recognize your creditcard!");
		break;
}
