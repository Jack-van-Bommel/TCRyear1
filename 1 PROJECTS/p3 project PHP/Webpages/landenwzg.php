<!-- Country change data action page -->
<!-- Author: Jack -->

<!-- Include head.html -->
<?php 
include "../Webpages/include pages/head.php";
?>
<!-- Include navbar.html -->
<?php 
include "../Webpages/include pages/navbar.php";
?>


<!-- Main HTML code -->
<main class="cat_wzg_main">
<div class="cat_wzg_h1_cont">
    <h1>Een land wijzigen</h1>
</div>

<!-- Main PHP code -->
<?php
// Connect to the database
function connectdb($id) {
    try {
        $db = new PDO("mysql:host=localhost;dbname=mediamarkt", "root", "");
        getcategory($db, $id);
        return $db;
    }
    catch (PDOException $e) {
        die("ERROR: " . $e->GetMessage());
    }
}

// Get category data from database
function getcategory($db, $id) {
    if (isset($id)) {
        $query = $db->prepare("SELECT landnaam, afkortingnaam FROM landen WHERE idland = $id");
        $query->execute();
        $result = $query->fetchALL(PDO::FETCH_ASSOC);
        printform($result, $id);
    }
}

// Print data inside form
function printform($result, $id) {
    $name = $result[0]["landnaam"];
    $afk = $result[0]["afkortingnaam"];
    $form = "<div class='cat_wzg_form'><form method='POST'>";

    $form .= "<label for='landid'>Land ID NIET AANPASSEN!: </label>";
    $form .= "<input type=''text' name='landid' value='$id'>";
    $form .= "<br>";

    $form .= "<label for='cat_name'>Landnaam: </label>";
    $form .= "<input type=''text' name='country_name' value='$name'>";
    $form .= "<br>";

    $form .= "<label for='cat_name'>Afkorting landnaam: </label>";
    $form .= "<input type=''text' name='country_afkorting' value='$afk'>";
    $form .= "<br><br>";

    $form .= "<input type='submit' name='submit_btn' value='Wijzigen'>";
    $form .= " <input type='submit' name='goback' value='Keer terug'>";

    $form .= "</form></div>";
    echo $form;
}

function updatedb() {
    $db = new PDO("mysql:host=localhost;dbname=mediamarkt", "root", "");
    $id = $_POST["landid"];
    $name = $_POST["country_name"];
    $afk = $_POST["country_afkorting"];
    $update = $db->prepare("UPDATE `landen` SET `landnaam` = '$name', `afkortingnaam` = '$afk' WHERE `landen`.`idland` = $id;");
    $update->execute();
    slep();
}

function slep() {
    header("location: landencrud.php");
}

// Check if submit btn has been pressed
if (isset($_POST["submit_btn"])) {
    updatedb();
}

// Start all code
if (isset($_POST["wzg_btn"])) {
    $id = $_POST["wzg_btn"];
    connectdb($id);
}
else if(isset($_POST["goback"])) {
    header("location: landencrud.php");
}

?>
</main>


<!-- Include footer.html -->
<?php
include "../Webpages/include pages/footer.php";
?>