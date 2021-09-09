<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vartotojų generavimas</title>
</head>
<body>
    <!-- action gali buti tuscias- tada automatiskai kreipsis i save-->
    <form action="usersSeed.php" method="get">
        <button type="submit" name="submit">Sukurti vartotojus</button>
    </form>
    <?php 

    // vartotojai prisideda

    require_once("connection.php");

    if(isset($_GET["submit"])) {
        for ($i=0; $i<200; $i++) {

            $vardas = "vardas".$i;
            $pavarde = "pavarde".$i;
            $slapyvardis = "slapyvardis".$i;
                      

        $sql = "INSERT INTO `vartotojaiajax`(`vardas`, `pavarde`, `slapyvardis`) 
                 VALUES ('$vardas', '$pavarde', '$slapyvardis')";

            if(mysqli_query($conn, $sql)) {
                echo "Vartotojas sukurtas sėkmingai";
                echo "<br>";
            } else {
                echo "Kažkas įvyko negerai";
                echo "<br>";
            }
        }
    }
?>
</body>
</html>