  <?php

  session_start();
  $db = mysqli_connect("localhost", "root", "", "projetweb");
  if (isset($_POST['eng'])) {

    //if (count($_FILES) > 0) {
      //if (is_uploaded_file($_FILES['img']['tmp_name'])) {
        $image = addslashes(file_get_contents($_FILES['img']['tmp_name']));

        $nm = $_POST['nom'];
        $pr = $_POST['prix'];
        $ct = $_POST['cat'];
        //$mg = $_POST['img'];

        if ($nm != "" && $pr != "" && $ct != "") {
          $sql = "INSERT INTO article (design, prix, categorie, image) VALUES ('$nm','$pr','$ct','$image')";
          mysqli_query($db, $sql);
          header('location:EspaceAdmin.php');
        } else {
          echo "<script>window.alert('Vérifier si tous les champs est remplis')</script>";
        }
      //}
    //}
  }

  ?>

  <!DOCTYPE html>
  <html>

  <head>
    <title>Login</title>
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
    </nav>
    <br><br><br>
    <div class="container-fluid">
      <div class="row">
        <div class=" col-md-2">

        </div>
        <div class=" col-md-8">
          <div class="card">
            <div class="card-header"><b>Ajouter nouveau produit</b>

            </div>
            <div class="card-body">
              <form method="post" enctype="multipart/form-data">
                <div class="row">

                  <div class="col-md-12">
                    <label for="adr"><b>Nom</b></label>
                    <input type="text" class="form-control" name="nom" placeholder="Entrer le nom du produit"><br></div>

                  <div class="col-md-12">
                    <label for="adr"><b>prix</b></label>
                    <input type="text" class="form-control" name="prix" placeholder="Entrer le prix du produit"><br>
                  </div>
                  <div class="col-md-12">
                    <label for="adr"><b>Catégorie</b></label><br>
                    <select name="cat" class="form-control" size=1>
                      <option>Ordinateurs</option>
                      <option>Périphériques & accessoires</option>
                      <option>Stockage de données</option>
                      <option>Imprimantes & scanners</option>
                      <option>Logiciels</option>
                    </select><br>


                  </div><br>

                  <div class="col-md-12">
                    <label for="tel"><b>Image</b></label>
                    <input type="file" accept="image/png, image/jpeg" class="form-control" name="img" placeholder="Entrer L'image du produit"><br>




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