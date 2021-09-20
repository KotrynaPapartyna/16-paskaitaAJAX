<?php require_once("connection.php"); ?>

<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>

    <?php require_once("linkai.php"); ?>

</head>
<body>
    <div class="container">

        <div id="alert-space">

        </div>

        <button id="user_create">Create New User</button>
        
        <div class="userForm d-none">
            <input  id="vardas" class="form-control" placeholder="Įveskite vardą" />
            <input id="pavarde" class="form-control" placeholder="Įveskite pavardę" />
            <input id="slapyvardis" class="form-control" placeholder="Įveskite slapyvardį" />
            
            <button id="createUser">Create</button>
        </div>

        <div id="output">
            <table class="table table-striped">
                <?php 
                
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
                
                ?>

            </table>
        </div>
    </div>


    <script src="script2.js"></script>
</body>
</html>