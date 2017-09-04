<?php
include_once('connect.php');

$sql = "SELECT ID, Naam, Bericht, Datum FROM Berichten";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["Naam"]. " Bericht: " . $row["Bericht"] . "<br>";
    }
} else {
    echo "0 results";
}
$db->close();
 ?>

