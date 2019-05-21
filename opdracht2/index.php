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
            <?php

               $query = 
            //    "SELECT COUNT(requests.country_from) as count_country_from
            //    , COUNT(requests.country_to) as count_country_to
            //     FROM requests
            //     INNER JOIN countries
            //     on countries.country_code = requests.country_from";

            "SELECT * FROM requests
                 INNER JOIN countries on COUNT(requests.country_from) as num_of_countries where (countries.country_code = requests.country_from)
                 ,COUNT(requests.country_to) as export_of_countries where (countries.code = requests.country_to)";
                
                $db_result = $conn->query($query);

                foreach ($db_result as $row){
                echo "<table class='table'>";

                echo "<tr>";
                echo "<td>Country Name</td>";
                echo "<td>" .$row['country_name']. "</td>";
                echo "</tr> <br>";
 
                echo "<tr>";
                    echo "<td>Count Import</td>";
                    echo "<td> " .$row['num_of_countries']. "</td>";
                echo "</tr> <br>";

                echo "<tr>";
                    echo "<td>Count Export</td>";
                    echo "<td> " .$row['export_of_countries']. "</td>";
                echo "</tr> <br>";


                echo  "</table>";
                }
            
                $conn = null;
        
            ?>
    </center>

    <script src="app.js"></script>
</body>
</html>