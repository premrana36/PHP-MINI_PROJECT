<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="./R/bootstrap.css">
    <style>
        * {
            font-family: Verdana, sans-serif;
            font-size: x-large;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                <?php if ($_GET["msg"] ?? false) : ?>
                    <div class="alert alert-warning alert-dismissible show mt-3" role="alert">
                        <?= $_GET["msg"] ?>
                        <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="close"></button>
                    </div>
                <?php endif; ?>
                <form action="./php/admin.fun.php" method="post">
                    <label class="form-label mt-3">Username:</label>
                    <input class="form-control mb-3" type="text" placeholder="type username" name="username" required>
                    <label class="form-label">Password:</label>
                    <input class="form-control mb-3" type="password" placeholder="type password" name="password" required>
                    <button class="btn btn-primary" type="submit" value="submit" name="submit">Sign in</button>
                </form>
            </div>
        </div>
    </div>
    <script src="./R/jquery-3.6.3.js"></script>
    <script src="./R/bootstrap.bundle.js"></script>
</body>

</html>