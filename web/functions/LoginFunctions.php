<?php

include __DIR__ . "/../database/db.php";

class loginController
{

    public function register($name, $age, $address, $nic, $number, $email, $hashedPassword)
    {
        global $conn;

        try {
            $stmt = $conn->prepare("INSERT INTO users (name, age, address, nic, number, email, password) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sisssss", $name, $age, $address, $nic, $number, $email, $hashedPassword);
            $stmt->execute();

            $newUserId = $stmt->insert_id;

            session_start();
            $_SESSION['user_id'] = $newUserId;
            $_SESSION['user_name'] = $name;

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
            $stmt = $conn->prepare("SELECT id, name, password FROM users WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();

            if ($user && password_verify($password, $user['password'])) {
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['name'];

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
