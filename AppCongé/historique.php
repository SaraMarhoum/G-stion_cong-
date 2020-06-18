<?php

session_start();
error_reporting(0);
include('includes/connection.php');

if (!empty($_POST)) {
    $CIN = $_POST['CIN'];

    $sql = "SELECT CIN FROM demandeconge";

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
            <div class="formaddsal">
                <h4>Historique des demandes</h4>

                <form action="historique.php" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Entrez votre CIN</label>
                            <input name="CIN" type="text" class="form-control" id="checkCIN"
                                placeholder="CIN..."></input>
                        </div>
                        <div class="form-group col-md-6">
                            <button type="submit" class=" btn-primary" name="chercher" id="chercher" style="margin-top: 37px;">Chercher</button>
                        </div>
                    </div>
                </form>

                <?php $results = mysqli_query($con, "SELECT datedemande, typeconge, datedebut, dateretour, nbrjours, decision 
                FROM demandeconge Where CIN = '$CIN'"); ?>

                <table class="list sec">
                    <thead>
                        <tr>
                            <th>Date de demande</th>
                            <th>Type de congé</th>
                            <th>Date de début</th>
                            <th>Date de retour</th>
                            <th>Nombre de jours</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <?php while ($row = mysqli_fetch_array($results)) { ?>
                    <tbody id="myTable">
                        <tr>
                            <td><?php echo $row['datedemande']; ?></td>
                            <td><?php echo $row['typeconge']; ?></td>
                            <td><?php echo $row['datedebut']; ?></td>
                            <td><?php echo $row['dateretour']; ?></td>
                            <td><?php echo $row['nbrjours']; ?></td>
                            <td><?php echo $row['decision']; ?></td>
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>


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

        </script>

    </body>

</html>