<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $birthplace = $_POST['birthplace'];

    $sql = "SELECT * FROM employee WHERE full_name = '$full_name' AND birthplace = '$birthplace'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $employee_id = $row['employee_id'];
        $password = $row['password'];

        echo "Your Employee ID: $employee_id<br>";
        echo "Your Password: $password";
    } else {
        $error_message = "Invalid full name or birthplace.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <!-- Add your CSS styles here -->
    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 0;
            padding: 0;
            background-color: #3498db;
            font-family: 'Arial', sans-serif;
        }

        main {
            text-align: center;
        }

        form {
            width: 300px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        label {
            display: block;
            margin: 10px 0;
            font-weight: bold;
        }

        input {
            width: calc(100% - 20px);
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"],
        .forget-password {
            width: calc(50% - 5px);
            background-color: #4caf50;
            color: white;
            cursor: pointer;
            border: none;
            padding: 10px;
            border-radius: 4px;
            display: inline-block;
        }

        

        footer {
            text-align: center;
            padding: 6px;
            background-color: #333;
            color: white;
            margin-top: 400px;
        }
    </style>
</head>
<body>

<h2>Forget Password</h2>

<?php
if (isset($error_message)) {
    echo '<p style="color: red;">' . $error_message . '</p>';
}
?>

<form method="post" action="forget_password.php">
    <label for="full_name">Full Name:</label>
    <input type="text" id="full_name" name="full_name" required><br>

    <label for="birthplace">Birthplace:</label>
    <input type="text" id="birthplace" name="birthplace" required><br>

    <input type="submit" value="Submit">
</form>

<?php
include('footer.php');
?>
</body>
</html>
