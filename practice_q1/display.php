<?php
session_start();

// Check if user details are available in session
if (isset($_SESSION["userDetails"])) {
    $userDetails = $_SESSION["userDetails"];
} else {
    // Redirect to the form page if session variables are not set
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Details Display</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }

    h2 {
      color: #4CAF50;
    }

    p {
      margin-bottom: 8px;
    }
  </style>
</head>
<body>
  <h2>User Details</h2>
  <p><strong>First Name:</strong> <?php echo $userDetails["firstName"]; ?></p>
  <p><strong>Last Name:</strong> <?php echo $userDetails["lastName"]; ?></p>
  <p><strong>Email ID:</strong> <?php echo $userDetails["email"]; ?></p>
  <p><strong>Date of Birth:</strong> <?php echo $userDetails["dob"]; ?></p>
  <p><strong>Phone No.:</strong> <?php echo $userDetails["phone"]; ?></p>
  <p><strong>Designation:</strong> <?php echo $userDetails["designation"]; ?></p>
</body>
</html>
