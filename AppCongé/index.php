<?php

session_start();
include('includes/connection.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <img src="jpg/logoblack.png" alt="">

    <h4>Application web de gestion de congé </h4>

    <section class="login employé" id="emp">

        <div class="login__container">

            <div class="login__title__container col-12 col-sm-6 col-md-4">
                <p>CONNECTION</p>
            </div>

            <div class="login__form__container col-12 col-sm-6 col-md-4">

                <a id="formlog"></a>
                <form name="f1" action="authentication.php" method="POST" onsubmit="return validation()">

                    <?php if(isset($_GET['erreur']) && $_GET['erreur'] == 'Erreurdenonnection'): ?>
                    <p class="bg-danger"> Email ou mot de passe incorrect !</p>
                    <?php endif; ?>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control" required id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mot de passe</label>
                        <input type="password" name="pass" class="form-control" required id="pass">
                    </div><br>

                    <div class="login__check__container">
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Rester connecté</label>
                        </div>
                        <div class="MDP__oublié">
                            <!-- Forgot password -->
                            <a id="mdp_oublié" href="mot_de_pass.html" style="font-size: 11px;">Mot de passe oublié
                                ?</a>
                        </div>
                    </div><br><br>

                    <button id="seConnecter" value="Login" name="login" type="submit" class="btn btn-primary">Se
                        connecter</button><br><br>

                </form>

            </div>
        </div>
    </section>

    <!-- <script>
        function validation() {
            var id = document.f1.email.value;
            var ps = document.f1.pass.value;
            if (id.length == "" && ps.length == "") {
                alert("Veuillez saisir vos données de connection");
                return false;
            } else {
                if (id.length == "") {
                    alert("Veuillez saisir votre mail !");
                    return false;
                }
                if (ps.length == "") {
                    alert("Veuillez saisir un mot de passe !");
                    return false;
                }
            }
        }
    </script> -->
    

</body>

</html>