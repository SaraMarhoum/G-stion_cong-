<?php

session_start();
error_reporting(0);
include_once('includes/connection.php');


if (!empty($_POST)) {
    $CIN = $_POST['CIN'];
    
    $sql = "SELECT  CIN FROM salarié";

    mysqli_query($con, $sql);

}



require_once __DIR__ . '/vendor/autoload.php';

if (isset($_POST['update'])) {
   
$nom = $_POST['nom'];
$prénom = $_POST['prénom'];
$CIN = $_POST['CIN'];
$grade = $_POST['Grade'];
$service = $_POST['Service'];

$mpdf = new \Mpdf\Mpdf();

$data = '';
$data .= '<h1>Nom de l\'entreprise</h1>';
$data .= '<h4><strong>Bulletin de travail</strong></h4>';


$data .= '<p>Bulletin de paie de Mr/Mme.' .' '. $nom .' '. $prénom .' '. 'au CIN n° '.' '. $CIN .' </p><br />';

$data .= '<p>Toutes les indications et mentions portées sur la présente attestation sont certifiées exactes.</p><br />';



$mpdf->WriteHTML($data);

$mpdf->Output('BuletinDepaie.pdf', 'D');
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Sider Menu Bar CSS</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


    <!-- CSS link -->
    <link rel="stylesheet" href="css/style.css">


</head>

<body>

    <?php include('includes/sidenavbar.php');?>
    <section class="contenu salarié">
        <h2>Bulletin de paiement</h2>

        <div class="formaddsal">

            <form action="PDFbdp.php" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Entrez votre CIN</label>
                        <input name="CIN" type="text" class="form-control" id="checkCIN" placeholder="CIN..."></input>
                    </div>
                    <div class="form-group col-md-6">
                        <button type="submit" class=" btn-primary" name="chercher" id="chercher"
                            style="margin-top: 37px;">Chercher</button>
                    </div>
                </div>
            </form>

            <?php $results = mysqli_query($con, "SELECT nom, prénom, CIN, Grade, Service FROM salarié Where CIN = $CIN"); ?>

            <form class=" upd" method="post" action="PDFbdp.php">


                <?php while ($row = mysqli_fetch_array($results)) { ?>
                <!-- // modified form fields -->
                <p><strong>Bulletin de paie de : <?php echo $row['prénom']; ?>  <?php echo $row['nom']; ?></strong></P>
                <input type="hidden"  name="nom" value="<?php echo $row['nom']; ?>"><br>
                
                <input type="hidden" name="prénom" value="<?php echo $row['prénom']; ?>"><br> 
                
                <input type="hidden" name="CIN" value="<?php echo $row['CIN']; ?>"><br>
                
                <input type="hidden" name="Grade" value="<?php echo $row['Grade']; ?>"><br>
                
                <input type="hidden" name="Service" value="<?php echo $row['Service']; ?>">
                <?php } ?>

                <button class="btn btnupd" type="submit" name="update" style="margin-left: 269px; margin-top: -102px;">Imprimer</button>
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