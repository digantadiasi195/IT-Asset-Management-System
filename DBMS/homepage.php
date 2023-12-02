
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Asset Management System - Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 20px;
            background-color: #3498db;
            color: #fff;
            background-image: url('assets/img/background.jpg'); /* Replace 'background.jpg' with your actual background image URL */
            background-size: cover;
            background-position: center;
        }
 
        header {
            text-align: left;
            margin-bottom: 20px;
            padding: 10px;
        }
 
        header img {
            width: 120px; /* Increased logo size */
            height: auto;
            margin-top: 10px;
        }
 
        h2 {
            text-align: center;
            margin-bottom: 100px;
            color: #66ccff; /* Dark blue color for welcome message */
            font-size: 36px;
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
            background-color: #ccc; /* Grey color for buttons */
            transition: background-color 0.3s ease-in-out;
            cursor: pointer;
            margin-bottom: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: #333;
            text-decoration: none;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
 
        .option-box:hover {
            background-color: #b0b0b0; /* Darker grey color on hover */
        }
 
        .option-icon {
            font-size: 24px;
            margin-bottom: 10px;
        }
 
        footer {
            text-align: center;
            margin-top: 300px;
            padding: 10px;
            background-color: #333;
            color: white;
        }
 
        html, body {
            height: 100%;
        }
 
        main {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
 
        a {
            color: #333;
            text-decoration: none;
        }
    </style>
</head>
<body>
 
<header>
    <img src="assets/img/logo.png" alt="Company Logo"> <!-- Replace 'logo.png' with your actual logo image URL -->
</header>
 
<main>
    <h2>Welcome to IT Asset Management System</h2>
 
    <div class="options-container">
        <a class="option-box" href="insert_admin.php">
            <i class="fas fa-user-plus option-icon"></i>
            Admin Sign Up
        </a>
        <a class="option-box" href="insert_employee.php">
            <i class="fas fa-user option-icon"></i>
            Add Employee
        </a>
        <a class="option-box" href="insert_maintable.php">
            <i class="fas fa-laptop option-icon"></i>
            Add New Asset
        </a>
        <a class="option-box" href="show_wksp.php">
            <i class="fas fa-tools option-icon"></i>
            Assets for Repair
        </a>
        
 <a class="option-box" href="view_details.php">
                <i class="fas fa-history option-icon"></i>
                Employee Issue Record
            </a>
            <a class="option-box" href="show_issue_record.php">
                <i class="fas fa-history option-icon"></i>
                Detailed Issue Record
            </a>
        <a class="option-box" href="insert_issue_record.php">
            <i class="fas fa-arrow-circle-up option-icon"></i>
            Issue an Asset
        </a>
        <a class="option-box" href="show_maintable.php">
            <i class="fas fa-list-alt option-icon"></i>
            Show all Assets
        </a>
        <a class="option-box" href="insert_wksp.php">
            <i class="fas fa-truck option-icon"></i>
            Send Asset to Workshop
        </a>
        
    </div>
</main>
 
<footer>
    IT Asset Management System &copy; 2023
</footer>
 
</body>
</html>
 