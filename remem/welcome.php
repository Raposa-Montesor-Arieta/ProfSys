<?php require_once("auth.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | PHP - Login with Remember Me</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <style>
        html, body{
            min-height:100%;
            width:100%;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-gradient">
        <div class="container">
            <a class="navbar-brand" href="./">PHP - Login with Remember Me</a>
            <div>
                <a href="https://sourcecodester.com" class="text-light fw-bolder h6 text-decoration-none" target="_blank">SourceCodester</a>
            </div>
        </div>
    </nav>
    <div class="container-fluid px-5 my-3 h-75">
        <div class="col-lg-4 col-md-5 col-sm-12 mx-auto my-5 pt-5" >
            <div class="card rounded-0 shadow">
                <div class="card-header">
                    <h3 class="card-title text-center fw-bold">Welcome</h3>
                </div>
                <div class="card-body">
                    <div class="container-fluid">
                        <h2>You are logged in.</h2>
                        <dl>
                            <dt>Name:</dt>
                            <dd><?= $_SESSION['login_name'] ?></dd>
                            <dt>Username:</dt>
                            <dd><?= $_SESSION['login_username'] ?></dd>
                        </dl>
                    </div>
                </div>
                <div class="card-footer py-2">
                    <div class="text-center">
                        <a class="btn btn-sm btn-danger rounded-pill col-lg-4 col-md-6 col-sm-12" href="logout.php">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>