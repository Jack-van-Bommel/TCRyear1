<!-- Category change data action page -->
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
    <h1>Een categorie wijzigen</h1>
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
        $query = $db->prepare("SELECT categorienaam FROM categorieën WHERE idcategorie = $id");
        $query->execute();
        $result = $query->fetchALL(PDO::FETCH_ASSOC);
        printform($result, $id);
    }
}

// Print data inside form
function printform($result, $id) {
    $name = $result[0]["categorienaam"];
    $form = "<div class='cat_wzg_form'><form method='POST'>";

    $form .= "<label for='cat_id'>Categorie ID NIET AANPASSEN!: </label>";
    $form .= "<input type=''text' name='cat_id' value='$id'>";
    $form .= "<br>";

    $form .= "<label for='cat_name'>Categorie naam: </label>";
    $form .= "<input type=''text' name='cat_name' value='$name'>";
    $form .= "<br><br>";

    $form .= "<input type='submit' name='submit_btn' value='Wijzigen'>";
    $form .= " <input type='submit' name='goback' value='Keer terug'>";

    $form .= "</form></div>";
    echo $form;
}

function updatedb() {
    $db = new PDO("mysql:host=localhost;dbname=mediamarkt", "root", "");
    $id = $_POST["cat_id"];
    $name = $_POST["cat_name"];
    $update = $db->prepare("UPDATE `categorieën` SET `categorienaam` = '$name' WHERE `categorieën`.`idcategorie` = $id;");
    $update->execute();
    slep();
}

function slep() {
    header("location: categoriecrud.php");
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
    header("location: categoriecrud.php");
}

?>
</main>


<!-- Include footer.html -->
<?php
include "../Webpages/include pages/footer.php";
?>