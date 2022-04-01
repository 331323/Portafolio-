<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_sandbox";
// var_dump($_POST);exit();
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE user
          SET    firstname = :firstname,
                 infix = :infix,
                 lastname = :lastname
          WHERE  id = :id";

  // Prepare statement
  $stmt = $conn->prepare($sql);


  $stmt->bindParam(':firstname', $firstname);
  $stmt->bindParam(':infix', $infix);
  $stmt->bindParam(':lastname', $lastname);
  $stmt->bindParam(':id', $id);


  $firstname = $_POST["firstname"];
  $infix = $_POST["infix"];
  $lastname = $_POST["lastname"];
  $id = $_POST["id"];
  // execute the query

  $stmt->execute();

  // echo a message to say the UPDATE succeeded
  echo  "record met id={$id} UPDATED successfully";
  header("Refresh:5; ./read.php");
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>