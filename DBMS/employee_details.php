
<?php
include('db.php');

// Check if the employee is logged in

session_start();

// Check if the employee ID is set in the session
if (isset($_SESSION['employee_id'])) {
    

$employee_id = $_SESSION['employee_id'];
$sqlEmployee = "SELECT * FROM employee WHERE employee_id = '$employee_id'";
$resultEmployee = $conn->query($sqlEmployee);
$employeeDetails = $resultEmployee->fetch_assoc();

// Fetch issue_record details for the employee
$sqlIssueRecord = "SELECT * FROM issue_record WHERE employee_id = '$employee_id'";
$resultIssueRecord = $conn->query($sqlIssueRecord);

// Close the database connection
$conn->close();}
else {
    // Redirect to the login page if the employee ID is not set in the session
    header("Location: employee_login.php");
    exit();}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
    <link rel="stylesheet" href="assets/css/employee_details.css"> <!-- Add your custom styles here -->
    <style>
        /* Additional custom styles for a fancy look */
        body {
            background-color: #f4f4f4;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #3498db;
            color: white;
            padding: 20px;
            text-align: center;
            width: 100%;
        }

        .navbar {
            display: flex;
            justify-content: center;
        }

        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .navbar li {
            display: inline;
            margin-right: 20px;
        }

        .navbar a {
            text-decoration: none;
            color: white;
            font-size: 18px;
            transition: color 0.3s ease-in-out;
        }

        .navbar a:hover {
            color: #ecf0f1;
        }

        .container {
            align:center;
            display: flex;
            max-width: 800px;
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            margin-left: 530px ;
        }

        .sidebar {
            background-color: #333;
            color: #fff;
            padding: 20px;
            width: 30%;
            box-sizing: border-box;
        }

        .sidebar h2 {
            margin-bottom: 20px;
        }

        .content {
            padding: 20px;
            width: 70%;
            box-sizing: border-box;
        }

        .content h2 {
            color: #333;
            margin-bottom: 20px;
        }

        .content p {
            color: #555;
            margin-bottom: 10px;
        }

        hr {
            border: 0;
            height: 1px;
            background-color: #ddd;
            margin: 10px 0;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
            width: 100%;
            margin-top: auto;
        }

        .main-title {
            font-size: 24px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
 <header>
<h1 class="main-title">IT Asset Management System</h1>

    <div class="navbar">
    <nav>
        <ul>
            <li><a href="homepage.php">Home</a></li>
           
        </ul>
    </nav>
</div>
</header> 

<div class="container">
    <div class="sidebar">
        <h2>Employee Profile</h2>
        <p>Employee ID: <?php echo $employeeDetails['employee_id']; ?></p>
        <p>Designation: <?php echo $employeeDetails['designation']; ?></p>
        <p>Full Name: <?php echo $employeeDetails['full_name']; ?></p>
        <p>Department: <?php echo $employeeDetails['department']; ?></p>
    </div>

    <div class="content">
        <h2>Employee Issue Record Details</h2>
        <?php
        // Display issue_record details for the employee
        while ($row = $resultIssueRecord->fetch_assoc()) {
            echo '<p>Serial Number: ' . $row['serno'] . '</p>';
            echo '<p>Type: ' . $row['type'] . '</p>';
            echo '<p>Make and Model: ' . $row['make_and_model'] . '</p>';
            echo '<p>Issue Date: ' . $row['issue_date'] . '</p>';
            // Add more fields as needed
            echo '<hr>';
        }
        ?>
    </div>
</div>

    <footer>
        <p>&copy; 2023 IT Asset Management System</p>
    </footer> 
</body>
</html>
