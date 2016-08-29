<? php
$to = "Insert the email address here";
$subject = "This is just to say...";
$message = "Insert the poem here";
$headers = 'From: Insert your name here' . "\r\n" .
    "Created at http://www.kellylougheed.com/this-is-just-to-say" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

mail($to, $subject, $message, $headers);
?>

<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>This Is Just To Say</title>
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="tint bg">
<div class="container">
<h1>This Is Just To Say</h1>

<p>Okay, so you ate some food that maybe your roommate wanted, and you feel compelled to apologize. <i>Be poetic about it!</i> Fill out this form and let poet <a href="https://www.poets.org/poetsorg/poem/just-say" target="_blank">William Carlos Williams</a> do the work for you.</p>

<div class="tr">
<div class="half tint">
<form name="poemWriter" id="poemWriter" action="#" method="">
What did you eat?<br>
<select name="article" class="short">
  <option value="the">the</option>
  <option value="a">a</option>
  <option value="some">some</option>
</select>
<input type="text" name="food">
<p>Is the food singular or plural?<br>
<input type="radio" name="number" value="sg" checked> Sg <input type="radio" name="number" value="pl"> Pl</p>
<p>Where was the food?<br>
<select name="prepPhrase" class="short">
  <option value="in<br>the">in the</option>
  <option value="on<br>the">on the</option>
  <option value="under<br>the">under the</option>
  <option value="above<br>the">above the</option>
  <option value="behind<br>the">behind the</option>
</select>
<input type="text" name="place" value="fridge"></p>
<p>When might your roommate have eaten this?<br>
<select name="meal" class="long">
  <option value="for a snack">for a snack</option>
  <option value="for breakfast">for breakfast</option>
  <option value="for lunch">for lunch</option>
  <option value="for dinner">for dinner</option>
</select>
<p>Describe the food in three adjectives. <br>
1. <input type="text" name="adjective1"><br>
2. <input type="text" name="adjective2"><br>
3. <input type="text" name="adjective3"></p>
<div class="center">
<input type="button" name="submit" id="submit" value="Write the poem!" onclick="writePoem(this.form)">
</div>
</form>
</div>

<div class="half tint">
<h2>This Is Just To Say</h2>
<p id="poem">Your poem will appear here when you click "Write the poem!"</p>
</div>
</div>
</div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="script.js"></script>
  </html>