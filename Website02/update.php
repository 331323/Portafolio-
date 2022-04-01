<?php

if (!isset($_GET["id"])) {
    header("Location: ./index.php");
    exit();
}

$id =  $_GET["id"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_sandbox";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $stmt = $conn->prepare("SELECT id, firstname, infix, lastname FROM user WHERE id = :id");
  $stmt->bindParam(':id', $id);
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $user = $stmt->fetch();
 //   foreach($stmt->fetchAll() as $key=>$value) {
 //   }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>



<!doctype html>
<html lang="en">
  <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


        <title>PDO Sandbox</title>
  </head>
  <body>
      <main class="container">
          <div class="row text-center">
              <div class="col-12">
                  <h1>PDO Sandbox</h1>
              </div>
          </div>
          <div class="row">
              <div class="col-3">

              </div>
              <div class="col-6">
                  <form action="./update_script.php" method="post">
                        <div class="col mb-3">
                            <label for="inputfirstname" class="form-label">Voornaam</label>
                            <input name="firstname" type="text" class="form-control" 
                            placeholder="firstname" id="inputFirstname" value="<?php echo $user['firstname']; ?>">
                        </div>
                        <div class="col mb-3">
                         <label for="inputinfix" class="form-label">Tussenvoegsel</label>
                            <input  name="infix" type="text" class="form-control" 
                            placeholder="infix" id="inputInfix" value="<?php echo $user['infix']; ?>">
                        </div>
                        <div class="col mb-3">
                         <label for="inputlastname" class="form-label">Achternaam</label>
                            <input name="lastname" type="text" class="form-control" 
                            placeholder="lastname" id="inputLastname" value="<?php echo $user['lastname']; ?>">
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <div class="Button mb-3">
                            <input class="form-control" type="submit"  value="verstuur">
                        </div>
                  </form>
              </div>
              <div class="col-3"></div>
          </div>
      </main>
       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>