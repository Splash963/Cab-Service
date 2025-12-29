<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/register.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<?php
include 'LoginFunctions.php';
$functions = new loginController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (isset($_POST['loginButton'])) {
        $functions->login($email, $password);
    }
}
?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-0" style="background-color: #222831; border-radius: 0 0 0 12rem;">
                <div class="col-12 left-col">
                    <img src="images/icons/Logo.png" alt="Register">
                    <p class="fs-1 fw-semibold" style=" font-family: 'Poppins';">Welcome Back!</p>
                    <p style="text-align: center;">To Stay Connected With Us<br>Please Login With Your Personal Informations</p>
                    <a href="register.php" style="width: 100%; display: flex; justify-content: center; text-decoration: none;">
                        <button type="submit" class="button-02 mt-3 mb-1 fw-semibold">Sign Up</button>
                    </a>
                    <a href="index.php" style="width: 100%; display: flex; justify-content: center; text-decoration: none;">
                        <button type="submit" class="button-02 mb-5 fw-semibold">Home</button>
                    </a>
                </div>
            </div>
            <div class="col-md-6 p-0">
                <div class="col-12 right-col">
                    <div class="container from-details">
                        <p class="text-white fs-1 fw-semibold">Welcome</p>
                        <p class="text-white">Log into your account to continue</p>
                        <form class="mt-5" method="post" style="height: auto;">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" required>
                            </div>
                            <button type="submit" name="loginButton" class="button-01 mt-3">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>