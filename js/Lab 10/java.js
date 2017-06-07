var maandArray = new Array("Januari","Februari","Maart","April","Mei","Juni","Juli","Augustus","September","October","November","December");
var dagArray = new Array("Maandag","Dinsdag","Woensdag","Donderdag","Vrijdag","Zaterdag","Zondag");
function showArray(arrayNaam){
	var lengte = arrayNaam.length;
	document.writeln("<br />-------------------------------------------------------")
	document.writeln("<br />Deze array heeft in totaal " + lengte + " elementen:");
	for(i = 0; i < arrayNaam.length; i++){
		document.writeln("<br />" + i + " " + arrayNaam[i]);
	}
}
showArray(maandArray);
showArray(dagArray);
document.writeln("<br />");