<?php


error_reporting(0);



session_start();
	$con = mysqli_connect('localhost', 'root', '', 'appconge');

	// initialize variables
	$nom = "";
    $prénom = "";
    $cin = "";
    $email = "";
    $tél= "";
	$id = 0;
	$update = false;


if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($con, "DELETE FROM salarié WHERE id=$id");
	$_SESSION['message'] = "Employé suprimé"; 
	
}

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $record = mysqli_query($con, "SELECT * FROM salarié WHERE id=$id");

    if (count($record) == 1 ) {
        $n = mysqli_fetch_array($record);
        $nom = $n['nom'];
        $prénom = $n['prénom'];
        $cin = $n['CIN'];
        $email = $n['email'];
        $tél = $n['tél'];

    }
}

if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$nom = $_POST['nom'];
    $prénom = $_POST['prénom'];
    $cin = $_POST['CIN'];
    $email = $_POST['email'];
    $tél = $_POST['tél'];
 

	mysqli_query($con, "UPDATE salarié SET nom='$nom', prénom='$prénom', CIN='$cin', email='$email', tél='$tél' WHERE id=$id");
	$_SESSION['message'] = "Employé modifié !"; 
	
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
        <h2>Géstion salariés</h2>
        <div class="formaddsal">
            <h4>Mise à jour des salariés</h4>

            <?php if (isset($_SESSION['message'])): ?>
            <div class="msg">
                <?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
            </div>
            <?php endif ?>


            <?php $results = mysqli_query($con, "SELECT * FROM salarié"); ?>

            <table class="hiden">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>CIN</th>
                        <th>Téléphone</th>
                        <th>E-mail</th>
                        <th>Service</th>
                        <th>Grade</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>

                <?php while ($row = mysqli_fetch_array($results)) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nom']; ?></td>
                    <td><?php echo $row['prénom']; ?></td>
                    <td><?php echo $row['CIN']; ?></td>
                    <td><?php echo $row['tél']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['Service']; ?></td>
                    <td><?php echo $row['Grade']; ?></td>
                    <td>
                        <a href="modifemp.php?edit=<?php echo $row['id']; ?>" class="edit_btn" id="edit">Edit</a>
                    </td>
                    <td>
                        <a href="modifemp.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </table>

            <form class=" upd" method="post" action="modifemp.php">

                <!-- // newly added field -->
                <input type="hidden" name="id" value="<?php echo $id; ?>">

                <!-- // modified form fields -->
                <label>Nom</label>
                <input type="text" name="nom" value="<?php echo $nom; ?>"><br>
                <label>Prénom</label>
                <input type="text" name="prénom" value="<?php echo $prénom; ?>"><br>
                <label>CIN</label>
                <input type="text" name="CIN" value="<?php echo $cin; ?>"><br>
                <label>E-mail</label>
                <input type="text" name="email" value="<?php echo $email; ?>"><br>
                <label>Téléphone</label>
                <input type="text" name="tél" value="<?php echo $tél; ?>">
               
                <?php if ($update == true): ?>
                <button class="btn btnupd" type="submit" name="update" style="background: rgb(49, 145, 209);">update</button>
                <?php else: ?>
                <button class="btn" type="submit" name="save">Save</button>
                <?php endif ?>

                <a href="modifemp.php" class="btn btnback">Retour</a>


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