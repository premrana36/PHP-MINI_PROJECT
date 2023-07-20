<?php session_start();

if ($_SESSION["flagForHome"] ?? false) {
    if ($_POST["submit"] ?? false) {
        session_unset();
        session_destroy();
        header("location: ./home.php?msg=Signing out you");
        exit();
    }
} else {
    header("location: ./admin.php?msg=Attempting to access private data");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./R/bootstrap.css">
    <link rel="stylesheet" href="./R/datatables.min.css">
    <style>
        * {
            font-size: large;
        }
    </style>
    <title>Admin</title>
</head>

<body>
    <div class="fluid-container">

        <nav class="navbar navbar-expand navbar-light bg-light">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a style="font-size: xx-large;" class="nav-link" href="./read.php">Read</a>
                    </li>
                    <li class="nav-item active">
                        <a style="font-size: xx-large;" class="nav-link" href="./export.php">Export</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" method="post">

                    <button class="btn btn-outline-danger my-2" name="submit" type="submit" value="submit">Sign out</button>
                </form>
            </div>
        </nav>
    </div>