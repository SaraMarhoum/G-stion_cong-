<?php


session_start();
	$con = mysqli_connect('localhost', 'root', '', 'appconge');

	
	if (isset($_GET['refuse'])) {
        $CIN = $_GET['refuse'];
        mysqli_query($con, "UPDATE demandeconge SET decision='Refusé' WHERE CIN=$CIN");
        $_SESSION['message'] = "Demande refusée"; 
      
    }

    if (isset($_GET['confirm'])) {
        $CIN = $_GET['confirm'];
        mysqli_query($con, "UPDATE demandeconge SET decision='Approuvé' WHERE CIN=$CIN");
        $_SESSION['message'] = "Demande approuvée"; 
     
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
        <h2>Géstion des Congés</h2>
        <div class="formaddsal">
            <h4>Liste des demandes en attente</h4>


            <?php $result = mysqli_query($con, "SELECT demandeconge.CIN, demandeconge.datedemande, demandeconge.typeconge, demandeconge.decision, nom, prénom 
            FROM salarié RIGHT JOIN demandeconge ON salarié.CIN = demandeconge.CIN WHERE decision = 'En attente'"); ?>


            <div class="search__container">
                <input id="myInput" class="search__input" type="text" placeholder="Chercher un employé...">
            </div><br>

            <div class="tablediv">
                <table class="list">
                    <thead>
                        <tr>
                            <th>CIN</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Type</th>
                            <th>Date de demande</th>
                            <th>Status</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>

                    <?php while ($row = mysqli_fetch_array($result)) { ?>
                    <tbody id="myTable">
                        <tr>
                            <td><?php echo $row['CIN']; ?></td>
                            <td><?php echo $row['nom']; ?></td>
                            <td><?php echo $row['prénom']; ?></td>
                            <td><?php echo $row['typeconge']; ?></td>
                            <td><?php echo $row['datedemande']; ?></td>
                            <td><?php echo $row['decision']; ?></td>
                            <td>
                                <a href="congéattente.php?confirm=<?php echo $row['CIN']; ?>" class="edit_btn" id="confirm">Confirmer</a>
                            </td>
                            <td>
                                <a href="congéattente.php?refuse=<?php echo $row['CIN']; ?>" id="refuse" class="del_btn">Refuser</a>
                            </td>
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>
            </div>


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

    <script>
        $(document).ready(function () {
            $("#myInput").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>


</body>


</html>