<?php
include 'functions.php';
$functions = new loginController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (isset($_POST['loginButton'])) {
        $functions->login($email, $password);
    }
}
