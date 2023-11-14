<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect user details from the form
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $phone = $_POST["phone"];
    $designation = $_POST["designation"];

    // Store details in session variables
    $_SESSION["userDetails"] = [
        "firstName" => $firstName,
        "lastName" => $lastName,
        "email" => $email,
        "dob" => $dob,
        "phone" => $phone,
        "designation" => $designation,
    ];

    // Redirect to display page
    header("Location: display.php");
    exit();
} else {
    // Redirect to the form page if accessed directly without form submission
    header("Location: index.html");
    exit();
}
?>
