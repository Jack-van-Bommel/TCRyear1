<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<?php

$username_length = strlen($_POST["username"]);

echo "Your username is: ", $_POST["username"], "<br>";
switch($username_length){
    case 0: echo "ERROR: Username must have a minimum of 5 symbols", "<br>";
    case 1:
    case 2:
    case 3:
    case 4:
        echo "ERROR: Username must have a minimum of 5 symbols", "<br>";
}
echo "Your password is: ", $_POST["password"], "<br>";

?>

</body>
</html>