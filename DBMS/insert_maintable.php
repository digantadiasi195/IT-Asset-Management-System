<?php
include('header1.php');
include('db.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $make_and_model = $_POST['make_and_model'];
    $type = $_POST['type'];
    $asset_id = $_POST['asset_id'];
    $gt = $_POST['gt'];
    $date_purchased = $_POST['date_purchased'];
    $ledger_pageno = $_POST['ledger_pageno'];
    $status = $_POST['status'];
    $vendor = $_POST['vendor'];
    $purchase_order_no = $_POST['purchase_order_no'];
    $purchase_date = $_POST['purchase_date'];
    $warranty_status = $_POST['warranty_status'];
    $warranty_expiry_date = $_POST['warranty_expiry_date'];
    $mac_address = $_POST['mac_address'];
    $os = $_POST['os'];
    $ram_capacity = $_POST['ram_capacity'];
    $hdd_capacity = $_POST['hdd_capacity'];
    $processor = $_POST['processor'];

    // SQL query to insert data into 'maintable' table
    $sql = "INSERT INTO maintable (make_and_model, type, asset_id, gt, date_purchased, ledger_pageno, status, vendor, purchase_order_no, purchase_date, warranty_status, warranty_expiry_date, mac_address, os, ram_capacity, hdd_capacity, processor) 
            VALUES ('$make_and_model', '$type', '$asset_id', '$gt', '$date_purchased', '$ledger_pageno', '$status', '$vendor', '$purchase_order_no', '$purchase_date', '$warranty_status', '$warranty_expiry_date', '$mac_address', '$os', '$ram_capacity', '$hdd_capacity', '$processor')";

    if ($conn->query($sql) === TRUE) {
        echo '<p style="color: green;">Data added to maintable successfully!</p>';
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
    <title>Add Data to Maintable</title>
    <style>
        /* Add your CSS styles for the insert_maintable form here */
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

<h2>Add Data to Maintable</h2>

<!-- Maintable Data Form -->
<form method="post" action="">
    <label for="make_and_model">Make and Model:</label>
    <input type="text" id="make_and_model" name="make_and_model" required>

    <label for="type">Type:</label>
    <input type="text" id="type" name="type" required>

    <label for="asset_id">Asset ID:</label>
    <input type="text" id="asset_id" name="asset_id" required>

    <label for="gt">GT:</label>
    <input type="text" id="gt" name="gt" required>

    <label for="date_purchased">Date Purchased:</label>
    <input type="date" id="date_purchased" name="date_purchased" required>

    <label for="ledger_pageno">Ledger Page No:</label>
    <input type="text" id="ledger_pageno" name="ledger_pageno" required>

    <label for="status">Status:</label>
    <input type="text" id="status" name="status" required>

    <label for="vendor">Vendor:</label>
    <input type="text" id="vendor" name="vendor" required>

    <label for="purchase_order_no">Purchase Order No:</label>
    <input type="text" id="purchase_order_no" name="purchase_order_no">

    <label for="purchase_date">Purchase Date:</label>
    <input type="date" id="purchase_date" name="purchase_date">

    <label for="warranty_status">Warranty Status:</label>
    <input type="text" id="warranty_status" name="warranty_status">

    <label for="warranty_expiry_date">Warranty Expiry Date:</label>
    <input type="date" id="warranty_expiry_date" name="warranty_expiry_date">

    <label for="mac_address">MAC Address:</label>
    <input type="text" id="mac_address" name="mac_address">

    <label for="os">OS:</label>
    <input type="text" id="os" name="os">

    <label for="ram_capacity">RAM Capacity:</label>
    <input type="text" id="ram_capacity" name="ram_capacity">

    <label for="hdd_capacity">HDD Capacity:</label>
    <input type="text" id="hdd_capacity" name="hdd_capacity">

    <label for="processor">Processor:</label>
    <input type="text" id="processor" name="processor">

    <input type="submit" value="Add Data">
</form>

</body>
</html>

<?php

include('footer.php');
?>
