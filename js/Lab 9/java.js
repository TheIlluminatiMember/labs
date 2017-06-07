var type = "economie";
var kleur = "blauw";
var deuren = 4;
var hasRadio = true;
var cabrio = false;
function showauto1(){
	document.writeln("<br />Deze functie toont globale plus eigen lokale variabelen van auto 1")
	var type = "middenklasse"
	hasRadio = false;
	document.writeln("<br />Auto type: " + type + "<br />Auto kleur: " + kleur + "<br />Aantal deuren: " + deuren + "<br />Heeft radio: " + (hasRadio ? "Ja" : "Nee") + "<br />Cabrio: " + (cabrio ? "Ja" : "Nee"));
}
function showauto2(){
	document.writeln("<br /><br />Deze functie toont globale plus eigen lokale variabelen van auto 2");
	type = "sport";
	cabrio = true;
	kleur = "rood";
	deuren = 2;
	document.writeln("<br />Auto type: " + type + "<br />Auto kleur: " + kleur + "<br />Aantal deuren: " + deuren + "<br />Heeft radio: " + (hasRadio ? "Ja" : "Nee") + "<br />Cabrio: " + (cabrio ? "Ja" : "Nee"));
}
function showauto3(){
	document.writeln("<br /><br />Deze functie toont globale plus eigen lokale variabelen van auto 3");
	cabrio = false;
	kleur = "wit";
	hasRadio = true;
	deuren = 2;
	document.writeln("<br />Auto type: " + type + "<br />Auto kleur: " + kleur + "<br />Aantal deuren: " + deuren + "<br />Heeft radio: " + (hasRadio ? "Ja" : "Nee") + "<br />Cabrio: " + (cabrio ? "Ja" : "Nee"));
}
showauto1();
showauto2();
showauto3();