<?php

session_start();
if ($_POST["admin"] ?? false) {
    $_SESSION["user"] = "admin";
    header("location: ./admin.php");
    exit();

} else if ($_POST["student"] ?? false) {
    $_SESSION["user"] = "student";
    header("location: ./formfillup.php");
    exit();

} else {

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="./R/bootstrap.css">
    <style>
        * {
            font-size: xx-large;
        }
    </style>
</head>

<body>
    <div class="container">
        <form method="post">
            <div class="row my-5">
                <div class="col-xl-4 col-lg-4 col-md-3 col-sm-0"></div>
                <button class="col-xl-4 col-lg-4 col-md-6 col-sm-12 btn btn-primary" type="submit" name="student" value="student">Student</button>
                <div class="col-xl-4 col-lg-4 col-md-3 col-sm-0"></div>
            </div>
            <div class="row my-5">
                <div class="col-xl-4 col-lg-4 col-md-3 col-sm-0"></div>
                <button class="col-xl-4 col-lg-4 col-md-6 col-sm-12 btn btn-secondary" type="submit" name="admin" value="admin">Admin</button>
                <div class="col-xl-4 col-lg-4 col-md-3 col-sm-0"></div>
            </div>
        </form>
    </div>
    <script src="./R/jquery-3.6.3.js"></script>
    <script src="./R/bootstrap.bundle.js"></script>
</body>

</html>