<?php
include('header1.php');
include('db.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employee_id = $_POST['employee_id'];
    $designation = $_POST['designation'];
    $full_name = $_POST['full_name'];
    $department = $_POST['department'];
    $branch = $_POST['branch'];
    $birthplace = $_POST['birthplace'];
    $password = $_POST['password'];

    // SQL query to insert data into 'indl' table
    $sql = "INSERT INTO employee (employee_id, designation, full_name, department, branch, birthplace, password) VALUES ('$employee_id', '$designation', '$full_name', '$department', '$branch', '$birthplace', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo '<p style="color: green;">Employee details added successfully!</p>';
    } else {
        echo '<p style="color: red;">Error: ' . $conn->error . '</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <style>
        /* Add your CSS styles for the insert_employee form here */
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
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #3498db;
        }

        h2 {
            color: #fff;
            text-align: center;
            margin-bottom: 30px;
        }

        .options-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .option-box {
            width: 200px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            text-align: center;
            background-color: #fff;
            transition: background-color 0.3s ease-in-out;
            cursor: pointer;
            margin-bottom: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: #333;
            text-decoration: none;
        }

        .option-box:hover {
            background-color: #e0e0e0;
        }

        footer {
            text-align: center;
            margin-top: auto;
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

        main {
            flex-grow: 1;
        }
    </style>
</head>
<body>

<h2>Add Employee</h2>

<!-- Employee Details Form -->
<form method="post" action="">
    <label for="employee_id">Employee ID:</label>
    <input type="text" id="employee_id" name="employee_id" required>

    <label for="designation">Designation:</label>
    <input type="text" id="designation" name="designation" required>

    <label for="full_name">Full Name:</label>
    <input type="text" id="full_name" name="full_name" required>

    <label for="department">Department:</label>
    <input type="text" id="department" name="department" required>

    <label for="branch">Branch:</label>
    <input type="text" id="branch" name="branch" required>

    <label for="birthplace">Birthplace:</label>
    <input type="text" id="birthplace" name="birthplace" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <input type="submit" value="Add Employee">
</form>

</body>
</html>

<?php
include('footer.php');
?>
