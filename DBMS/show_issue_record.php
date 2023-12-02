<?php
include('header1.php');
include('db.php');

// Initialize variables
$filter_field = isset($_GET['filter_field']) ? $_GET['filter_field'] : '';
$filter_value = isset($_GET['filter_value']) ? $_GET['filter_value'] : '';

// SQL query to fetch data from 'issue_record' table based on the filter
$sql = "SELECT * FROM issue_record";
if ($filter_field && $filter_value) {
    $sql .= " WHERE $filter_field LIKE '%$filter_value%'";
}

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Issue Records</title>
    <style>
        /* Add your CSS styles for the show_issue_record page here */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h2 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #4caf50;
            color: white;
        }

        form {
            margin-top: 20px;
        }

        label {
            margin-right: 10px;
        }

        input[type="text"] {
            padding: 8px;
            width: 200px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 8px;
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

<h2>Show Issue Records</h2>

<!-- Search Form -->
<form method="get" action="">
    <label for="filter_field">Filter by:</label>
    <select id="filter_field" name="filter_field">
        <option value="serno" <?php echo ($filter_field == 'serno') ? 'selected' : ''; ?>>Serial Number</option>
        <option value="type" <?php echo ($filter_field == 'type') ? 'selected' : ''; ?>>Type</option>
        <option value="make_and_model" <?php echo ($filter_field == 'make_and_model') ? 'selected' : ''; ?>>Make and Model</option>
        <!-- Add more options as needed -->

    </select>

    <label for="filter_value">Filter Value:</label>
    <input type="text" id="filter_value" name="filter_value" value="<?php echo $filter_value; ?>">
    <input type="submit" value="Search">
</form>

<!-- Display Table -->
<table>
    <tr>
        <th>Serial Number</th>
        <th>Type</th>
        <th>Make and Model</th>
        <th>AU</th>
        <th>Quantity</th>
        <th>Location</th>
        <th>Issue Date</th>
        <th>IV Local</th>
        <th>RV Local</th>
        <th>Employee ID</th>
        <th>Designation</th>
        <th>Full Name</th>
        <th>Department</th>
        <th>Branch</th>
    </tr>

    <?php
    // Display data from issue_record table
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['serno']}</td>
                <td>{$row['type']}</td>
                <td>{$row['make_and_model']}</td>
                <td>{$row['au']}</td>
                <td>{$row['qty']}</td>
                <td>{$row['loc']}</td>
                <td>{$row['issue_date']}</td>
                <td>{$row['iv_local']}</td>
                <td>{$row['rv_local']}</td>
                <td>{$row['employee_id']}</td>
                <td>{$row['designation']}</td>
                <td>{$row['full_name']}</td>
                <td>{$row['department']}</td>
                <td>{$row['branch']}</td>
              </tr>";
    }
    ?>
</table>

<?php

include('footer.php');
?>
