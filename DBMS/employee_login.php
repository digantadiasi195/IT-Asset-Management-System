<?php
// Start the session
session_start();


include('db.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employee_id = $_POST['employee_id'];
    $password = $_POST['password'];

    // Validate login (Replace this with your actual validation logic)
    if (validateLogin($employee_id, $password)) {
        // Store employee_id in the session
        $_SESSION['employee_id'] = $employee_id;

        // Redirect to the employee_details page
        header("Location: employee_details.php");
        exit();
    } else {
        $error_message = "Invalid login credentials. Please try again.";
    }
}

// Function to validate login (Replace this with your actual validation logic)
function validateLogin($employee_id, $password) {
    // Add your validation logic here
    // For example, querying the database to check credentials
    // Return true if valid, false otherwise
    return true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Login</title>
    <link rel="stylesheet" href="assets/css/login_forms.css">
    <!-- Add your custom styles here -->
    <style>
        /* Add your custom styles for the employee login page */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

       main {
            text-align: center;
            flex-grow: 1;
        }

        footer {
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: white;
        }
    </style>
</head>
<body>
    <main>
        <?php
        // Display error message if present
        if (isset($error_message)) {
            echo '<p style="color: red; text-align: center;">' . $error_message . '</p>';
        }
        ?>
        <h1>Welcome To IT Asset Management System</h1>

        <!-- Employee Login Form -->
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <h2>Employee Login</h2>

            <label for="employee_id">Employee ID:</label>
            <input type="text" id="employee_id" name="employee_id" placeholder="Enter Employee ID" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter Password" required>

            <input type="submit" value="Login">

            <a href="forget_password.php" class="forget-password">Forget Password</a>
        </form>
    </main>

    <?php
    include('footer.php');
    ?>
</body>
</html>
