var getal = new Array();
getal[0] = "Nul";
getal[1] = "Een";
getal[2] = "Twee";
getal[3] = "Drie";
getal[4] = "Vier";
getal[5] = "Vijf";
getal[6] = "Zes";
getal[7] = "Zeven";
getal[8] = "Acht";
getal[9] = "Negen";
var input = prompt("Vul uw telefoon nummer in:");
document.writeln("Uw telefoon nummer is: ");
for(i = 0; i < input.length; i++){
	document.writeln(getal[input.charAt(i)]);
};