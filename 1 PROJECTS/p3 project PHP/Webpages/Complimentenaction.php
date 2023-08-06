<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mediamarkt";

// Connectie maken met de PDO.
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

if (isset($_POST["knop"])) {
  $volledigenaam = $_POST['naam'];
  $email = $_POST['email'];
  $woonplaats = $_POST['woonplaats'];
  $geboortedatum = $_POST['geboortedatum'];
  $compliment = $_POST['compliment'];
  $uniek = $_POST['uniek'];

  // Prepare the SQL statement
  $query = $conn->prepare("INSERT INTO complimenten (volledigenaam, email, woonplaats, geboortedatum, compliment, uniek) 
   VALUES (:volledigenaam, :email, :woonplaats, :geboortedatum, :compliment, :uniek)");

  // Bind the parameters to the statement
  $query->bindParam(':volledigenaam', $volledigenaam);
  $query->bindParam(':email', $email);
  $query->bindParam(':woonplaats', $woonplaats);
  $query->bindParam(':geboortedatum', $geboortedatum);
  $query->bindParam(':compliment', $compliment);
  $query->bindParam(':uniek', $uniek);
  // Execute the statement
  $query->execute();

  echo "naam: " . $volledigenaam . "<br>";
  echo "email: " . $email . "<br>";
  echo "woonplaats: " . $woonplaats . "<br>";
  echo "geboortedatum: " . $geboortedatum . "<br>";
  echo "compliment: " . $compliment . "<br>";
  echo "uniek: " . $uniek . "<br>";
}

?>
