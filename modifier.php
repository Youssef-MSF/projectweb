<?php

if (isset($_POST['supprimer'])) {

  $id = $_POST['id'];

  try {
    // Connecter à Mysql
    $conn = new PDO('mysql:host=localhost; dbname=projetweb;charset=utf8', 'root', '');
  } catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
  }

  $sql = "UPDATE article SET is_deleted=1 WHERE id='$id'";
  $stmt = $conn->prepare($sql);
  $stmt->execute();

  header("location:EspaceAdmin.php");

} else if (isset($_POST['modifier'])) {

  $categorie = $_POST['categorie'];
  $design = $_POST['design'];
  $prix = $_POST['prix'];
  $id = $_POST['id'];

  try {
    // Connecter à Mysql
    $conn = new PDO('mysql:host=localhost; dbname=projetweb;charset=utf8', 'root', '');
  } catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
  }

  foreach ($conn->query("SELECT image FROM article WHERE id=$id") as $row) {
    $myImg = $row['image'];
  }

?>



  <!DOCTYPE html>
  <html>

  <head>
    <title>Modifier</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/stylo.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
      <a class="navbar-brand"><b>Espace Admin</b></a>
    </nav><br>
    <div class="container-fluid">
      <div class="row">
        <div class=" col-md-2">

        </div>
        <div class=" col-md-8">
          <div class="card">
            <div class="card-header"><b>Modifier une article :</b>

            </div>
            <div class="card-body">
              <form method="post" enctype="multipart/form-data" action="modifierInfoProduit.php">
                <div class="row">

                  <div class="col-md-12">
                    <label for="adr"><b>Nom</b></label>
                    <input type="text" class="form-control" name="nom" value=<?php echo $design; ?>><br></div>

                  <div class="col-md-12">
                    <label for="adr"><b>prix</b></label>
                    <input type="text" class="form-control" name="prix" value=<?php echo $prix; ?>><br>
                  </div>
                  <div class="col-md-12">
                    <label for="adr"><b>Catégorie</b></label><br>
                    <select name="categorie" class="form-control" size=1>
                      <option>Ordinateurs</option>
                      <option>Périphériques & accessoires</option>
                      <option>Stockage de donnees</option>
                      <option>Imprimantes & scanners</option>
                      <option>Logiciels</option>
                    </select><br>


                  </div><br>

                  <input type="text" hidden="hidden" value=<?php echo $id; ?> name="id">

                  <div class="col-md-12">
                    <label for="tel"><b>Image</b></label>
                    <input type="file" class="form-control" name="img" value=""><br>

                    <img width="100px" src=<?php echo 'data:image;base64,' . base64_encode($myImg); ?> alt=""><br>

                  </div>



                  <div class="col-md-6 text-left mb-3 ">
                    <button type="submit" name="eng" class="btn">Enregistrer</button>
                  </div>

                </div>

              </form>


            </div>


          </div>

        </div>
        <div class=" col-md-2">

        </div>

      </div>
    </div>




  </body>


  </html>
<?php

} ?>