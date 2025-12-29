<?php
include __DIR__ . '/../functions/LoginFunctions.php';
$functions = new loginController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

<<<<<<< Updated upstream:web/controller/LoginController.php
=======
    $result = $conn->query("SELECT user_id FROM users ORDER BY user_id DESC LIMIT 1");
    $nextNum = ($result && $result->num_rows > 0)
        ? ((int)str_replace("user_", "", $result->fetch_assoc()['user_id']) + 1)
        : 1;

    $user_id = "user_" . $nextNum;
    $user_type = "user";
>>>>>>> Stashed changes:web/LoginController.php
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $nic = $_POST['nic'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
<<<<<<< Updated upstream:web/controller/LoginController.php

    if (isset($_POST['registerButton'])) {
        $functions->register($name, $age, $address, $nic, $number, $email, $hashedPassword);
=======

    $profile_image = "";
    if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] === UPLOAD_ERR_OK) {
        $targetDir = __DIR__ . "/images/Users/";
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $fileName = uniqid("user_") . "_" . basename($_FILES["profile_image"]["name"]);
        $targetFilePath = $targetDir . $fileName;

        if (move_uploaded_file($_FILES["profile_image"]["tmp_name"], $targetFilePath)) {
            $profile_image = "images/Users/" . $fileName;
        } else {
            echo "❌ Failed to move uploaded file.";
        }
    }

    $conditions = "Agreed";

    if (isset($_POST['registerButton'])) {
        $functions->register(
            $user_id,
            $user_type,
            $name,
            $age,
            $address,
            $nic,
            $number,
            $email,
            $hashedPassword,
            $profile_image,
            $conditions
        );
>>>>>>> Stashed changes:web/LoginController.php
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
