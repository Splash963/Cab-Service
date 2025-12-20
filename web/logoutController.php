<?php
include 'functions.php';
$functions = new loginController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['logout'])) {
        $functions->logout();
    }
}
