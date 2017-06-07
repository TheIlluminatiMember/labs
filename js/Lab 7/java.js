var translate = function(input){
	var result = "Error!";
	
	input = parseInt(input); 
	switch(input){
		default:
			result = " Error, getal valt niet tussen 1 t/m 10!";
			break;
		case 0:
			result = " Nul";
			break;
		case 1:
			result = " Één";
			break;
		case 2:
			result = " Twee";
			break;
		case 3:
			result = " Drie";
			break;
		case 4:
			result = " Vier";
			break;
		case 5:
			result = " Vijf";
			break;
		case 6:
			result = " Zes";
			break;
		case 7:
			result = " Zeven";
			break;
		case 8:
			result = " Acht";
			break;
		case 9:
			result = " Negen";
			break;
		case 10:
			result = " Tien";
			break;
	}
	document.writeln("Uw " + input + " is vertaald naar" + result);
}

var getInput = prompt("Vul een getal tussen 0 en 10 in:");
translate(getInput);