<?php

  session_start();

    include('dbconnect.php');

    if(isset($_POST['submit'])){
        $full_name = $_POST["full_name"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $_SESSION['full_name'] = $full_name;
        //$confirm_password = $_POST["confirm_password"]; 

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }  
          
          if (empty($username) && empty($email) && empty($password)) {
            echo "All fields are required.";
        } else {
            $sql =  "INSERT INTO `users`(`id`, `full_name`, `email`, `password`, `created_at`) VALUES ('','$full_name','$email','$password','')";
            
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
                header('location: ../Pages/services.php');
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

          /*      
        
        $sql = "INSERT INTO `users`(`id`, `full_name`, `email`, `password`, `created_at`) VALUES ('','$full_name','$email','$password','')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }$conn->close();
            */
        

    }

?>