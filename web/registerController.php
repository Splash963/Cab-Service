<?php
include 'functions.php';
$functions = new loginController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $nic = $_POST['nic'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    if (isset($_POST['registerButton'])) {
        $functions->register($name, $age, $address, $nic, $number, $email, $hashedPassword);
        header("Location: register.php");
        exit();
    }
}
