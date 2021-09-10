<?php require_once("connection.php"); ?>

<?php 

$vardas = $_GET["vardas"];
$pavarde = $_GET["pavarde"];
$slapyvardis = $_GET["slapyvardis"];


$sql = "INSERT INTO `vartotojaiajax`(`vardas`, `pavarde`, `slapyvardis`) 
VALUES ('$vardas','$pavarde','$slapyvardis')";

if(mysqli_query($conn, $sql)) {

    echo '<div class="alert alert-success" role="alert">';
        echo "Vartotojas ".$vardas." pridėtas sėkmingai";        
    echo '</div>';
} else {
    echo '<div class="alert alert-danger" role="alert">';
        echo "Kažkas įvyko negerai. Užklausa nesėkminga";
    echo '</div>';    
}

?>