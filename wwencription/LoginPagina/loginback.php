<?php
    include('connection.php');
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password= $_POST['password'];
   
        $sql = "select * from login where username = '$username'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count == 1){
            $stored_password = $row['password'];
            if (password_verify($password, $stored_password)) {
                header("Location: welcome.php");
            } else {
                echo '<script  
                type="text/javascript">window.onload = function () { alert("Password or Username invalid"); } 
                    </script>'; 
            }
        } else {
            echo '<script  
            type="text/javascript">window.onload = function () { alert("Password or Username invalid"); } 
                </script>'; 
        }
    }
?>