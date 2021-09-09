<?php require_once("connection.php"); ?>


<?php

$vardas=$_GET["vardas"]; 
$pavarde=$_GET["pavarde"]; 
$teises_id=intval($_GET["teises_id"]); 

$sql = "INSERT INTO `klientaiajax`(`vardas`, `pavarde`, `teises_id`) 
        VALUES ('$vardas','$pavarde',$teises_id)";
if(mysqli_query($conn, $sql)) {

    echo '<div class="alert alert-success" role="alert">';
        echo "Vartotojas".$vardas." ".$pavarde." pridėtas sėkmingai";        
    echo '</div>';
} else {
    echo '<div class="alert alert-danger" role="alert">';
        echo "Kažkas įvyko negerai. Užklausa yra nesėkminga";
    echo '</div>';    
}

?>