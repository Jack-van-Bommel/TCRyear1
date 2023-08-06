<html>
    <link rel="stylesheet" href="style.css">
<?php 

/*var_dump ($_POST);*/
echo "<br>";

$a[0] = "Jan";
$a[1] = "Rob";
$a[2] = "Piet";

$b = array(10,11,2,34,100,1000);

echo '<table border= "1" width= "100">';
foreach($_POST as $value){
    //toevoegen tr en td
    echo "<tr><td>";
    //print naam
    echo $value . "<br>";
    //afsluiten tr en td
    echo "</td></tr>";
}

echo '</table>';

//var_dump($a);
echo "<br>";
date_default_timezone_set("Europe/Amsterdam");
echo "De datum van vandaag is " . date ("D-m-y") . "<br>"; 
/* print username */
echo "Username:" . $_POST ["Uname"] . "<br>";
echo "Password:" . $_POST ["Pname"] . "<br>";
//var_dump($_POST);


/* print een foutmelding als username < 5 tekens */
$len = strlen($_POST['Uname']);
echo "De lengte van de username: $len";

if ( $len < 5) {
    echo "<br>Username moet groter zijn dan 4 tekens <br>";
}
/* print een foutmelding als username > 10 tekens */
else if ($len > 10) {
    echo "<br>Username moet kleiner zijn dan 10 tekens <br>";
}
//var_dump($_POST);
?>
</html>