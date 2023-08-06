<!-- This is the country overview with every country of origin -->
<!-- Author: Jack -->

<!-- Include head.html -->
<?php 
include "../Webpages/include pages/head.php";
?>
<!-- Include navbar.html -->
<?php 
include "../Webpages/include pages/navbar.php";
?>



<!-- Main html code -->
<main id='landenoverzicht_main'>
    <div id='landenoverzicht_h1'>
    <h1>Landen van herkomst van onze leveranciers</h1>
    </div>


<!-- Main PHP code -->
<?php

// Functions
function connectdb() {
    try {
        $db = new PDO("mysql:host=localhost;dbname=mediamarkt", "root", "");
        // echo "Connection succesful!";
        queryread($db);
        return $db;
    } catch (PDOException $e) {
        die("ERROR: " . $e->getMessage());
    }
}

function queryread($db) {
    $read = $db->prepare("SELECT landen.idland, landen.landnaam, landen.afkortingnaam , leveranciers.leveranciernaam FROM landen INNER JOIN leveranciers ON leveranciers.landen_idland = landen.idland ORDER BY `landen`.`idland` ASC");
    $read->execute();
    queryprint($read);
    return $read;
}

function queryprint($read) {
    echo "<div class='landentable_container'><table id='landentable_body'>";
    echo "<th>Land ID</th><th>Landnaam</th><th>Afkorting</th><th>Leveranciers</th>";
    foreach ($read as $data) {
        echo "<tr>";
        echo "<td>" . $data['idland'] . "</td>";
        echo "<td>" . $data['landnaam'] . "</td>";
        echo "<td>" . $data['afkortingnaam'] . "</td>";
        echo "<td>" . $data['leveranciernaam'] . "</td>";
        echo "</tr>";
    }
    echo "</table></div>";
}

// Executing functions
$db = connectdb();

?>


<div id="landenoverzicht_a_container">
    <a href='./homepage.php' id="landenoverzicht_a">Terug naar de homepage.</a>
</div>

</main>



<!-- Include footer.html -->
<?php
include "../Webpages/include pages/footer.php";
?>