<?php

include "db.php";

class loginController
{

    public function register($user_id, $user_type, $name, $age, $address, $nic, $number, $email, $hashedPassword, $profile_image, $conditions)
    {
        global $conn;

        try {
            $stmt = $conn->prepare("INSERT INTO users (user_id, user_type, name, age, address, nic, number, email, password, profile, conditions) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssisssssss", $user_id, $user_type, $name, $age, $address, $nic, $number, $email, $hashedPassword, $profile_image, $conditions);
            $stmt->execute();

            $newUserId = $stmt->insert_id;

            session_start();
            $_SESSION['user_id'] = $user_id;
            $_SESSION['user_name'] = $name;
            $_SESSION['user_type'] = $user_type;
            $_SESSION['profile'] = $profile_image;


            if (isset($_SESSION['redirect_after_login'])) {
                $redirect = $_SESSION['redirect_after_login'];
                unset($_SESSION['redirect_after_login']);
                header("Location: " . $redirect);
            } else {
                header("Location: /Cab-Service/web/index.php");
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
            $stmt = $conn->prepare("SELECT user_id, name, password, user_type FROM users WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();

            if ($user && password_verify($password, $user['password'])) {
                session_start();
                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['user_name'] = $user['name'];
                $_SESSION['user_type'] = $user['user_type'];
                $_SESSION['profile'] = $user['profile'];

                if (isset($_SESSION['redirect_after_login'])) {
                    $redirect = $_SESSION['redirect_after_login'];
                    unset($_SESSION['redirect_after_login']);
                    header("Location: " . $redirect);
                } else {
                    header("Location: /Cab-Service/web/index.php");
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
        header("Location: /Cab-Service/web/index.php");
        exit();
    }
}
