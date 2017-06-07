function write(number, input){
	switch(number){
		default:
			document.writeln(input);
			break;
		case 1:
			document.writeln(input + "<br />");
			break;
	}
}

function rooster(input){
	switch(input){
		default :
			write(" Error!");
			break;
		case "Maandag":
			write(1,"Maandag:");
			write(1,"Blok 1: Database");
			write(1,"Blok 2: Php");
			write(1,"Blok 3: Werkomgeving");
			write(1,"Blok 4: C#");
			break;
		case "Dinsdag":
			write(1,"Dinsdag:");
			write(1,"Blok 1: Lob");
			write(1,"Blok 2: Nederlands");
			write(1,"Blok 3: Database");
			write(1,"Blok 4: Html");
			break;
		case "Woensdag":
			write(1,"Woensdag:");
			write(1,"Blok 1: Html/Css");
			write(1,"Blok 2: Php");
			write(1,"Blok 3: Wiskunde");
			write(1,"Blok 4: Rekenen");
			break;
		case "Donderdag":
			write(1,"Donderdag:");
			write(1,"Blok 1: Vrij");
			write(1,"Blok 2: Burgerschap");
			write(1,"Blok 3: Html/Css");
			write(1,"Blok 4: Php");
			break;
		case "Vrijdag":
			write(1,"Vrijdag:");
			write(1,"Blok 1: Java");
			write(1,"Blok 2: Php");
			write(1,"Blok 3: C#");
			write(1,"Blok 4: C#");
			break;
	}
}
var day = prompt("Welke werkdag wenst u te zien?");

rooster(day);