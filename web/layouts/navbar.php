<!-- Navbars -->
<nav class="navbar navbar-expand-lg nav-background p-0 transparent-bg position-sticky" style="top: 0; z-index: 1000;">
    <div class="container-fluid d-flex justify-content-end">
        <nav class="navbar p-0">
            <div class="container-fluid p-0">
                <a class="navbar-brand" href="#">
                    <img src="images/icons/Logo.png" class="head-logo" alt="Bootstrap">
                    <span class="ms-2 fs-4 text-black">TaxiGeo.com</span>
                </a>
            </div>
        </nav>
        <button class="navbar-toggler ms-auto nav-icon" type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end half-screen" tabindex="-1"
            id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1">
                    <li class="nav-item pe-3">
                        <a class="nav-link <?php echo ($currentPage === 'home') ? 'active-color' : 'nav-color'; ?>" href="index.php">Home</a>
                    </li>
                    <li class="nav-item pe-3">
                        <a class="nav-link <?php echo ($currentPage === 'about') ? 'active-color' : 'nav-color'; ?>" href="about.php">About</a>
                    </li>
                    <li class="nav-item pe-3">
                        <a class="nav-link <?php echo ($currentPage === 'contact') ? 'active-color' : 'nav-color'; ?>" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item pe-3">
                        <a class="nav-link <?php echo ($currentPage === 'booking') ? 'active-color' : 'nav-color'; ?>" href="booking.php">Booking</a>
                    </li>
                    <?php if (!isset($_SESSION['user_id'])) { ?>
                        <li class="nav-item pe-3">
                            <a class="nav-link <?php echo ($currentPage === 'login') ? 'active-color' : 'nav-color'; ?>" href="login.php">Login</a>
                        </li>
                        <li class="nav-item pe-3">
                            <a class="nav-link <?php echo ($currentPage === 'register') ? 'active-color' : 'nav-color'; ?>" href="register.php">Register</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo htmlspecialchars($_SESSION['user_name']); ?>
                            </a>
                            <form action="LoginController.php" method="POST">
                                <ul class="dropdown-menu">
                                    <li><button type="submit" name="logout" class="dropdown-item">Logout</button></li>
                                </ul>
                            </form>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</nav>