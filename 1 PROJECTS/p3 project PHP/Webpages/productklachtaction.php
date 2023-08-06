<!-- This is the product complaint action page -->
<!-- Author: Jack -->

<!-- Include head.html -->
<?php 
include "../Webpages/include pages/head.php";
?>
<!-- Include navbar.html -->
<?php 
include "../Webpages/include pages/navbar.php";
?>

<!-- Main -->
<main id="productklacht_action_main">
    <!-- Main HTML -->
    <div id="productklacht_action_h1">
        <h1>Uw klacht is verstuurd naar onze medewerkers! Dit is wat er is opgestuurd:</h1>
    </div>


<!-- product complaint action page php code -->
<?php

function connectdb() {
    try {
        $db = new PDO("mysql:host=localhost;dbname=mediamarkt", "root", "");
        return $db;
    } catch (PDOException $e) {
        die("ERROR: " . $e->getMessage());
    }
}

function printtable() {
    echo "<div class='productklacht_action_container'><table>";
    echo "<tr><th>Voornaam: </th><td>" . $_POST["f_name"] . "</td></tr>";
    echo "<tr><th>Achternaam: </th><td>" . $_POST["l_name"] . "</td></tr>";
    echo "<tr><th>Telefoonnummer: </th><td>" . $_POST["phone"] . "</td></tr>";
    echo "<tr><th>Email: </th><td>" . $_POST["email"] . "</td></tr>";
    echo "<tr><th>Gender: </th><td>" . $_POST["gender"] . "</td></tr>";
    echo "<tr><th>Product: </th><td>" . $_POST["product_naam"] . "</td></tr>";
    echo "<tr><th>Het probleem: </th><td>" . $_POST["klacht_beschrijving"] . "</td></tr>";
    echo "<tr><th>De oplossing: </th><td>" . $_POST["klacht_oplossing"] . "</td></tr>";
    echo "</table></div>";
}

function queryinsert($conn) {
    $fname = $_POST["f_name"];
    $lname = $_POST["l_name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $product = $_POST["product_naam"];
    $probleem = $_POST["klacht_beschrijving"];
    $oplossing = $_POST["klacht_oplossing"];
    // query insert
    $queryinsert = $conn->prepare("INSERT INTO productklachten(voornaam, achternaam, telefoon, email, gender, product, probleem, oplossing) VALUES ('$fname', '$lname', '$phone', '$email', '$gender', '$product', '$probleem', '$oplossing')");
    $queryinsert->execute();
}

printtable();
$conn = connectdb();

if (isset($_POST["submit_btn"])) {
    queryinsert($conn);
}

?>

<div id="productklachtaction_a_container">
    <a href='./homepage.php' id="productklachtaction_a">Terug naar de homepage.</a>
</div>

</main>

<!-- Include footer.html -->
<?php
include "../Webpages/include pages/footer.php";
?>
