<!-- Author: Dylan -->

<!-- Include head.html -->
<?php 
include "../Webpages/include pages/head.php";
?>
<!-- Include navbar.html -->
<?php 
include "../Webpages/include pages/navbar.php";
?>

<!-- Klachten formulier code -->
<main class= "Websiteklachten-main">
<html>
<head>
	<title >Klachtenformulier</title>
</head>
<body>
	<h1 class="Klachtenform-h1"> Klachtenformulier</h1>
	<form method="post" action="websiteklachtenform.php">
		<label class="websiteklacht-naam" >Naam:</label>
		<input type="text" name="naam" required>
		<br><br>
		<label class="websiteklacht-telefoon" >Telefoonnummer:</label>
		<input type="tel" name="telefoonnummer" required>
		<br><br>
		<label class="websiteklacht-postcode" >Postcode:</label>
		<input type="text" name="postcode" required>
		<br><br>
		<label class="websiteklacht-gender" >Geslacht:</label>
		<input type="radio" name="geslacht" value="M" checked>Man
		<input type="radio" name="geslacht" value="V">Vrouw
		<br><br>
		<label class="websiteklacht-klacht" >Wat is uw klacht?</label>
		<textarea name="klacht" rows="5" cols="40" required></textarea>
		<br><br>
		<label class="websiteklacht-wzg" >Welke wijzigingen wilt u zien?</label>
		<textarea name="wijzigingen" rows="5" cols="40" required></textarea>
		<br><br>
		<input type="submit" name="submit" value="Verzenden">
	</form>
</body>
</html>
</main>

<!-- Include footer.php -->
<?php 
include "../Webpages/include pages/footer.php";
?>