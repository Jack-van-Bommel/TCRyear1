<!-- Add new countries to database -->
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
<main class="cat_toe_main">
    <div class="cat_toe_cont">
        <h1 id="cat_toe_h1">Nieuwe landen toevoegen!</h1>
    </div>

    <div id="cat_toe_form_cont">
        <form method="POST" action="#" class="cat_toe_form">
            <label for="cat_name">Landnaam: </label>
            <br>
            <input type="text" name="cat_name">
            <br><br>
            <label for="country_afk">Afkorting naam: </label>
            <br>
            <input type="text" name="country_afk">
            <br><br>
            <input type="submit" name="submit_btn" value="Land Toevoegen">
            <br><br>
            <a href="landencrud.php" id="country_toev_goback">Keer Terug</a>
        </form>
    </div>


<!-- Main PHP code -->
<?php
function connectdb() {
    try {
        $db = new PDO("mysql:host=localhost;dbname=mediamarkt", "root", "");
        return $db;
    }
    catch (PDOException $e) {
        die("ERROR: " . $e->GetMessage());
    }
}

function pushdata($db) {
    $catname = readform();
    $afk = $_POST["country_afk"];
    $query = $db->prepare("INSERT INTO `landen` (`landnaam`, `afkortingnaam`) VALUES ('$catname', '$afk');");
    $query->execute();
    echo"<script type='text/javascript'>alert('Land $catname is toegevoegd!');</script>";
}

function readform() {
    $catname = $_POST["cat_name"];
    return $catname;
}

if (isset($_POST["submit_btn"])) {
    $db = connectdb();
    pushdata($db);
}

?>
</main>


<!-- Include footer.html -->
<?php
include "../Webpages/include pages/footer.php";
?>