<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Įmonių generavimas</title>
</head>
<body>
    <!-- action gali buti tuscias- tada automatiskai kreipsis i save-->
    <form action="companiesSeed.php" method="get">
        <button type="submit" name="submit">Sukurti įmones</button>
    </form>
    <?php 

// Sugeneruos 200 klientu i duomenu baze

    require_once("connection.php");

    if(isset($_GET["submit"])) {
        for ($i=0; $i<200; $i++) {

            $pavadinimas = "pavadinimas".$i;
            $aprasymas = "aprasymas".$i;
            $tipas_id = rand(0, 5);
            

        $sql = "INSERT INTO `imones`(`pavadinimas`, `aprasymas`, `tipas_id`) 
            VALUES ('$pavadinimas','$aprasymas', '$tipas_id')";

            if(mysqli_query($conn, $sql)) {
                echo "Vartotojas sukurtas sekmingai";
                echo "<br>";
            } else {
                echo "Kazkas ivyko negerai";
                echo "<br>";
            }
        }
    }

//INSERT komanda i klientai lentele 200 kartu


?>
</body>
</html>