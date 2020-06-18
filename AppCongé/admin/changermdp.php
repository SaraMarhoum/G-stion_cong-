<?php

session_start();

include('../includes/connection.php');


if (!empty($_POST)) {
    

    $oldmdp = $_POST['oldmdp'];
    $newmdp = $_POST['newmdp'];

    $sql = "UPDATE `admin` SET `password`='$newmdp' WHERE password = '$oldmdp' ";
    $_SESSION['message'] = "Données ajoutées";
 

    mysqli_query($con, $sql);

    // " . hash('sha256', $p) . "
    // pass type text

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

<body>

  <?php include('includes/sidenavbarad.php'); ?>

  <section class="contenu salarié admin">
    <h2>Géstion de profile</h2>
    <div class="formaddsal">
      <h4>Changer mon mot de passe</h4>
      <form name="" action="changermdp.php" method="POST" onsubmit="return validation()">

      <div class="form-row">
      <div class="form-group col-md-6">
            <label for="inputEmail4">Encien mot de passe</label>
            <input name="oldmdp" type="password" class="form-control" id="inputname">
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Nouveau mot de passe</label>
            <input name="newmdp" type="password" class="form-control" id="inputname">
          </div>
        </div>
        

       
        <button type="submit" class="btn btn-primary" name="save">Changer</button>
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