<head>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<?php
/** Strings
 *	Formulär
 *	Jämförelser
 *	if - else, else if
 *	_GET()
 *	
 */
?>
<h1>The Adventure</h1>

<?php
/** Kolla om query string parametern (GET parametern) är (==) tom (NULL)
 *	I fall att den är tom visas ett formulär som ber besökaren fylla i sitt namn
 */
if ($_GET['player_name'] == NULL):
?>
<form action="index.php">
	<label>What's your name?</label>
	<input type="text" name="player_name">
	<input type="hidden" name="page" value="1">
	<input type="submit" value="Skicka">
</form>
<?php
/** Annars om GET parametern "page" är lika med 1
 *	Visas den första 'sidan' med beskrivning av omgivningen och 
 *	ett formulär för att komma vidare
 */
elseif ($_GET['page'] == 1):
?>
<h2>Hello <? echo $_GET['player_name'] ?></h2>
<p class="Description">You are standing in a forest. To the North you can see mountains far away. To the east you can see a lake. </p>
<form action="index.php">
	<label>Where do you want to go?</label><br>
	<input type="radio" name="page" value="2" id="west">
	<label for="west"> West</label><br>
	<input type="radio" name="page" value="3" id="north">
	<label for="north">North</label><br>
	<input type="radio" name="page" value="4" id="east">
	<label for="east">East</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
/** Om "page" inte var 1, kollar vi om den kanske är 2
 *	I fall att detta stämmer visas den andra sidan
 */
elseif ($_GET['page'] == 2):
?>
<p class="Description">...</p>
<img src="img/hut.jpg">
<form action="index.php">
	<label>Where do you want to go?</label><br>
	<input type="radio" name="page" value="5" id="west">
	<label for="west">West</label><br>
	<input type="radio" name="page" value="6" id="north">
	<label for="north">North</label><br>
	<input type="radio" name="page" value="7" id="south">
	<label for="south">South</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 3):
?>

<img src="">
<form action="index.php">
	<label>Where do you want to go?</label><br>
	<input type="radio" name="page" value="6" id="west">
	<label for="west">West</label><br>
	<input type="radio" name="page" value="8" id="north">
	<label for="north">North</label><br>
	<input type="radio" name="page" value="9" id="east">
	<label for="east">East</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 4):
?>
<img src="">
<form action="index.php">
	<label>Where do you want to go?</label><br>
	<input type="radio" name="page" value="9" id="north">
	<label for="north">North</label><br>
	<input type="radio" name="page" value="´10" id="east">
	<label for="east">East</label><br>
	<input type="radio" name="page" value="11" id="south">
	<label for="south">South</label><br>
	<input type="hidden" name="player_name" value="<?= $_GET['player_name'] ?>">
	<input type="submit" value="Skicka">
</form>

<?php
elseif ($_GET['page'] == 5):
?>
<form action="index.php">
	<label>ded</label><br>
</form>

<?php
elseif ($_GET['page'] == 6):
?>
<form action="index.php">
	<label>ded</label><br>
</form>

<?php
elseif ($_GET['page'] == 7):
?>
<form action="index.php">
	<label>ded</label><br>
</form>

<?php
elseif ($_GET['page'] == 8):
?>
<form action="index.php">
	<label>ded</label><br>
</form>

<?php
elseif ($_GET['page'] == 9):
?>
<form action="index.php">
	<label>ded</label><br>
</form>

<?php
elseif ($_GET['page'] == 10):
?>
<form action="index.php">
	<label>ded</label><br>
</form>

<?php
elseif ($_GET['page'] == 11):
?>
<form action="index.php">
	<label>ded</label><br>
</form>
<?php
/** Här tar elseif -satserna slut. Eftersom vi inte använder tecknen {} för att
 *	visa php var våra kodblock börjar och slutar behövs ett endif
 */
endif
?>
