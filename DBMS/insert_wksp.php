<?php
include('header1.php'); // Include your header file

// Database connection code (assuming you have a $conn variable)
include('db.php');

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $serno = $_POST['serno'];
    $type = $_POST['type'];
    $makeandmodel = $_POST['makeandmodel'];
    $wono = $_POST['wono'];
    $in_date = $_POST['in_date'];
    $wk_done = $_POST['wk_done'];

    // Insert data into wksp table
    $sql = "INSERT INTO wksp (serno, type, makeandmodel, wono, in_date, wk_done) 
            VALUES ('$serno', '$type', '$makeandmodel', '$wono', '$in_date', '$wk_done')";

    if ($conn->query($sql) === TRUE) {
        echo "Data added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!-- HTML part starts here -->
<div class="container">
    <h2 style="text-align: center; color: #333;">Add Data to WKSP Table</h2>

    <!-- Add your fancy form here -->
    <form action="insert_wksp.php" method="POST" style="max-width: 400px; margin: auto;">
        <label for="serno" style="display: block; margin-bottom: 8px;">Serial Number:</label>
        <input type="text" name="serno" required style="width: 100%; padding: 8px; margin-bottom: 16px;">

        <label for="type" style="display: block; margin-bottom: 8px;">Type:</label>
        <input type="text" name="type" required style="width: 100%; padding: 8px; margin-bottom: 16px;">

        <label for="makeandmodel" style="display: block; margin-bottom: 8px;">Make and Model:</label>
        <input type="text" name="makeandmodel" required style="width: 100%; padding: 8px; margin-bottom: 16px;">

        <label for="wono" style="display: block; margin-bottom: 8px;">Work Order Number:</label>
        <input type="text" name="wono" required style="width: 100%; padding: 8px; margin-bottom: 16px;">

        <label for="in_date" style="display: block; margin-bottom: 8px;">In Date:</label>
        <input type="text" name="in_date" required style="width: 100%; padding: 8px; margin-bottom: 16px;">

        <label for="wk_done" style="display: block; margin-bottom: 8px;">Work Done:</label>
        <input type="text" name="wk_done" required style="width: 100%; padding: 8px; margin-bottom: 16px;">

        <button type="submit" style="background-color: #4CAF50; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer;">Submit</button>
    </form>
</div>

<?php
include('footer.php'); // Include your footer file
?>
