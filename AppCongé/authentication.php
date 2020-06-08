<?php      
    include('includes/connection.php');  
    $email = $_POST['email'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);  
      
        //write the query for connection infos for admin
        $sql = "select *from admin where email = '$email' and password = '$password'";
        
        //Make the query and get result
        $result = mysqli_query($con, $sql);
        
        //fetch the resulting rows as an array / Retourne une ligne de résultat sous la forme d'un tableau associatif
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        
        //Retourne le nombre de lignes dans un jeu de résultats. 
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
             
            header('Location: admin/admin.php');
            exit();
            
        }  
        else{  
            // echo "<h1> Login failed. Invalid username or password.</h1>";
            header('Location: index.php?erreur=Erreurdenonnection') ; 
        }

        ////write the query for connection infos for salarié
        $sqlsal = "select *from salarié where email = '$email' and password = '$password'";  
        $resultsal = mysqli_query($con, $sqlsal);  
        $row = mysqli_fetch_array($resultsal, MYSQLI_ASSOC);  
        $countsal = mysqli_num_rows($resultsal);  
          
        if($countsal == 1){  
             
            header('Location: salarié.php');
            exit();
            
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }
        
        
?> 