<?php
// functie: programma overzicht bieren
// auteur: Dylan

// Initialisatie
include 'functions.php';

// main

// connect database bieren
$conn = ConnectDb ();

// print bieren
OvzBieren($conn);
?>