<!-- Author: Dylan -->

<!-- Include head.html -->
<?php 
include "../Webpages/include pages/head.php";
?>
<!-- Include navbar.html -->
<?php 
include "../Webpages/include pages/navbar.php";
?>
<!--klachten formulier gevuld code -->
<main class= "Websiteklachtenform-main">
<html>
<head>
	<title>Uw Klachtenformulier</title>
</head>
<body>
	<?php
		// Controleer of alle velden zijn ingevuld
		if(isset($_POST['submit'])){
			$naam = $_POST['naam'];
			$telefoonnummer = $_POST['telefoonnummer'];
			$postcode = $_POST['postcode'];
			$geslacht = $_POST['geslacht'];
			$klacht = $_POST['klacht'];
			$wijzigingen = $_POST['wijzigingen'];
			
			// Toon de ingevulde gegevens op de vervolgpagina
			echo "<p>Bedankt voor het indienen van uw klacht, $naam! <br></br></p>";
			echo "<p>Uw telefoonnummer is $telefoonnummer en uw postcode is $postcode.<br></br></p>";
			echo "<p>U heeft aangegeven dat uw geslacht $geslacht is. <br></br></p>";
			echo "<p>Uw klacht is als volgt: $klacht <br></br></p>";
			echo "<p>U wilt de volgende wijzigingen zien: $wijzigingen <br></br></p>";
		}
	?>
</body>
</html>
</main>
<!-- Include footer.php -->
<?php 
include "../Webpages/include pages/footer.php";
?>