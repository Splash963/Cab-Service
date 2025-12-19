<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/register.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-0" style="background-color: #222831; border-radius: 0 0 0 12rem;">
                <div class="col-12 left-col">
                    <img src="images/Login/man.png" alt="Register">
                    <p class="fs-1 fw-semibold" style=" font-family: 'Poppins';">Get Started!</p>
                    <p style="text-align: center;">Already have an account?</p>
                    <a href="login.php" style="width: 100%; display: flex; justify-content: center; text-decoration: none;">
                        <button type="submit" class="button-02 mb-5 fw-semibold">Sign In</button>
                    </a>
                </div>
            </div>
            <div class="col-md-6 p-0">
                <div class="col-12 right-col">
                    <div class="container from-details">
                        <p class="text-white fs-1 fw-semibold">Welcome</p>
                        <p class="text-white">Please Register With Your Personal Informations</p>
                        <form class="mt-5 overflow-y-scroll" style="height: 25rem; scrollbar-width: none;">
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="number" class="form-control" id="age" placeholder="Enter age">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" placeholder="Enter address">
                            </div>
                            <div class="form-group">
                                <label for="nic">NIC Number</label>
                                <input type="number" class="form-control" id="nic" placeholder="Enter nic">
                            </div>
                            <div class="form-group">
                                <label for="number">Phone Number</label>
                                <input type="number" class="form-control" id="number" placeholder="Enter number">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Enter password">
                            </div>
                            <div>
                                <input class="form-check-input" type="checkbox" value="" id="terms" required>
                                <label class="form-check-label" for="terms">
                                    I Agree To The Terms & Conditions
                                </label>
                            </div>
                            <button type="submit" class="button-01 mt-5">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>