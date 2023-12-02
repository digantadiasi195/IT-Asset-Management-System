<?php
session_start();
include('homepage.php');

if (isset($_SESSION['employee_id'])) {
    include('');
} else {
    include('login.php');
}

include('footer.php');
?>
