<?php
// auteur: Dylan
// Functie: algemene functies tbv hergebruik
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bieren";
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully <br>" ;
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  
}

 Function ConnectDb($conn){
   echo "Connected <br>";
 }

 Function OvzBieren($conn){

   $query = $conn->prepare("SELECT * FROM bier");
   $query->execute();
   $result = $query->fetchall(PDO::FETCH_ASSOC);
 }







 ?>