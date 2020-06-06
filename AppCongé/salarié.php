<?php

session_start();
error_reporting(0);
include('includes/connection.php');


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
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    <?php include('includes/sidenavbar.php');?>
    <section class="contenu salarié">
        <h1>Bienvenu sur le système de géstion des congés !</h1>
    </section>
</body>

</html>