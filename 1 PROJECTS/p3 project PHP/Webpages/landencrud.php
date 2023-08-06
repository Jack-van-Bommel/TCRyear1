<!-- Country CRUD which can be used to change, delete or add new countries to the database -->
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
<main class="cat_main">
    <div class="cat_h1_container">
        <h1 id="cat_h1">Landen overzicht</h1>
    </div>
    <div class="cat_toevoeg_btn_container">
        <form action="landentoevoegen.php">
            <input type="submit" name="sub" value="Landen toevoegen" id="cat_toevoeg_btn">
        </form>
    </div>


<!-- Main PHP code -->
<?php
// Connect to the database
function connectdb() {
    try {
        $db = new PDO("mysql:host=localhost;dbname=mediamarkt", "root", "");
        getdata($db);
    }
    catch (PDOException $e) {
        die("ERROR: " . $e->GetMessage());
    }
}

// Get category data from the database
function getdata($db) {
    $query = $db->prepare("SELECT idland, landnaam, afkortingnaam FROM landen");
    $query->execute();
    $result = $query->fetchALL(PDO::FETCH_ASSOC);
    printdata($result);
}

// Universal printable table
function printdata($result) {
    $table = "<div class='cat_table_container'><table class='cat_table'>";

    $headers = array_keys($result[0]);
    $table .= "<tr>";
    foreach ($headers as $headers) {
        $table .= "<th>" . $headers . "</th>";
    }
    $table .= "<th></th><th></th>";
    $table .= "</tr>";

    foreach ($result as $row) {
        $table .= "<tr>";
        foreach ($row as $cell) {
            $table .= "<td>" . $cell . "</td>";
        }

        // CRUD buttons (change/delete)
        $table .= "<td>";
        $table .= "<form method='POST' action='landenwzg.php'>
                    <button class='cat_table_btn' name='wzg_btn' value='$row[idland]'>Wijzigen</button>
                   </form>";
        $table .= "</td>";
        $table .= "<td>";
        $table .= "<form method='POST' action='#'>
                    <button class='cat_table_btn' name='del_btn' value='$row[idland]'>Verwijderen</button>
                   </form>";
        $table .= "</td>";

        $table .= "</tr>";
    }

    $table .= "</table></div>";
    echo $table;
}


function deletecat() {
    $id = $_POST["del_btn"];
    $db = new PDO("mysql:host=localhost;dbname=mediamarkt", "root", "");

    $mysqlquery = $db->prepare("DELETE FROM `landen` WHERE `landen`.`idland` = $id");
    $mysqlquery->execute();
    echo"<script type='text/javascript'>alert('Land verwijdert!');</script>";
}

if (isset($_POST["del_btn"])) {
    deletecat();
}

$db = connectdb();

?>
</main>


<!-- Include footer.html -->
<?php
include "../Webpages/include pages/footer.php";
?>