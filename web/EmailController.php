<?php

include "AdminMail.php";
$functions = new AdminMail();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $functions->sendMail();
    }
}
