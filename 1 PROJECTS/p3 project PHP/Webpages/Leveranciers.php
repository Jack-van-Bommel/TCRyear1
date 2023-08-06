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
<main id="leveranciers-main">
<div class="leveranciers-main-h1">
    <h1 id="leveranciers-h1">Overzicht van alle leveranciers.</h1>
</div>


<!-- Main PHP code -->
<body>
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
		    $queryread = $db->prepare("SELECT * FROM leveranciers");
		    $queryread->execute();
		    $result = $queryread->fetchAll(PDO::FETCH_ASSOC);
		    printtable($result);
		}

		function printtable($result) {
		    $headers = array_keys($result[0]);
            $table = "<div class= 'leveranciers-table-div'> <table class='leveranciers-table'>";
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

