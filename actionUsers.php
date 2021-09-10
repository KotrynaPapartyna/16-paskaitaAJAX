<?php require_once("connection.php"); ?>

<?php 

echo '<table class="table table-striped">';
              
                
    $sql = "SELECT `ID`, `vardas`, `pavarde`, `slapyvardis` 
    FROM `vartotojaiajax` 
    WHERE 1
    ORDER BY vartotojaiajax.ID DESC";

    $result = $conn->query($sql);

    while($users = mysqli_fetch_array($result)) {
        echo "<tr>";
            echo "<td>".$users["ID"]."</td>";
            echo "<td>".$users["vardas"]."</td>";
            echo "<td>".$users["pavarde"]."</td>";
            echo "<td>".$users["slapyvardis"]."</td>";
        echo "</tr>";
    }         
            

echo '</table>';

?>