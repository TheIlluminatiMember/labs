document.writeln("<table  style='text-align:center;' width='80%' border='5'><tr><th>Team</th><th>Ronde 1</th><th>Ronde 2</th><th>Ronde 3</th><th>Ronde 4</th><th>Ronde 5</th><th>Gemiddeld</th></tr>");

var team = new Array();
	team[0] = new Array();
	team[1] = new Array();
	team[2] = new Array();
		team[0][0] = 1;
		team[0][1] = 2;
		team[0][2] = 3;
		team[0][3] = 4;
		team[0][4] = 5;
		
		team[1][0] = 4;
		team[1][1] = 5;
		team[1][2] = 1;
		team[1][3] = 1;
		team[1][4] = 5;
		
		team[2][0] = 1;
		team[2][1] = 6;
		team[2][2] = 3;
		team[2][3] = 0;
		team[2][4] = 1;

var avr = new Array();
	avr[0] = (team[0][0] + team[0][1] + team[0][2] + team[0][3] + team[0][4]) / 5;
	avr[1] = (team[1][0] + team[1][1] + team[1][2] + team[1][3] + team[1][4]) / 5;
	avr[2] = (team[2][0] + team[2][1] + team[2][2] + team[2][3] + team[2][4]) / 5;
		


document.writeln("<tr><td>Team 1</td><td>"+team[0][0]+"</td><td>"+team[0][1]+"</td><td>"+team[0][2]+"</td><td>"+team[0][3]+"</td><td>"+team[0][4]+"</td><td>"+avr[0]+"</td></tr>");
document.writeln("<tr><td>Team 2</td><td>"+team[1][0]+"</td><td>"+team[1][1]+"</td><td>"+team[1][2]+"</td><td>"+team[1][3]+"</td><td>"+team[1][4]+"</td><td>"+avr[1]+"</td></tr>");
document.writeln("<tr><td>Team 3</td><td>"+team[2][0]+"</td><td>"+team[2][1]+"</td><td>"+team[2][2]+"</td><td>"+team[2][3]+"</td><td>"+team[2][4]+"</td><td>"+avr[2]+"</td></tr>");

