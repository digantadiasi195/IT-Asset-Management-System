<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to IT Asset Management System</title>
    <link rel="stylesheet" href="assets/css/welcome_styles.css"> <!-- Add your custom styles here -->
    <style>
        /* Additional custom styles for a fancy look */
        body {
            background: url('assets/img/wallpaper.jpg') center center/cover no-repeat fixed;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            flex-direction: column; /* Align items in a column */
        }

        h1 {
            color: #fff;
            margin-bottom: 100px;
        }

        .container {
            display: flex;
            max-width: 600px;
            background-color: rgba(255, 255, 255, 0.8); /* Add a semi-transparent white background */
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .options {
            background-color: #3498db;
            color: #fff;
            padding: 20px;
            width: 50%;
            box-sizing: border-box;
            text-align: center;
            cursor: pointer;
        }

        .options h2 {
            margin-bottom: 20px;
        }

        .options:hover {
            background-color: #2980b9;
        }

        .options.employee {
            border-radius: 0 10px 10px 0;
        }

        .options.admin {
            border-radius: 10px 0 0 10px;
        }
    </style>
</head>
<body>
    <h1>Welcome to IT Asset Management System!</h1>

    <div class="container">
        <div class="options employee" onclick="location.href='employee_login.php';">
            <h2>Employee Login</h2>
            <p>Access your employee account</p>
        </div>
        <div class="options admin" onclick="location.href='login.php';">
            <h2>Admin Login</h2>
            <p>Access admin features</p>
        </div>
    </div>

</body>
</html>
