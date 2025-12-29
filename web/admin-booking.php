<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Booking</title>

    <link href="images/icons/Logo.png" rel="icon">

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/admin_booking.css">
</head>


<body>

    <head>

        <?php
        session_start();
        if (!isset($_SESSION['user_type'])) {
            header("Location: login.php");
            exit();
        }
        if ($_SESSION['user_type'] !== 'admin') {
            header("Location: index.php");
            exit();
        }

        $currentPage = "admin-booking";

        ?>

        <?php include('layouts/offcanvas.php') ?>
        <?php include('layouts/spinner.php') ?>
    </head>


    <head>
        <nav class="navbar justify-content-center">
            <ul class="buttons mb-1 mt-3 ms-0 ps-0" id="pills-tab" role="tablist">
                <li class="links">
                    <button class="btn btn-outline-primary active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab">All Bookings</button>
                </li>
                <li class="links">
                    <button class="btn btn-outline-primary" id="pills-pending-tab" data-bs-toggle="pill" data-bs-target="#pills-pending" type="button" role="tab">Pending Bookings</button>
                </li>
                <li class="links">
                    <button class="btn btn-outline-primary" id="pills-confirmed-tab" data-bs-toggle="pill" data-bs-target="#pills-confirmed" type="button" role="tab">Confirmed Bookings</button>
                </li>
                <li class="links">
                    <button class="btn btn-outline-primary" id="pills-complete-tab" data-bs-toggle="pill" data-bs-target="#pills-complete" type="button" role="tab">Complete Bookings</button>
                </li>
                <li class="links">
                    <button class="btn btn-outline-primary" id="pills-canceled-tab" data-bs-toggle="pill" data-bs-target="#pills-canceled" type="button" role="tab">Canceled Bookings</button>
                </li>
            </ul>

        </nav>
    </head>

    <body>
        <div class="container">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                    <div class="mb-5">
                        <h1 class="text-center mt-5">All Appointments</h1>
                    </div>
                    <div class="cards mb-3">
                        <div class="image">
                            <img src="" class="img-fluid img" alt="User Profile Image">
                        </div>
                        <div class="description">
                            <p></p>
                            <p>Division : </p>
                            <p>Subject : </p>
                            <p>Status : </p>
                            <p>Date : </p>
                        </div>
                        <div class="action">
                            <button type="button" class="btn btn-primary view-btn" data-id="" data-bs-toggle=" modal" data-bs-target="#exampleModal">
                                View
                            </button>
                            <button type="button" class="btn btn-danger delete-btn" data-id="" onclick="return confirm('Are you sure you want to delete ?');">Delete</button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-pending" role="tabpanel" aria-labelledby="pills-pending-tab" tabindex="0">
                    <div class="mb-5">
                        <h1 class="text-center mt-5">Pending Appointments</h1>
                    </div>
                    <div class="cards mb-3">
                        <div class="image">
                            <img src="" class="img-fluid img" alt="User Profile Image">
                        </div>
                        <div class="description">
                            <p></p>
                            <p>Division : </p>
                            <p>Subject : </p>
                            <p>Date : </p>
                        </div>
                        <div class="action">
                            <button type="button" class="btn btn-primary view-btn" data-id="" data-bs-toggle=" modal" data-bs-target="#exampleModal">
                                View
                            </button>
                            <button class="btn btn-success confirm-btn" data-id="">Confirm</button>
                            <button type="button" class="btn btn-danger" data-id="" data-bs-toggle="modal" data-bs-target="#cancelModal">
                                Cancel
                            </button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-confirmed" role="tabpanel" aria-labelledby="pills-confirmed-tab" tabindex="0">
                    <div class="mb-5">
                        <h1 class="text-center mt-5">Confirmed Appointments</h1>
                    </div>
                    <div class="cards mb-3">
                        <div class="image">
                            <img src="" class="img-fluid img" alt="User Profile Image">
                        </div>
                        <div class="description">
                            <p>Username : </p>
                            <p>Division : </p>
                            <p>Subject : </p>
                            <p>Date : </p>
                        </div>
                        <div class="action">
                            <button type="button" class="btn btn-primary view-btn" data-id="" data-bs-toggle=" modal" data-bs-target="#exampleModal">
                                View
                            </button>
                            <button class="btn btn-success complete-btn" data-id="">Complete</button>
                            <button type="button" class="btn btn-danger" data-id="" data-bs-toggle="modal" data-bs-target="#cancelModal">
                                Cancel
                            </button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-complete" role="tabpanel" aria-labelledby="pills-complete-tab" tabindex="0">
                    <div class="mb-5">
                        <h1 class="text-center mt-5">Complete Appointments</h1>
                    </div>
                    <div class="cards mb-3">
                        <div class="image">
                            <img src="" class="img-fluid img" alt="User Profile Image">
                        </div>
                        <div class="description">
                            <p>Username : </p>
                            <p>Division : </p>
                            <p>Subject : </p>
                            <p>Date : </p>
                        </div>
                        <div class="action">
                            <button type="button" class="btn btn-primary view-btn" data-id="" data-bs-toggle=" modal" data-bs-target="#exampleModal">
                                View
                            </button>
                            <button type="button" class="btn btn-danger delete-btn" data-id="" onclick="return confirm('Are you sure you want to delete ?');">Delete</button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-canceled" role="tabpanel" aria-labelledby="pills-canceled-tab" tabindex="0">
                    <div class="mb-5">
                        <h1 class="text-center mt-5">Cenceled Appointments</h1>
                    </div>
                    <div class="cards mb-3">
                        <div class="image">
                            <img src="" class="img-fluid img" alt="User Profile Image">
                        </div>
                        <div class="description">
                            <p>Username : </p>
                            <p>Division : </p>
                            <p>Subject : </p>
                            <p>Reason : </p>
                            <p>Date : </p>
                        </div>
                        <div class="action">
                            <button type="button" class="btn btn-primary view-btn" data-id="" data-bs-toggle=" modal" data-bs-target="#exampleModal">
                                View
                            </button>
                            <button type="button" class="btn btn-danger delete-btn" data-id="" onclick="return confirm('Are you sure you want to delete ?');">Delete</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- View Data Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Appointment Details</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <div class="card" style="width: 10rem;">
                                            <img src="" id="appointment-profile" class="card-img-top" alt="...">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <p style="text-align: left;">Username : <span id="appointment-username"></span></p>
                                            <p style="text-align: left;">Division : <span id="appointment-division"></span></p>
                                            <p style="text-align: left;">Subject : <span id="appointment-subject"></span></p>
                                            <p style="text-align: left;">Description : <span id="appointment-description"></span></p>
                                            <p style="text-align: left;">Status : <span id="appointment-status"></span></p>
                                            <p style="text-align: left;">Reason : <span id="appointment-reason"></span></p>
                                            <p style="text-align: left;">Phone no : <span id="appointment-phone"></span></p>
                                            <p style="text-align: left;">Added Date : <span id="appointment-added"></span></p>
                                            <p style="text-align: left;">Updated Date : <span id="appointment-updated"></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger delete-btn" data-id="{{ $appointment->id }}" onclick="return confirm('Are you sure you want to delete ?');">Delete</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cancel Appointment Modal -->
            <div class="modal fade" id="cancelModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Cancel Appointment</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Reason</label>
                                <textarea class="form-control" name="reason" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger cancel-btn"
                                data-id=""
                                data-bs-toggle="modal"
                                data-bs-target="#cancelModal">
                                Confirm
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </body>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>