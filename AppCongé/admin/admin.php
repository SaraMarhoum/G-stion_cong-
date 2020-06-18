<?php

session_start();

include_once('../includes/connection.php');


?>

<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">

<head>
    <script language="javascript" type="text/javascript">
        window.history.forward();
    </script>
    <meta charset="utf-8">
    <title>Sider Menu Bar CSS</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- CSS link -->
    <link rel="stylesheet" href="../css/style.css">


</head>

<body>

    <?php include('includes/sidenavbarad.php');?>
    <section class="contenu salarié">
        <h2>Bienvenu sur le système de géstion des congés !</h2>

        <div class="container">

            <div class="box profile">
                <div class="boxContent">
                    <i class="fa fa-user icon"></i>
                    <h1 class="title tp">Gérer<br>mon profile</h1>

                </div>
                <a href="changermdp.php"></a>
            </div>

            <div class="box salarié">
                <div class="boxContent">
                    <i class="fa fa-users icon"></i>
                    <h1 class="title ts">Gérer<br> Les salariés</h1>

                </div>
                <a href="modifemp.php"></a>
            </div>
        </div>

        <div class="container">
            <div class="box congé">
                <div class="boxContent">
                    <i class="fa fa-desktop icon"></i>
                    <h1 class="title tco">Gérer<br> les congés</h1>

                </div>
                <a href="statusconge.php"></a>
            </div>

            <div class="box calendrier">
                <div class="boxContent">
                    <i class="fa fa-calendar-week icon"></i>
                    <h1 class="title tca">Calendrier</h1>

                </div>
                <a href="#"></a>
            </div>
        </div>

    </section>

</body>

</html>