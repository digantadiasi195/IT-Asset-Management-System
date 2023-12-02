<?php
include('header1.php');
include('db.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $serno = $_POST['serno'];
    $type = $_POST['type'];
    $make_and_model = $_POST['make_and_model'];
    $au = $_POST['au'];
    $qty = $_POST['qty'];
    $loc = $_POST['loc'];
    $issue_date = $_POST['issue_date'];
    $iv_local = $_POST['iv_local'];
    $rv_local = $_POST['rv_local'];
    $employee_id = $_POST['employee_id'];  // Entered employee_id in the form

    // Validate and fetch employee details from 'indl' table
    $employee_query = "SELECT * FROM indl WHERE employee_id = '$employee_id'";
    $employee_result = $conn->query($employee_query);

    if ($employee_result->num_rows == 1) {
        $employee_data = $employee_result->fetch_assoc();
        $designation = $employee_data['designation'];
        $full_name = $employee_data['full_name'];
        $department = $employee_data['department'];
        $branch = $employee_data['branch'];

        // SQL query to insert data into 'issue_record' table
        $insert_query = "INSERT INTO issue_record (serno, type, make_and_model, au, qty, loc, issue_date, iv_local, rv_local, employee_id, designation, full_name, department, branch) 
                         VALUES ('$serno', '$type', '$make_and_model', '$au', '$qty', '$loc', '$issue_date', '$iv_local', '$rv_local', '$employee_id', '$designation', '$full_name', '$department', '$branch')";

        if ($conn->query($insert_query) === TRUE) {
            echo '<p style="color: green;">Record added successfully!</p>';
        } else {
            echo '<p style="color: red;">Error: ' . $conn->error . '</p>';
        }
    } else {
        echo '<p style="color: red;">Error: Employee ID not found in the indl table.</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Issue Record</title>
    <style>
        /* Add your CSS styles for the insert_issue_record form here */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2 {
            color: #333;
        }

        form {
            width: 400px;
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

<h2>Add Issue Record</h2>

<!-- Issue Record Form -->
<form method="post" action="">
    <label for="serno">Serial Number:</label>
    <input type="text" id="serno" name="serno" required>

    <label for="type">Type:</label>
    <input type="text" id="type" name="type" required>

    <label for="make_and_model">Make and Model:</label>
    <input type="text" id="make_and_model" name="make_and_model" required>

    <label for="au">AU:</label>
    <input type="text" id="au" name="au" required>

    <label for="qty">Quantity:</label>
    <input type="text" id="qty" name="qty" required>

    <label for="loc">Location:</label>
    <input type="text" id="loc" name="loc" required>

    <label for="issue_date">Issue Date:</label>
    <input type="text" id="issue_date" name="issue_date" placeholder="YYYY-MM-DD" required>

    <label for="iv_local">IV Local:</label>
    <input type="text" id="iv_local" name="iv_local" required>

    <label for="rv_local">RV Local:</label>
    <input type="text" id="rv_local" name="rv_local" required>

    <label for="employee_id">Employee ID:</label>
    <input type="text" id="employee_id" name="employee_id" required>

    <input type="submit" value="Add Record">
</form>

<?php

include('footer.php');
?>
