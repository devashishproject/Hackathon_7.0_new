<?php
    // Start the session
    session_start();
    
    // Establish a database connection
    $conn = mysqli_connect('localhost', 'root', '', 'logistics');

    // Check if the form is submitted
    if(isset($_POST['login'])){
        // Sanitize user inputs
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        // Query to retrieve user data from the database
        $query = "SELECT * FROM users WHERE name = '$name' AND password = '$password'";

        // Execute the query
        $result = mysqli_query($conn, $query);

        // Check if the query returns any rows
        if(mysqli_num_rows($result) == 1){
            // Login successful
            $_SESSION['name'] = $name;
            header("Location: dashboard-2.php");
            exit();
        }
        else{
            // Login failed
            $error = "Invalid login credentials. Please try again.";
        }
    }

    // Close the database connection
    mysqli_close($conn);
?>