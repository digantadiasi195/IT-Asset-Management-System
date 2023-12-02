<?php
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Asset Management System - Home</title>
    <link rel="stylesheet" href="assets/css/login_forms_long.css"> 
    
</head>
<body>

<h2>Welcome to IT Asset Management System</h2>

<div class="options-container">
    <!-- Option to insert data into 'admin' table -->
    <div class="option-box" onclick="window.location.href='insert_admin.php'">
        Insert Data into Admin
    </div>

    <!-- Option to insert data into 'employee' table -->
    <div class="option-box" onclick="window.location.href='insert_employee.php'">
        Insert Data into Employee
    </div>

    <!-- Option to insert data into 'maintable' table -->
    <div class="option-box" onclick="window.location.href='insert_maintable.php'">
        Insert Data into Maintable
    </div>
</div>

<div class="options-container">
    <!-- Option to show data from 'wksp' table -->
    <div class="option-box" onclick="window.location.href='show_wksp.php'">
        Show Data from WKSP
    </div>

    <!-- Option to show data from 'issue_record' table -->
    <div class="option-box" onclick="window.location.href='show_issue_record.php'">
        Show Data from Issue Record
    </div>
</div>

</body>
</html>

<?php
include('footer.php');
?>
