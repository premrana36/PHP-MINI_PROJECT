<?php
session_start();

require_once("./database.config.php");

if ($_POST["submit"] ?? false) {
    $username = $_POST["username"];
    $password = md5($_POST["password"]);
    try {

        // Connect to database
        $conn = databaseConnector();
        if ($conn != false) {

            // Write sql query
            $sqlQuery = "SELECT password FROM users WHERE username = '$username';";

            // Execute query and store result
            $result = mysqli_query($conn, $sqlQuery);

            // Fetch data from result
            $data = mysqli_fetch_assoc($result);

            // Check if data is null or not
            if ($data != null) {
                // Check for password
                if ($password == $data["password"]) {
                    // Both username and password match and correct and user redirected to home page
                    $_SESSION["flagForHome"] = true;
                    $_SESSION["username"] = $username;
                    databaseConnectorClose($conn);
                    header("location: ./../read.php");
                    exit();
                } else {
                    // Password wrong
                    header("location: ./../admin.php?msg=Invalid password");
                    mysqli_close($conn);
                    exit();
                }
            } else {
                // Username not exists in table
                header("location: ./../admin.php?msg=Username not exists");
                mysqli_close($conn);
                exit();
            }
        } else {
            $msg = "Can't connect to database";
        }
    } catch (Exception $e) {
        $msg = $e->getMessage();
    }
} else {
    $msg = "First submit data on this page";
}

header("location: ./../admin.php?msg=" . $msg);
exit();
