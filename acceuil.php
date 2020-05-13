<!DOCTYPE html>
<html lang="en">

<head>
    <title>Online Store</title>

    <?php

    include 'links.php';

    ?>

</head>

<body>
    <div class="" style="background-color: white">

        <?php

        include 'navbar.php';

        ?>


        <!------------------------------------------------------->
        <br><br><br>
        <div class="container-fluid" style="right: 0; left: 0;">
            <nav class="navbar navbar-expand-sm navbar-dark top-nav-collapse" style="background-color: #929FBA;" id="categories">

                <!-- Navbar brand -->
                <span class="navbar-brand">Catégories:</span>

                <!-- Collapse button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Collapsible content -->
                <div class="collapse navbar-collapse" id="basicExampleNav">

                    <!-- Links -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Toutes les catégories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Ordinateurs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Périphériques & accessoires</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Stockage de données</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Imprimantes & scanners</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Logiciels</a>
                        </li>

                        <form class="form-inline">
                            <div class="md-form my-0">
                                <input class="form-control mr-sm-2" type="text" placeholder="Chercher une catégorie" aria-label="Search">
                                <button type="submit" class=" btn-info"><i class="fas fa-search" style="color: white;"></i></button>
                            </div>
                        </form>

                    </ul>
                    <!-- Links -->
                </div>
                <!-- Collapsible content -->

            </nav>
        </div>

        <!------------------------------------------------------->

        <br<br><br><br>


            <div class="container-fluid" id="products">
                <div id="middle_content">
                    <a href="product.php" style="all: unset;">
                        <div id="image_container">
                            <div id="image_info">
                                <img class="image" src="images/raw.jpg" alt="PC protable:Predator">
                                <p class="info"><span style="color: blue;font-weight: bolder;">PC protable</span><br><span style="color: red">Predator</span><br>8999DH</p>
                            </div>
                        </div>
                    </a>
                    <?php
                    for ($i = 0; $i < 11; $i++) {
                        echo ('<a href="product.php" style="all: unset;"> <div id="image_container">
						<div id="image_info">
							<img class="image" src="images/raw.jpg" alt="PC protable:Predator">
							<p class="info"><span style="color: blue;font-weight: bolder;">PC protable</span><br><span style="color: red">Predator</span><br>8999DH</p>
						</div>
                    </div>
                    </a>
				');
                    }
                    ?>
                </div>
            </div>

            <br><br><br>


            <?php

            include 'footer.php';

            ?>



    </div>


</body>

</html>