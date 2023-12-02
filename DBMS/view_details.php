<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Issue Records</title>
    <style>
        body {
            min-height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            font-family: 'Arial', sans-serif;
        }

        header {
            background-color: #3498db;
            color: white;
            padding: 20px;
            text-align: center;
            width: 100%;
        }

        main {
            text-align: center;
            margin-top: 20px;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #4caf50;
            color: white;
        }
    </style>
</head>
<body>

<header>
    <h1>Employee Issue Records</h1>
</header>

<main>
    <!-- Display data in a table -->
    <table>
        <thead>
            <tr>
                <th>Employee ID</th>
                <th>Designation</th>
                <th>Full Name</th>
                <th>Department</th>
                <th>Serial Number</th>
                <th>Type</th>
                <th>Make and Model</th>
                <th>Issue Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Include necessary files and perform database connection
            include('db.php');

            // Fetch data from the v_employee_issue_records view
            $sql = "SELECT * FROM v_employee_issue_records";
            $result = $conn->query($sql);

            // Display data in rows
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row['employee_id'] . '</td>';
                echo '<td>' . $row['designation'] . '</td>';
                echo '<td>' . $row['full_name'] . '</td>';
                echo '<td>' . $row['department'] . '</td>';
                echo '<td>' . $row['serno'] . '</td>';
                echo '<td>' . $row['type'] . '</td>';
                echo '<td>' . $row['make_and_model'] . '</td>';
                echo '<td>' . $row['issue_date'] . '</td>';
                echo '</tr>';
            }

            // Close the database connection
            $conn->close();
            ?>
        </tbody>
    </table>
</main>

<?php
include('footer.php');
?>
</body>
</html>
