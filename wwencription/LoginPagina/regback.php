<?php

    include("connection.php");

    if(isset($_POST['submit'])){
        if(!empty($_POST['FirstName']) && !empty($_POST['LastName'])&& !empty($_POST['username']) && !empty($_POST['Email']) && !empty($_POST['password'])){
           
            $FirstName = $_POST['FirstName'] ; 
            $LastName = $_POST['LastName'] ; 
            $username = $_POST['username'] ; 
            $Email = $_POST['Email'] ; 
            $password=password_hash($_POST['password'], PASSWORD_DEFAULT); 

            $query = "INSERT INTO login(FirstName, LastName, username, Email, Password) VALUES (?, ?, ?, ?, ?)";
            $stmt = mysqli_prepare($conn, $query);
            mysqli_stmt_bind_param($stmt, 'sssss', $FirstName, $LastName, $username, $Email, $password);
            $run = mysqli_stmt_execute($stmt);

            if($run){
                header("location: login.php");
            }
            else{
                echo "form not submitted"; 
            }
        }
        else{
            echo '<script  
            type="text/javascript">window.onload = function () { alert("All fields need to be filled."); } 
                </script>'; 
        }
    }
?>
