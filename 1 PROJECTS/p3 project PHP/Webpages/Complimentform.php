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
<form method="post" action="Complimentenaction.php" class="productklacht_form">
    Naam: <input type="text" name="naam" id="naam"></input></br></br>
    E-mail: <textarea type="text" name="email" id="email"></textarea></br></br>
    Woonplaats : <textarea type="text" name="woonplaats" id="woonplaats"></textarea></br></br>
    Geboortedatum: <input type="date" name="geboortedatum" id="geboortedatum"></input></br></br>
    Compliment: <textarea type="text" name="compliment" id="compliment"></textarea></br></br>
    Waarom is onze site beter dan de andere websites: <textarea type="text" name="uniek" id="uniek"></textarea></br></br>
    <input type="submit" name="knop" id="productklacht_submit">
</form>

<!-- Include footer.html -->
<?php
include "../Webpages/include pages/footer.php";
?>
