<!-- Author: Dylan -->

<!-- Include head.html -->
<?php 
include "../Webpages/include pages/head.php";
?>
<!-- Include navbar.html -->
<?php 
include "../Webpages/include pages/navbar.php";
?>


<html>
<!-- Main HTML code -->
<main id="producten-main">
<div class="producten-main-h1">
    <h1 id="producten-h1">Overzicht van alle producten.</h1>
</div>


<!-- Main PHP code -->
<!DOCTYPE html>

<body>
	<main class="Producten-main">
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

		function getdata($db) {
		    $queryread = $db->prepare("SELECT * FROM producten");
		    $queryread->execute();
		    $result = $queryread->fetchAll(PDO::FETCH_ASSOC);
		    printtable($result);
		}

		function printtable($result) {
		    $table = "<div class= 'producten_table_div'><table class='producten_table'>";
		    $headers = array_keys($result[0]);
		    $table .= "<tr>";
		    foreach ($headers as $header) {
		        $table .= "<th>" . $header . "</th>";
		    }
		    $table .= "</tr>";

		    foreach ($result as $data) {
		        $table .= "<tr>";
		        foreach ($data as $row) {
		            $table .= "<td>" . $row . "</td>";
		        }
		        $table .= "</tr>";
		    }

		    $table .= "</table></div><br>";
		    echo $table;
		}


		$db = connectdb();
		getdata($db);

		?>
	</main>
</body>
</html>

<!-- Include footer.php -->
<?php 
include "../Webpages/include pages/footer.php";
?>
