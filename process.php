<?php
header('Refresh: 5; url=index.php');
include_once('connect.php');
$naam = $_POST['naam'];
$bericht = $_POST['bericht'];
$datum = $_POST['datum'];
 ?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>

    <body>
        <?php 
             $insert = "INSERT INTO Berichten (ID, Naam, Bericht, Datum)
             VALUES ('', '$naam', '$bericht', '$datum')";
         
             if ($db->query($insert) === TRUE) {
                 echo "Je wens/bericht is opgeslagen!";
             } else {
                 echo "Error: " . $insert . "<br>" . $db->error;
             }
         
             $db->close();
        ?>
    </body>

</html>