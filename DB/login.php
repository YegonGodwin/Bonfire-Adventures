<?php

include('dbconnect.php');

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pword = $_POST['pword'];

   // $_SESSION['user'] == &&
    
    if (empty($email) || empty($pword)) {
        echo "All fields are required.";
    } else {
        $sql = "SELECT * FROM users WHERE email = '$email'  AND password = '$pword'";
        $result = $conn->query($sql);

        if($result -> num_rows == 1) {
            session_start();

            $row = $result -> fetch_assoc();

            $_SESSION['email'] = $row['email'];   
            $_SESSION['full_name'] = $row['full_name'];
            
            header('location: ../Pages/services.php');

            exit();
        }

        else{
            echo 'Invalid email or password';
        }
        /*
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($pword, $row['password'])) {
                $_SESSION['email'] = $email;
                header("location: ../Pages/services.html");
            } else {
                echo "Invalid username or password.";
                header('location: ./index.php');
            }
        } else {
            echo "No user found with this username.";
        }*/
    }
}

$conn->close();
?>
