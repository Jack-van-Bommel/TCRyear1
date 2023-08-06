<?php
        require_once('functions.php');

            // test of er op de wijzig knop is gedrukt
            if(isset($_POST['btn_vwd'])){
                DeleteBier($_POST);
            
            }
    ?>

<?php
        require_once('functions.php');
        // test of er op de wijzig knop is gedrukt
        if(isset($_POST['btn_vwd'])){
            DeleteBier($_POST);

            header("location: crud_bieren.php");
            

        }
        
        if (isset($_POST['biercode'])){
        echo "<h1>Delete Bier</h1>";

        echo "Data uit het vorige formulier:<br>";
        // Haal alle info van de betreffende biercode $_POST['biercode']
        $biercode = $_POST['biercode'];

        $row = GetBier($biercode);
    
   ?>

<html>
    <body>
            
    </body>
</html>

<?php
        }
        ?>