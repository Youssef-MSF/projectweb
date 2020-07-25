<?php 

    session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fin Achat</title>
</head>

<body style="background-color: gray;">

    <style>
        #merci {
            background-color: greenyellow;
            width: 60%;
            height: 300px;
            border-radius: 20px;
            margin: 50px;
            text-align: center;
            font-size: xx-large;
            font-family: monospace;
            font-weight: bolder;
        }
    </style>

    <?php

    include 'links.php';
    include 'navbar.php';

    ?>

    <div id="merci">

        <p>Merci pour votre visite, vous receverez un email pour la confirmation d'achat.</p>

    </div>

    <script>
        $(function() {
            $("#merci").animate({
                margin: '20%',
                padding: '5%',
                color: 'gray'
            }, 2000);

            $("#merci p").animate({
                margin: '1%',
                padding: '1%',
                color: 'gray'
            }, 2000);
        });
    </script>

    <?php
    
        include 'footer.php';
    
    ?>

</body>

</html>