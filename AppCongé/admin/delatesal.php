<?php

session_start();
include_once('../includes/connection.php');

if (!empty($_POST)) {

   
    $id = $_POST['identity'];



$query = "DELETE FROM salarié WHERE id='$id' ";

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
      <form name="" action="delatesal.php" method="POST" onsubmit="return validation()">
       
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
        <button type="submit" class="btn btn-primary" name="delate">Suprimer</button>
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