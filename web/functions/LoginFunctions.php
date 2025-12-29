<?php

include __DIR__ . "/../database/db.php";

class loginController
{

<<<<<<< Updated upstream:web/functions/LoginFunctions.php
    public function register($name, $age, $address, $nic, $number, $email, $hashedPassword)
=======
    public function register($user_id, $user_type, $name, $age, $address, $nic, $number, $email, $hashedPassword, $profile_image, $conditions)
>>>>>>> Stashed changes:web/LoginFunctions.php
    {
        global $conn;

        try {
<<<<<<< Updated upstream:web/functions/LoginFunctions.php
            $stmt = $conn->prepare("INSERT INTO users (name, age, address, nic, number, email, password) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sisssss", $name, $age, $address, $nic, $number, $email, $hashedPassword);
=======
            $stmt = $conn->prepare("INSERT INTO users (user_id, user_type, name, age, address, nic, number, email, password, profile, conditions) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssisssssss", $user_id, $user_type, $name, $age, $address, $nic, $number, $email, $hashedPassword, $profile_image, $conditions);
>>>>>>> Stashed changes:web/LoginFunctions.php
            $stmt->execute();

            $newUserId = $stmt->insert_id;

            session_start();
            $_SESSION['user_id'] = $newUserId;
            $_SESSION['user_name'] = $name;
            $_SESSION['user_type'] = $user_type;
            $_SESSION['profile'] = $profile_image;

            if (isset($_SESSION['redirect_after_login'])) {
                $redirect = $_SESSION['redirect_after_login'];
                unset($_SESSION['redirect_after_login']);
                header("Location: " . $redirect);
            } else {
                header("Location: /Cab_Service/web/index.php");
            }
            exit();
        } catch (Exception $e) {
            echo "<script>alert('Error: " . $e->getMessage() . "');</script>";
        }
    }

    public function login($email, $password)
    {
        global $conn;
        try {
<<<<<<< Updated upstream:web/functions/LoginFunctions.php
            $stmt = $conn->prepare("SELECT id, name, password FROM users WHERE email = ?");
=======
            $stmt = $conn->prepare("SELECT user_id, name, password, user_type, profile FROM users WHERE email = ?");
>>>>>>> Stashed changes:web/LoginFunctions.php
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();

            if ($user && password_verify($password, $user['password'])) {
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['name'];
<<<<<<< Updated upstream:web/functions/LoginFunctions.php
=======
                $_SESSION['user_type'] = $user['user_type'];
                $_SESSION['profile'] = $user['profile'];
>>>>>>> Stashed changes:web/LoginFunctions.php

                if (isset($_SESSION['redirect_after_login'])) {
                    $redirect = $_SESSION['redirect_after_login'];
                    unset($_SESSION['redirect_after_login']);
                    header("Location: " . $redirect);
                } else {
                    header("Location: /Cab_Service/web/index.php");
                }
                exit();
            } else {
                echo "<script>alert('Invalid email or password');</script>";
            }
        } catch (Exception $e) {
            echo "<script>alert('Error: " . $e->getMessage() . "');</script>";
        }
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        header("Location: /Cab_Service/web/index.php");
        exit();
    }
}
