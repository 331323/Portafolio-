<!doctype html>
<html lang="en">
  <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="./style.css">

        <title>PDO Sandbox</title>
  </head>
  <body>
      <main class="container">
          <div class="row text-center">
              <div class="col-12">
                  <h1>Bestel uw Mercedes AMG</h1><br><br>
              </div>
          </div>
          <div class="row">
              <div class="col-3">
              </div>
              <div class="col-6">
                  <form action="./create" method="post">
                        <div class="col mb-3">
                         <label for="cars">Kies a Mercedes-AMG Models:</label>
                         <select name="cars" class="form-select" aria-label="Disabled select example">
                            <option value="cars">Mercedes-AMG G-Class</option>
                            <option value="cars">Mercedes-AMG GLB</option>
                            <option value="cars">Mercedes-AMG GLE 53 (SUV)</option>
                            <option value="cars">Mercedes-AMG A-Class</option>
                            <option value="cars">Mercedes-AMG C-Class</option>
                         </select>
                        </div>
                        <div class="col mb-3">
                         <label for="pakket">Kies a Mercedes-AMG Models:</label>
                         <select name="pakket" class="form-select" aria-label="Disabled select example">
                            <option value="pakket">Low</option>
                            <option value="pakket">High</option>
                            <option value="pakket">Middium</option>
                            <option value="pakket">Expensive</option>
                            <option value="pakket">Super-Low</option>
                         </select>
                        </div>

                        <div class="col mb-3">
                         <label for="color">Kleur:</label><br>
                         <input type="color" name="color" value="#ff0000">
                        </div>

                        <div class="col mb-3">
                         <label for="trekhaak">Trekhaak:</label><br>
                         <label for="trekhaak">Wel:</label>
                         <input name="trekhaak" type="radio" aria-describedby="genderhelp">
                         <label for="trekhaak">Geen:</label>
                         <input name="trekhaak" type="radio" aria-describedby="genderhelp">
                        </div>

                        <div class="col mb-3">
                         <label for="vermogen">Maximaal vermogen :</label><br>
                         <input type="number" name="vermogen" min="1" max="5">
                        </div>

                        <div class="col mb-3">
                         <label for="vermogen">Maximaal koppel :</label><br>
                         <input type="number" name="koppel" min="1" max="5">
                        </div>

                        <div class="Button mb-3">
                            <input class="form-control" type="submit" value="verstuur">
                        </div>
                  </form>
              </div>
              <div class="col-3"></div>
          </div>
      </main>
       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>