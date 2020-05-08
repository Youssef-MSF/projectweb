<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/mystyle.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body data-spy="scroll" data-target=".navbar">
  <header id="header">

    <nav class="navbar navbar-expand-sm bg-success navbar-dark fixed-top top-nav-collapse">
      <!-- Brand -->
      <div class="container">
        <a class="navbar-brand" href="#"><img src="nav-1/img/02.png"></a>
        <a class="navbar-brand" href="#">Online Store</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link mx-3" href="#about">Home</a>
            </li>
            <li class="nav-item">
              <button class="container bg-success" style="border: none; "> <a class="nav-link mx-3" href="#">Signup</a></button>
            </li>
            <li class="nav-item">
              <button class="container bg-success" class="btn btn-success" data-target="#mymodal" data-toggle="modal" style="border: none; "><a class="nav-link mx-3">Login</a></button>
            </li>

          </ul>
        </div>
      </div>
    </nav>
  </header>


  <div class="modal fade" id="mymodal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content ml-5" style="background-color: #99ffbb;">
        <div class="col-12 user-img">
          <img src="nav-1/img/03.png" style="background-color: #3b4652;">
        </div>
        <div class="align-self-center">
          <form class="col-12">
            <br>
            <div class="form-group">
              <table>
                <tr>
                  <td><i class="fa fa-user" aria-hidden="true"></i></td>
                  <td><input type="text" placeholder="Enter Username"></td>
                </tr>
              </table>
            </div>
            <div class="form-group">
              <table>
                <tr>
                  <td><i class="fa fa-key" aria-hidden="true"></i></td>
                  <td><input type="password" placeholder="Enter Password"></td>
                </tr>
              </table>
            </div>
            <button type="submit" class="btn" style="background-color: white;"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</button>
          </form>
        </div>
        <div class="col-12 forgot">
          <a href="#">Forgot Password?</a>
        </div>
      </div>
    </div>

  </div>




</body>

</html>