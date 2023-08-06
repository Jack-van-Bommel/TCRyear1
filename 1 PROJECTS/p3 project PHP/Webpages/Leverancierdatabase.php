<?php
include "../Webpages/include pages/head.php";
?>
<!-- Include navbar.html -->
<?php
include "../Webpages/include pages/navbar.php";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mediamarkt";

// Connectie maken met de PDO.
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

if (isset($_POST["knop"])) {
    $id = $_POST['idleverancier'];
    $Leverancier = $_POST['leveranciernaam'];
    $landen = $_POST['landen_idland'];

    // Check if leverancier already exists
    $checkQuery = $conn->prepare("SELECT COUNT(*) FROM leveranciers WHERE idleverancier = :idleverancier");
    $checkQuery->bindParam(':idleverancier', $id);
    $checkQuery->execute();
    $rowCount = $checkQuery->fetchColumn();

    if ($rowCount == 0) {
        //voorbereid sql op de insert
        $query = $conn->prepare("INSERT INTO leveranciers (idleverancier, leveranciernaam, landen_idland)
                           VALUES (:idleverancier, :leveranciernaam, :landen_idland)");

        // bindt de parameters bij de bewering 
        $query->bindParam(':idleverancier', $id);
        $query->bindParam(':leveranciernaam', $Leverancier);
        $query->bindParam(':landen_idland', $landen);

        // Execute the statement
        $query->execute();
        Data();
    } else {
        echo "Deze leverancier bestaat al.";
    }
}

function Data()
{
    echo "Data is Verzonden";
}
?>
<body>
<form method="post" action="" class="productklacht_form">
        Leverancier ID: <input type="text" name="idleverancier" id="idleverancier"><br><br>
        Land ID: <input type="text" name="landen_idland" id="landen_idland"><br><br>
        Leverancier Toevoegen: <input type="text" name="leveranciernaam" id="leveranciernaam"><br><br>
        <input type="submit" name="knop" id="productklacht_submit">
    </form>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php include "../Webpages/include pages/footer.php"; ?>
</body>