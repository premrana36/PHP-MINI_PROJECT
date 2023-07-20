<?php

if ($_POST["edit"] ?? false) {
    $r_id = $_POST["edit"];

    require_once("./database.config.php");
    try {
        $conn = databaseConnector();
        $sqlQuery = "SELECT * FROM students WHERE r_id = ?";
        $stmt = mysqli_stmt_init($conn);
        if (mysqli_stmt_prepare($stmt, $sqlQuery)) {
            mysqli_stmt_bind_param($stmt, "i", $r_id);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $data = mysqli_fetch_assoc($result);
        } else {
            $msg = "Something went wrong";
        }
        mysqli_stmt_close($stmt);
        databaseConnectorClose($conn);

        $msg = base64_encode($msg);
        $a = base64_encode(json_encode($data));
        header("location: ./../edit.php?a=" . $a . "&msg=" . $msg . "&msg1=" . $msg1);
    } catch (Exception $e) {
        $msg = "Please try again";
    }
} else {
    echo "INVLID PAGE ACCESS";
}
