<!-- This is the webshop -->
<!-- Author: Jack -->

<!-- Include head.html -->
<?php 
include "../Webpages/include pages/head.php";
?>
<!-- Include navbar.html -->
<?php 
include "../Webpages/include pages/navbar.php";
?>



<!-- Main code -->
<main class="webshop_main">
<div id="webshop_h1">
    <h1>Webshop</h1>
</div>

<!-- Main PHP code -->
<?php
// Functions
function connectdb() {
    try {
        $db = new PDO("mysql:host=localhost;dbname=mediamarkt", "root", "");
        // echo "Connection succesful!";
        queryread($db);
    } catch (PDOException $e) {
        die("ERROR: " . $e->getMessage());
    }
}

function queryread($db) {
    $read = $db->prepare("SELECT producten.idproduct AS 'ID', producten.productnaam AS Product, producten.prijs AS Prijs, leveranciers.leveranciernaam AS Leverancier, categorieën.categorienaam AS Categorie FROM producten INNER JOIN leveranciers ON leveranciers.idleverancier = producten.leveranciers_idleverancier INNER JOIN categorieën ON categorieën.idcategorie = producten.categorieën_idcategorie ORDER BY categorieën.categorienaam ASC;");
    $read->execute();
    $result = $read->fetchALL(PDO::FETCH_ASSOC);
    queryprint($result);
}

function queryprint($result) {
    // Universal Database result printer
    $table = "<div class='productentable_container'><table id='productentable_body'";

    $headers = array_keys($result[0]);
    $table .= "<tr>";
    foreach($headers as $header){
        $table .= "<th>" . $header . "</th>";  
    }
    // $table .= "<th></th>"; 
    $table .= "</tr>";

    foreach ($result as $data) {
        $table .= "<tr>";
        foreach ($data as $info) {
            $table .= "<td>" . $info . "</td>";
        }       
        // $table .= "<td><form method='POST' action='#'>
        // <input type='submit' value='Bekijken'>
        // </form></td>";
        $table .= "</tr>";
    }

    $table .= "</table></div>";
    echo $table;
}

// Execute functions
connectdb();

?>


</main>



<!-- Include footer.html -->
<?php
include "../Webpages/include pages/footer.php";
?>
