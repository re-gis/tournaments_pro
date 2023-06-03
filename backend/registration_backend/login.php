<?php
    include_once '../config/config.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $result = $conn -> query("SELECT * FROM users WHERE username='$username' AND password='$password'");

        if (!$result) {
            echo "Error: " . $mysqli -> error;
            exit();
        }

        if ($result -> num_rows > 0) {
            session_start();
            $_SESSION["username"] = $username;
            $_SESSION["email"] = $email;

            header("Location: ../../dashboard/dash.php");
            exit();
        }else {
            echo 'Invalid username or password';
        }
    }
?>