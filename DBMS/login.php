<?php
include('header2.php');
include('db.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employee_id = $_POST['employee_id'];
    $password = $_POST['password'];

    // SQL query to check credentials
    $sql = "SELECT * FROM admin WHERE employee_id = '$employee_id' AND password = '$password'";
    $result = $conn->query($sql);

    // If credentials are correct, redirect to home page
    if ($result->num_rows == 1) {
        $_SESSION['employee_id'] = $employee_id;
        header("Location: index.php");
    } else {
        // Incorrect credentials, display an error message
        $error_message = "Incorrect employee ID or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/login_forms.css">
    <style>
    footer {
            text-align: center;
            margin-top: 30px;
        }
    footer {
    text-align: center;
    margin-top: auto; /* Push the footer to the bottom */
    padding: 10px;
    background-color: #333;
    color: white;
}
html {
    height: 100%;
}

body {
    min-height: 100%;
    display: flex;
    flex-direction: column;
}
    </style>
</head>
<body>

<?php
// Display error message if present
if (isset($error_message)) {
    echo '<p style="color: red;">' . $error_message . '</p>';
}
?>

<!-- Login Form -->
<form method="post" action="">
    <label for="employee_id">Admin ID:</label>
    <input type="text" id="employee_id" name="employee_id" required><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br>

    <input type="submit" value="Login">
</form>

<?php
include('footer.php');
?>