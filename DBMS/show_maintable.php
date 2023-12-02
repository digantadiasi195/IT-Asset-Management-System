<?php
include('header1.php');
// Database connection code (assuming you have a $conn variable)
include('db.php');

// Handle search functionality
$search = '';
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $sql = "SELECT * FROM maintable WHERE 
            make_and_model LIKE '%$search%' OR
            type LIKE '%$search%' OR
            asset_id LIKE '%$search%' OR
            gt LIKE '%$search%' OR
            date_purchased LIKE '%$search%' OR
            status LIKE '%$search%' OR
            vendor LIKE '%$search%' OR
            ram_capacity LIKE '%$search%' OR
            hdd_capacity LIKE '%$search%' OR
            processor LIKE '%$search%'";
} else {
    // If no search, fetch all records
    $sql = "SELECT * FROM maintable";
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


<!-- HTML part starts here -->
<div class="container">
    <h2>Show Maintable Data</h2>

    <!-- Search bar -->
    <form action="show_maintable.php" method="GET">
        <input type="text" name="search" placeholder="Search..." value="<?php echo $search; ?>">
        <button type="submit">Search</button>
    </form>

    <!-- Display table -->
    <table border="1">
        <tr>
            <th>Make and Model</th>
            <th>Type</th>
            <th>Asset ID</th>
            <th>GT</th>
            <th>Date Purchased</th>
            <th>Status</th>
            <th>Vendor</th>
            <th>Ram Capacity</th>
            <th>HDD Capacity</th>
            <th>Processor</th>
        </tr>

        <!-- Loop through results and display data -->
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$row['make_and_model']}</td>";
            echo "<td>{$row['type']}</td>";
            echo "<td>{$row['asset_id']}</td>";
            echo "<td>{$row['gt']}</td>";
            echo "<td>{$row['date_purchased']}</td>";
            echo "<td>{$row['status']}</td>";
            echo "<td>{$row['vendor']}</td>";
            echo "<td>{$row['ram_capacity']}</td>";
            echo "<td>{$row['hdd_capacity']}</td>";
            echo "<td>{$row['processor']}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>

<?php

include('footer.php'); // Include your footer file
?>
