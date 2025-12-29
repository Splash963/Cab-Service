<?php
include __DIR__ . '/../functions/LoginFunctions.php';
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
    } elseif (isset($_POST['loginButton'])) {
        $functions->login($email, $password);
        header("Location: login.php");
        exit();
    } elseif (isset($_POST['logout'])) {
        $functions->logout();
        header("Location: index.php");
        exit();
    }
}
