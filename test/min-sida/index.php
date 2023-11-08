<?php
   $host = "localhost";
   $port = 3306;
   $database = "test";
   $username = "root";
   $password = "";

   $connection = new mysqli($host, $username, $password, $database, $port);

if ($connection->connect_error){
   die("anslutningen misslyckades:" . $connection->connect_error);
}

// UPPGIFT 1 //

$sql = "SELECT email FROM customers WHERE customer_id";

$result = $connection->query($sql);

if($result->num_rows > 0){
   echo "E-postadresser för kunder: <br>";

   while($row = $result->fetch_assoc()){
      echo $row["email"] . "<br>";
   }
} else {
   echo "Inga kunder hittades.";
}

// UPPGIFT 2 //

$sql = "SELECT * FROM orders ORDER BY order_date DESC";

$result = $connection->query($sql);

if($result->num_rows > 0) {
   echo "Ordrar sorterande efter skapningsdatum i fallande ordning: <br>";

   while ($row = $result->fetch_assoc()){
      echo "Order ID: " . $row["order_id"] . "<br>" ."Skapat datum: " . $row["order_date"] . "<br>";

   }
} else {
   echo "Inga ordrar hittades.";
}


// UPPGIFT 3 //






$connection->close();


?>

