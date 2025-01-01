<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    if ($name === 'Abdullah') {
        echo "Welcome, Abdullah! You are allowed to enter the main content.";
        // Place the main content here
        echo '<a href="content.php">Go to the main Content</a>';
    } else {
        echo "Sorry, you are not allowed to enter the main content.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Access Control</title>
</head>
<body>
    
    <form method="post" action="./content.php">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name" required>
        <input type="submit" value="Submit">
    </form>
</body>
</html>