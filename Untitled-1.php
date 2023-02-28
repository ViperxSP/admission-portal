<?php
// process-form.php

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Store data in a database or do other processing

// Redirect to the second page
header('Location: aadmission.html');
exit;
?>