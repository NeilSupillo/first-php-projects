<?php

declare(strict_types=1);

function signup_inputs()
{

    if (isset($_SESSION["signup_data"]["username"]) && !isset($_SESSION["errors_signup"]["username_taken"])) {
        echo '<div class="form-floating">
    <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username" value="' . $_SESSION["signup_data"]["username"] . '">
    <label for="floatingInput">Username</label>
</div>';
    } else {
        //echo 'no error';
        echo ' <div class="form-floating">
    <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
    <label for="floatingInput">Username</label>
</div>';
    }


    if (isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["errors_signup"]["email_used"]) && !isset($_SESSION["errors_signup"]["invalid_email"])) {
        echo '<div class="form-floating">
    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" value="' . $_SESSION["signup_data"]["email"] . '">
    <label for="floatingInput">Email address</label>
</div>';
    } else {
        //echo 'no error';
        echo ' <div class="form-floating">
    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
    <label for="floatingInput">Email address</label>
</div>';
    }

    echo '<div class="form-floating">
    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pwd">
    <label for="floatingPassword">Password</label>
</div>';
}


function check_signup_errors()
{
    if (isset($_SESSION['errors_signup'])) {
        $errors = $_SESSION['errors_signup'];

        echo "<br>";
        foreach ($errors as $errors) {
            echo '<p class="error" >' . $errors . ' </p>';
        }
        unset($_SESSION['errors_signup']);
    } else if (isset($_GET["signup"]) && $_GET["signup"] === "success") {
        echo '<br>';
        echo '<p id="signup-success" class="form-success">Signup success!</p>';
    }
}
