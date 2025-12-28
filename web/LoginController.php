<?php
include "LoginFunctions.php";
$functions = new loginController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $result = $conn->query("SELECT user_id FROM users ORDER BY user_id DESC LIMIT 1");
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $lastId = $row['user_id'];

        $num = (int)str_replace("user_", "", $lastId);
        $nextNum = $num + 1;
    } else {
        $nextNum = 1;
    }

    $user_id = "user_" . $nextNum;
    $user_type = "user";
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $nic = $_POST['nic'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $conditions = "Agreed";

    if (isset($_POST['registerButton'])) {
        $functions->register($user_id, $user_type, $name, $age, $address, $nic, $number, $email, $hashedPassword, $conditions);
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
