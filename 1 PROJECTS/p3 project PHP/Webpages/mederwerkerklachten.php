<!-- Include head.html -->
<!-- Author Amin -->
<?php 
include "../Webpages/include pages/head.php";
?>
<!-- Include navbar.html -->
<?php 
include "../Webpages/include pages/navbar.php";
?>


<!-- Main code -->
<main>

<form method="post" action="medewerkeraction.php" class="productklacht_form">
    Naam: <input type="text" name="naam" id="naam"></input></br></br>
    Probleem: <textarea type="text" name="probleem" id="probleem"></textarea></br></br>
    Onderwerp: <textarea type="text" name="Onderwerp" id="Onderwerp"></textarea></br></br>
    Medewerker: <textarea type="text" name="medewerker" id="medewerker"></textarea></br></br>
    klachtdatum: <input type="date" name="klachtdatum" id="klachtdatum"></input></br></br>
    Straatnaam: <textarea type="text" name="straatnaam" id="straatnaam"></textarea></br></br>
    Huisnummer: <textarea type="text" name="huisnummer" id="huisnummer"></textarea></br></br>
    Contact: <textarea type="text" name="contactmanier" id="contactmanier"></textarea></br></br>
    <input type="submit" name="knop" id="productklacht_submit">
</form>

</main>


<!-- Include footer.html -->
<?php
include "../Webpages/include pages/footer.php";
?>
