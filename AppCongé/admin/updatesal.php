<?php

session_start();
include_once('../includes/connection.php');

if (!empty($_POST)) {

    $nomemp = $_POST['nomemployé'];
    $prénomemp = $_POST['prénomemployé'];
    $cinemp = $_POST['cinemployé'];
    $telemp = $_POST['telemployé'];
    $emailemp = $_POST['mailemployé'];
    $mdpemp = $_POST['mdpemployé'];
    $hashed_pass = password_hash($mdpemp,PASSWORD_DEFAULT);
    $grademp = $_POST['grademployé'];
    $servicemp = $_POST['servicemployé'];
    $id = $_POST['identity'];


$query = "UPDATE salarié SET nom='$nomemp',prénom='$prénomemp',CIN='$cinemp',tél='$telemp', email='$emailemp',
password='$hashed_pass',Service='$servicemp',Grade='$grademp' WHERE id='$id' ";
mysqli_query($con, $query);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <!-- CSS link -->
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>

  <?php include('includes/sidenavbarad.php'); ?>

  <section class="contenu salarié admin">
    <h1>Bienvenu sur le système de géstion des congés !</h1>
    <div class="formaddsal">
      <h4>Mise à jour des salariés</h4>
      <form name="" action="updatesal.php" method="POST" onsubmit="return validation()">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Nom</label>
            <input name="nomemployé" type="firstname" class="form-control" id="inputname">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Prénom</label>
            <input name="prénomemployé" type="lastname" class="form-control" id="inputname">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">CIN</label>
            <input name="cinemployé" type="" class="form-control" id="">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Téléphone</label>
            <input name="telemployé" type="phone" class="form-control" id="">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" name="mailemployé" class="form-control" id="inputEmail4">
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Confirmer Email</label>
            <input name="mailemployé" type="email" class="form-control" id="inputEmail4">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputPassword4">Mot de passe</label>
            <input name="mdpemployé" type="password" class="form-control" id="inputPassword4">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Confirmer le mot de passe</label>
            <input name="mdpemployé" type="password" class="form-control" id="inputPassword4">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputState">Grade</label>
            <select name="grademployé" id="inputState" class="form-control">
              <option selected>étoile</option>
              <option>2 étoiles</option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">Service</label>
            <select name="servicemployé" id="inputState" class="form-control">
              <option selected>Hunter pro</option>
              <option>Assassin</option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">ID</label>
            <select name="identity" id="inputState" class="form-control">
              <option selected>Sélectionner...</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select>
          </div>
        </div>
        <button type="submit" class="btn btn-primary" name="update">Modifier</button>
      </form>
      <a href="modifemp.php"><button>Retour</button></a>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>
</body>

</html>