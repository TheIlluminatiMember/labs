
//variables:
var customerName = prompt("Enter your name please:");
var bookAmount = parseInt(prompt("Enter the amount of books you want to order (1 book costs 29.99 + 6% VAT!):"));
var bookTitle = "Morgan Not Freeman";
var price = 29.90;
var total = price * bookAmount;
var vat = 6;
var vath = vat + 100;
var orderExpence = 15.00;
var adress = prompt("Voer adress in:");
var postcode = prompt("Voer postcode in:");

if(adress == "Amsterdam" && postcode > 1000 && postcode < 2000 ){
	alert("Gratis bezorging!");
	orderExpence = 0
}

//cosmetic
document.writeln("<h1>Order Summary</h1>")
document.writeln("<p>");
document.writeln("Thanks for your order " + customerName + "!<br />");
document.writeln("Book title: " + bookTitle + ".<br />");
document.writeln("The amount of book ordered: " + bookAmount + ".<br /><br />")
document.writeln("Price for " + bookAmount +" books: " + total.toFixed(2) + ".<br />")
total = (total/100 * vath) + orderExpence;
document.writeln("The total amount you have to pay: " + bookAmount + " x " + price + " = " + total.toFixed(2) + ".");
document.writeln("</p>")



