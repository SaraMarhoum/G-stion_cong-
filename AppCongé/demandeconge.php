<?php

session_start();

include('includes/connection.php');


if (!empty($_POST)) {
    $nom = $_POST['nom'];
    $prénom = $_POST['prénom'];
    $datedebut= $_POST['datedebut'];
    $dateretour = $_POST['dateretour'];
    $nbrjours = $_POST['nbrjours'];
    $typeconge = $_POST['typeconge'];
    $decision = $_POST['decision'];
    $CIN = $_POST['CIN'];

    $sql = "INSERT INTO demandeconge (datedebut, dateretour, nbrjours, typeconge, decision, CIN) 
VALUES ('$datedebut', '$dateretour', '$nbrjours', '$typeconge', '$decision', '$CIN')";

$_SESSION['message'] = "Demande envoyée";

    mysqli_query($con, $sql);


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
  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <body>

    <?php include('includes/sidenavbar.php'); ?>

    <section class="contenu salarié admin">
      <h2>Géstion Congé</h2>
      <?php if (isset($_SESSION['message'])): ?>
        <div class="msg">
          <?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
    </div>
            <?php endif ?>
      <div class="formaddsal">
        <h4>Faire une demande de congé</h4>
          <form name="" action="demandeconge.php" method="POST" onsubmit="return validation()">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Nom</label>
                <input name="nom" type="firstname" class="form-control" id="inputname">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Prénom</label>
                <input name="prénom" type="lastname" class="form-control" id="inputname">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Date de début</label>
                <input name="datedebut" type="date" class="form-control" id="">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Date de retour</label>
                <input name="dateretour" type="date" class="form-control" id="">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Nombre de jours</label>
                <input name="nbrjours" type="text" class="form-control" id="inputEmail4">
              </div>
            </div>
            <div class="form-rows">
              <div class="form-group col-md-6">
                <label for="inputEmail4">CIN</label>
                <input name="CIN" type="text" class="form-control" id="inputEmail4">
              </div>
            </div>
            <div class="form-row hiden">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Decision</label>
                <input name="decision" type="text" class="form-control" id="inputEmail4" value="En attente">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="inputState">Type de congé</label>
                <select name="typeconge" id="inputState" class="form-control">
                  <option selected> Congé annuel</option>
                  <option>Congé exceptionnel / permissions d’absence</option>
                  <option>Congé maladie</option>
                  <option>Congé maternité</option>
                </select>
              </div>
            </div>
            <button type="submit" class="btn btn-primary" name="save">Envoyer</button>
          </form>

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