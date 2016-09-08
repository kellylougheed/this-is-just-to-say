var poem;
var article;
var food;
var grammar = [];
var prepPhrase;
var place;
var meal;
var adjectives = [];

function removeHTML(str) {
	str = str.replace(\"<br>"\g, '');
	return str;
}

function writePoem(form) {
	article = form.article.value;
	food = form.food.value;
	food = food.toLowerCase();
	$("#poem").html(food);
	number = form.number.value;
	if (number == "sg") {
		grammar = ["was", "it was"];
	} else if (number == "pl") {
		grammar = ["were", "they were"];
	}
	prepPhrase = form.prepPhrase.value;
	place = form.place.value;
	meal = form.meal.value;
	adjectives.push(form.adjective1.value);
	adjectives.push(form.adjective2.value);
	adjectives.push(form.adjective3.value);
	for (var i = 0; i < adjectives.length; i++) {
		adjectives[i] = adjectives[i].toLowerCase();
	}
	poem = "I have eaten<br>"+article+" "+food+"<br>that "+grammar[0]+" "+prepPhrase+" "+place+"<br><br>";
	poem += "and which<br>you were probably<br>saving<br>"+meal+"<br><br>";
	poem += "Forgive me<br>they were "+adjectives[0]+"<br>so "+adjectives[1]+"<br> and so "+adjectives[2];
	console.log(poem);
	$("#poem").html(poem);
	var poemToMail = removeHTML(poem);
	$("#poemMessage").html(poemToMail);
}