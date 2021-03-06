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
            //Query 0: alle countries
            $query="SELECT * from countries";
            $db_result = $conn->query($query);
           
            foreach ($db_result as $country){
                echo "['" .$country['country_name']. "',";
               
            
                //Query 1: Het land van de loop, count op aantal import
                $query2 = 
               "SELECT COUNT(requests.country_from) as count_country_from
                FROM requests
                WHERE country_from = '".$country['country_code']."'";
                

                $db_result = $conn->query($query2);

                foreach ($db_result as $row){
                    echo " ".$row['count_country_from']. ",";                     
                }
                //Query 2: Het land van de loop, count op aantal export
                $query3 = 
                "SELECT COUNT(requests.country_to) as count_country_to
                 FROM requests
                WHERE country_to = '".$country['country_code']."'";
 
                 $db_result = $conn->query($query3);
 
                 foreach ($db_result as $row){
                    
                     echo " " .$row['count_country_to']. "],";
                     echo "<br>";
                 }
            }

            ?>
            </div>
    </center>

    <script src="app.js"></script>
</body>
</html>