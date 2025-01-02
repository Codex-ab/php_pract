<?php 

$kids_name = isset($_POST['name']) ? $_POST['name'] : '';
$kids_age = isset($_POST['age']) ? (int)$_POST['age'] : 0;
$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($kids_age >= 21) {
        $message = "Hello $kids_name, you are eligible to drink beer.";
    } else {
        $message = "Hello $kids_name, you are not eligible to drink beer.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Eligibility</title>
</head>
<body>
    <form method="post" action="">
        <input type="text" name="name"    placeholder="Enter Your name" required>
        <input type="number" name="age" placeholder="Enter your age" required>
        <input type="submit" value="Check Eligibility">
    </form>
    <?php 
    if ($message) {
        echo "<p>$message</p>";
    }
    ?>
</body>
</html>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    form {
        background: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    input[type="text"], input[type="number"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="submit"] {
        background: #28a745;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background: #218838;
    }

    p {
        margin-top: 20px;
        font-size: 18px;
    }
</style>