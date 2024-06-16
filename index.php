<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_mvc/signup_view.inc.php';

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>
    <main class="container form-signin  w-100">
        <div class="row">
            <form action="includes/signup.inc.php" method="post" class="col">

                <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
                <?php
                signup_inputs();
                ?>
                <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>

            </form>
            <form action="includes/userupdate.inc.php" method="post" class="col">

                <h1 class="h3 mb-3 fw-normal">Update</h1>
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
                    <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                    <label for="floatingInput">Email address</label>
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pwd">
                    <label for="floatingPassword">Password</label>
                </div>


                <button class="btn btn-primary w-100 py-2" type="submit">Update</button>

            </form>
        </div>
        <div class="row">
            <form action="includes/userdelete.inc.php" method="post" class="col">

                <h1 class="h3 mb-3 fw-normal">Delete</h1>
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
                    <label for="floatingInput">Username</label>
                </div>


                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pwd">
                    <label for="floatingPassword">Password</label>
                </div>


                <button class="btn btn-primary w-100 py-2" type="submit">Delete</button>

            </form>
            <form action="includes/login.inc.php" method="post" class="col">

                <h1 class="h3 mb-3 fw-normal">Log In</h1>
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Username or Password" name="username">
                    <label for="floatingInput">Username or Password</label>
                </div>


                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pwd">
                    <label for="floatingPassword">Password</label>
                </div>


                <button class="btn btn-primary w-100 py-2" type="submit">Log in</button>

            </form>
        </div>
    </main>
    <?php

    check_signup_errors();

    ?>

</body>

</html>