<?php

include 'links.php';

?>
<?php

include 'navbar.php';

?>

<br><br>
<style>
    #middle_content {
        background-color: white;
        position: relative;
        border-radius: 8px;
        width: 40%;
        left: 30%;
        top: 10%;
        margin-bottom: 100px;
        padding-bottom: 10px;
    }

    #form {
        margin-left: 40px;
        margin-right: 40px;
        margin-top: 15px;
        margin-bottom: 15px;
    }

    h2 {
        text-align: center;
        font-family: all;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    #label {
        font-family: all;
        font-size: 20px;
        font-weight: bold;
    }

    input {
        width: 100%;
        font-style: all;
        font-size: 15px;
        padding-left: 0px;
        padding-top: 10px;
        padding-bottom: 10px;
        border: 0;
    }

    input.Enregistrer {
        color: black;
        background-color: green;
        opacity: 0.8;
        border-radius: 20px;
    }

    input.Enregistrer:hover {
        opacity: 1;
    }

    @media(width: 360px) {
        #middle_content {
            position: relative;
            width: 80%;
            left: 10%;
            top: 5%;
        }

        h2 {
            font-size: 20px;
        }

        input.Enregistrer {
            opacity: 1;
        }
    }

    @media(width: 411px) {
        #middle_content {
            position: relative;
            width: 80%;
            left: 10%;
            top: 10%;
        }

        h2 {
            font-size: 20px;
        }

        input.Enregistrer {
            opacity: 1;
        }
    }

    @media(width: 320px) {
        #middle_content {
            position: relative;
            width: 80%;
            left: 10%;
            top: 1%;
        }

        h2 {
            font-size: 20px;
        }

        input.Enregistrer {
            opacity: 1;
        }
    }

    @media(width: 375px) {
        #middle_content {
            position: relative;
            width: 80%;
            left: 10%;
            top: 7%;
        }

        h2 {
            font-size: 20px;
        }

        input.Enregistrer {
            opacity: 1;
        }
    }


    @media(width: 414px) {
        #middle_content {
            position: relative;
            width: 80%;
            left: 10%;
            top: 10%;
        }

        h2 {
            font-size: 20px;
        }

        input.Enregistrer {
            opacity: 1;
        }
    }

    @media(width: 768px) {
        #middle_content {
            position: relative;
            width: 90%;
            left: 5%;
            top: 7%;
        }

        h2 {
            font-size: 50px;
        }

        input.Enregistrer {
            opacity: 1;
        }

        #label {
            font-size: 40px;
        }

        input {
            width: 100%;
            font-style: all;
            font-size: 30px;
        }
    }

    @media(width: 1024px) {
        #middle_content {
            position: relative;
            width: 90%;
            left: 5%;
            top: 20%;
        }

        h2 {
            font-size: 50px;
        }

        input.Enregistrer {
            opacity: 1;
        }

        #label {
            font-size: 40px;
        }

        input {
            width: 100%;
            font-style: all;
            font-size: 30px;
        }
    }
</style>

<body style="background-color: rgba(131, 110, 110, 0.384);">
    <div id="middle_content">
        <hr>
        <div id="form">
            <form method="POST" action="traitementSignup.php">
                <h2><?php if (isset($_GET['match']) && $_GET['match'] == "notmatch") echo ("<b style=\"color: red;\">Verifiez votre mode pass!!</b>");
                    else if(isset($_GET['exist']) && $_GET['exist'] == "oui") echo("<b style=\"color: red;\">Email déjà existé</b>");
                    else echo ("S'inscrire");
                    ?></h2>
                <div id="label">Nom:</div>
                <input type="text" name="nom" value="<?php if (isset($_GET['nom'])) echo ($_GET['nom']); ?>" placeholder=" Entrer votre nom" required="true">
                <hr style="border-color: rgb(93,93,93);">
                <div id="label">Prenom:</div>
                <input type="text" name="prenom" value="<?php if (isset($_GET['prenom'])) echo ($_GET['prenom']); ?>" placeholder=" Entrer votre prenom" required="true">
                <hr style="border-color: rgb(93,93,93);">
                <div id="label">Email:</div>
                <input type="Email" name="email" value="<?php if (isset($_GET['email'])) echo ($_GET['email']); ?>" placeholder=" Entrer votre Email" required="true">
                <hr style="border-color: rgb(93,93,93);">
                <div id="label">Password:</div>
                <input type="Password" name="Password1" value="" placeholder=" Saisi votre Mot de passe" required="true">
                <hr style="border-color: rgb(93,93,93);">
                <div id="label">Comfirmation:</div>
                <input type="Password" name="Password2" value="" placeholder=" Comfirmez votre mot de passe" required="true">
                <hr style="border-color: rgb(93,93,93);"><br>
                <input class="Enregistrer" type="submit" name="submit" value="Enregistrer">
            </form>
        </div>
    </div>
</body>

<?php

include 'footer.php';

?>