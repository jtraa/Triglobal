<?php
include_once 'config/database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax Sandbox</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css" />
</head>
<body>
    <center>
        <div class="container">
            <a href="index.php" class="button">Randomize</a><br><br>
            <?php

               $query = 
               "SELECT * FROM requests  
               ORDER BY RAND ( )  
               LIMIT 1";

                $db_result = $conn->query($query);

                foreach ($db_result as $row){
                    echo "Aanvraag met nummer " .$row['id']. " verhuisd naar " 
                    .$row['country_from']. " naar " .$row['country_to'];  
                }
            
                $conn = null;
        
            ?>
    </center>

    <script src="app.js"></script>
</body>
</html>