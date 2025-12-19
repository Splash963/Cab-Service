<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/register.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-0" style="background-color: black; border-radius: 0 0 0 12rem;">
                <div class="col-12 left-col">
                    <img src="images/register.png" alt="Register">
                </div>
            </div>
            <div class="col-md-6 p-0">
                <div class="col-12 right-col">
                    <div class="container from-details">
                        <h2>Welcome Back</h2>
                        <p>Log into your account to continue</p>
                        <form>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Enter password">
                            </div>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>