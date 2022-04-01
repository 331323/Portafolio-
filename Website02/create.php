<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_sandbox";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // prepare sql and bind parameters
  $stmt = $conn->prepare("INSERT INTO user (id, firstname, infix, lastname)
  VALUES (:id, :firstname, :infix, :lastname)");
  $stmt->bindParam(':id', $id);
  $stmt->bindParam(':firstname', $firstname);
  $stmt->bindParam(':infix', $infix);
  $stmt->bindParam(':lastname', $lastname);

    //var_dump($stmt->bindParam(':firstname', $firstname)); exit();

  //insert a row
   $id = null;
   $firstname = $_POST["firstname"];
   $infix = $_POST["infix"];
   $lastname = $_POST["lastname"];
  
 

  $stmt->execute();

  echo "New records created successfully";
  header("Refresh:3; ./read.php");
} catch(PDOException $e) {
  echo $e->getMessage();
}
// $conn = null;
?>