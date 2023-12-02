
<?php
include('header1.php');
include('db.php');
 
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employee_id = $_POST['employee_id'];
    $designation = $_POST['designation'];
    $full_name = $_POST['full_name'];
    $department = $_POST['department'];
    $password = $_POST['password'];
 
    // Check if the employee exists in 'indl' table
    $checkEmployeeQuery = "SELECT * FROM employee WHERE employee_id = '$employee_id'";
    $result = $conn->query($checkEmployeeQuery);
 
    if ($result->num_rows > 0) {
        // Employee exists, proceed to insert data into 'admin' table
        $insertAdminQuery = "INSERT INTO admin (employee_id, designation, full_name, department, password) VALUES ('$employee_id', '$designation', '$full_name', '$department', '$password')";
 
        if ($conn->query($insertAdminQuery) === TRUE) {
            echo '<p style="color: green;">Admin details added successfully!</p>';
        } else {
            echo '<p style="color: red;">Error: ' . $conn->error . '</p>';
        }
    } else {
        // Employee does not exist, show error
        echo '<p style="color: red;">No employee with the provided ID exists!</p>';
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Signup</title>
    <style>
        /* Add your CSS styles for the signup form here */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
 
        h2 {
            color: #333;
        }
 
        form {
            width: 300px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
 
        label {
            display: block;
            margin: 10px 0;
        }
 
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
 
        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }
 
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
 
<h2>Admin Signup</h2>
 
<!-- Admin Signup Form -->
<form method="post" action="">
    <label for="employee_id">Employee ID:</label>
    <input type="text" id="employee_id" name="employee_id" required>
 
    <label for="designation">Designation:</label>
    <input type="text" id="designation" name="designation" required>
 
    <label for="full_name">Full Name:</label>
    <input type="text" id="full_name" name="full_name" required>
 
    <label for="department">Department:</label>
    <input type="text" id="department" name="department" required>
 
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
 
    <input type="submit" value="Sign Up">
</form>
 
</body>
</html>
 
<?php
include('footer.php');
?>
 