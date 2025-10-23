<!DOCTYPE html>
<html>
<head>
    <title>My Activity For Today</title>
</head>
<body>
<h1>Activity</h1>

<?php

$firstName = "JohnMark";
$lastName = "Mendoza";
$fullName = $firstName . " " . $lastName; 
echo "<h2>Concatenate String</h2>";
echo "Full Name: " . $fullName . "<br>";


echo "<h2>Math Function </h2>";
$a = 5;
$b = 10;
$sum = $a + $b;
$product = $a * $b;
echo "Sum: $sum<br>";
echo "Product: $product<br>";
echo "Square Root of 16 is " . sqrt(16) . "<br>";
echo "Random number (1-50): " . rand(1, 50) . "<br>";


echo "<h2>Loops </h2>";


echo "<b>For Loop:</b><br>";
for ($i = 1; $i <= 5; $i++) {
    echo "Number: $i <br>";
}


echo "<h2>Constants </h2>";
define("SITE_NAME", "My PHP Example Site");
const VERSION = "1.0.0";
echo "Site Name: " . SITE_NAME . "<br>";
echo "Version: " . VERSION . "<br>";


echo "<h2>PHP Superglobals </h2>";
echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br>";
echo "Script Filename: " . $_SERVER['SCRIPT_FILENAME'] . "<br>";
echo "User Agent: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";


?>
<h2>Sample Form Handling</h2>
<form method="POST" action="">
    <label>Name:</label>
    <input type="text" name="name" required><br><br>
    <label>Age:</label>
    <input type="number" name="age" required><br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    echo "<h3>Form Submitted!</h3>";
    echo "Hello, $name. You are $age years old.<br>";
}
?>

</body>
</html>